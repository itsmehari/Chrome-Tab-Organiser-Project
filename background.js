// Smart Tab Organiser Background Script
// Scans all Chrome windows/tabs, collects tabs by domain, and provides actions for organizing, closing, opening, and analyzing.

// Helper: Get base domain (hostname)
function getBaseDomain(url) {
  if (!url || typeof url !== 'string') return null;
  try {
    const u = new URL(url);
    return u.hostname;
  } catch (e) {
    return null;
  }
}

// Helper: Get favicon for a tab
function getFavicon(tab) {
  return tab.favIconUrl || `https://www.google.com/s2/favicons?domain=${getBaseDomain(tab.url)}`;
}

// Helper: Get title for a tab
function getTitle(tab) {
  return tab.title || getBaseDomain(tab.url) || tab.url;
}

// Analyze all tabs and group by domain
async function analyzeTabs(limit = null) {
  try {
    const windows = await chrome.windows.getAll({ populate: true });
    const domainMap = {};
    for (const win of windows) {
      for (const tab of win.tabs) {
        const domain = getBaseDomain(tab.url);
        if (!domain) continue;
        if (!domainMap[domain]) {
          domainMap[domain] = {
            domain,
            tabCount: 0,
            favicon: getFavicon(tab),
            title: getTitle(tab),
            urls: [],
            tabIds: []
          };
        }
        domainMap[domain].tabCount++;
        domainMap[domain].urls.push(tab.url);
        domainMap[domain].tabIds.push(tab.id);
      }
    }
    
    let result = Object.values(domainMap);
    if (limit !== null) {
      result = result.filter(item => item.tabCount > limit);
    }
    
    // Sort by tab count descending
    result.sort((a, b) => b.tabCount - a.tabCount);

    return { success: true, data: result };
  } catch (err) {
    console.error('Error analyzing tabs:', err);
    return { success: false, error: err.message };
  }
}

async function groupTabsInChunks(tabs, domain) {
    const tabsToGroupIds = tabs.map(t => t.id);

    const CHUNK_SIZE = 25;
    const chunks = [];
    for (let i = 0; i < tabsToGroupIds.length; i += CHUNK_SIZE) {
      chunks.push(tabsToGroupIds.slice(i, i + CHUNK_SIZE));
    }

    const createdGroupIds = [];
    
    // Create a new window for each chunk of tabs.
    for (let i = 0; i < chunks.length; i++) {
      const chunk = chunks[i];
      if (chunk.length === 0) continue;

      // Create a new window and move the first tab of the chunk into it.
      const newWindow = await chrome.windows.create({ tabId: chunk[0], state: 'normal' });
      
      // If there are more tabs in the chunk, move them into the new window.
      if (chunk.length > 1) {
        await chrome.tabs.move(chunk.slice(1), { windowId: newWindow.id, index: -1 });
      }

      // Now that all tabs are in the new window, group them.
      const group = await chrome.tabs.group({ tabIds: chunk, windowId: newWindow.id });
      const groupTitle = chunks.length > 1 ? `${domain} (Part ${i + 1})` : domain;
      await chrome.tabGroups.update(group, { title: groupTitle });
      createdGroupIds.push(group);
    }

    return createdGroupIds;
}

// Organize all tabs by domain using Tab Groups API
async function organizeTabsByDomain() {
  try {
    const allTabs = await chrome.tabs.query({});
    const tabsByDomain = {};

    // Group all tabs by domain, excluding those already in a group
    for (const tab of allTabs) {
      if (tab.url && (tab.groupId === undefined || tab.groupId === -1)) {
        const domain = getBaseDomain(tab.url);
        if (domain) {
          if (!tabsByDomain[domain]) {
            tabsByDomain[domain] = [];
          }
          tabsByDomain[domain].push(tab);
        }
      }
    }

    const allCreatedGroupIds = [];
    let domainsOrganized = 0;
    for (const domain in tabsByDomain) {
      const tabsToGroup = tabsByDomain[domain];
      if (tabsToGroup.length > 5) {
        const createdGroupIds = await groupTabsInChunks(tabsToGroup, domain);
        allCreatedGroupIds.push(...createdGroupIds);
        domainsOrganized++;
      }
    }

    if (domainsOrganized === 0) {
      return { success: true, message: "No domains found with enough tabs to organize." };
    }
    
    return { success: true, message: `Organized tabs for ${domainsOrganized} domain(s).`, groupIds: allCreatedGroupIds };
  } catch (err) {
    console.error('Error organizing all tabs by domain:', err);
    return { success: false, error: err.message };
  }
}

// Organize tabs for a specific domain
async function organizeTabsForDomain(domain) {
  try {
    const tabs = await chrome.tabs.query({ url: `*://${domain}/*` });
    const ungroupedTabs = tabs.filter(t => t.groupId === undefined || t.groupId === -1);

    if (ungroupedTabs.length <= 5) {
      return { success: true, message: `Only ${ungroupedTabs.length} ungrouped tabs found for ${domain}. A minimum of 6 is required.` };
    }

    const createdGroupIds = await groupTabsInChunks(ungroupedTabs, domain);
    
    return { success: true, message: `Grouped ${ungroupedTabs.length} tabs for ${domain}.`, groupIds: createdGroupIds };
  } catch (err) {
    console.error('Error organizing tabs for domain:', err);
    return { success: false, error: err.message };
  }
}

// Close all tabs for a domain
async function closeAllTabsForDomain(domain) {
  try {
    const windows = await chrome.windows.getAll({ populate: true });
    const tabIds = [];
    for (const win of windows) {
      for (const tab of win.tabs) {
        if (getBaseDomain(tab.url) === domain) {
          tabIds.push(tab.id);
        }
      }
    }
    if (tabIds.length === 0) return { success: true, message: `No tabs to close for ${domain}.` };
    await chrome.tabs.remove(tabIds);
    return { success: true, message: `Closed ${tabIds.length} tabs for ${domain}.` };
  } catch (err) {
    console.error('Error closing tabs for domain:', err);
    return { success: false, error: err.message };
  }
}

// --- Settings and Undo/Redo State ---
let taborgSettings = {};
let lastCreatedGroupIds = [];
let redoStack = [];

// Defensive wrapper for chrome.storage.local.get
function safeStorageGet(keys, callback) {
  if (chrome.storage && chrome.storage.local && typeof chrome.storage.local.get === 'function') {
    chrome.storage.local.get(keys, callback);
  } else {
    console.warn('chrome.storage.local.get is not available in this context.');
    callback({});
  }
}

// Load settings from storage
function loadSettings() {
  safeStorageGet(['taborg_settings'], (result) => {
    taborgSettings = result.taborg_settings || {};
  });
}

// Listen for settings changes
if (
  chrome.storage &&
  typeof chrome.storage.onChanged === 'object' &&
  typeof chrome.storage.onChanged.addListener === 'function'
) {
  chrome.storage.onChanged.addListener((changes, area) => {
    if (area === 'local' && changes.taborg_settings) {
      taborgSettings = changes.taborg_settings.newValue || {};
    }
  });
} else {
  console.warn('chrome.storage.onChanged or addListener is not available in this context (background).', chrome.storage && chrome.storage.onChanged);
}
loadSettings();

// --- Undo/Redo Helpers ---
function saveUndoState(groupIds) {
  lastCreatedGroupIds = Array.isArray(groupIds) ? groupIds : [groupIds];
  redoStack = []; // Clear redo stack on new action
}

async function undoLastAction() {
  if (lastCreatedGroupIds.length > 0) {
    // We will reverse the array to undo the last created group first.
    const groupsToUndo = [...lastCreatedGroupIds].reverse(); 
    let undoneCount = 0;
    for (const groupId of groupsToUndo) {
      const tabsToUngroup = await chrome.tabs.query({ groupId: groupId });
      if (tabsToUngroup.length > 0) {
          undoneCount++;
          // Add each undoable action to the redo stack separately
          redoStack.push({ groupId: groupId, tabIds: tabsToUngroup.map(t => t.id) });
          await chrome.tabs.ungroup(tabsToUngroup.map(t => t.id));
      }
    }
    lastCreatedGroupIds = [];
    return { success: true, message: `Undid ${undoneCount} group(s).`};
  }
  return { success: false, message: "Nothing to undo."};
}

async function redoLastAction() {
  if (redoStack.length > 0) {
    const actionToRedo = redoStack.pop();
    const newGroup = await chrome.tabs.group({ tabIds: actionToRedo.tabIds });
    lastCreatedGroupIds = [newGroup];
    return { success: true, message: "Redo successful." };
  }
  return { success: false, message: "Nothing to redo." };
}

// --- Auto-Organize Logic ---
chrome.tabs.onCreated.addListener(async (tab) => {
  if (!taborgSettings.autoOrganize) return;
  const threshold = taborgSettings.autoOrganizeThreshold || 5;
  const domain = getBaseDomain(tab.url);
  if (!domain) return;
  // Count tabs for this domain
  const allTabs = await chrome.tabs.query({});
  const domainTabs = allTabs.filter(t => getBaseDomain(t.url) === domain);
  if (domainTabs.length > threshold) {
    saveUndoState();
    organizeTabsForDomain(domain);
  }
});

// --- Comprehensive Statistics ---
async function getComprehensiveStats() {
  try {
    const windows = await chrome.windows.getAll({ populate: true });
    const allTabs = windows.flatMap(win => win.tabs);
    const groups = await chrome.tabGroups.query({});

    // Basic counts
    const totalTabs = allTabs.length;
    const totalWindows = windows.length;
    const totalGroups = groups.length;
    const audibleTabs = allTabs.filter(t => t.audible).length;
    const discardedTabs = allTabs.filter(t => t.discarded).length;

    // Duplicate tabs
    const urlMap = {};
    allTabs.forEach(tab => {
      if (tab.url) {
        urlMap[tab.url] = (urlMap[tab.url] || 0) + 1;
      }
    });
    const duplicateTabs = Object.values(urlMap).filter(count => count > 1).reduce((acc, count) => acc + (count - 1), 0);

    return {
      success: true,
      totalTabs,
      totalWindows,
      totalGroups,
      audibleTabs,
      discardedTabs,
      duplicateTabs,
    };
  } catch (err) {
    console.error('Error getting comprehensive stats:', err);
    return { success: false, error: err.message };
  }
}

// --- Close Duplicate Tabs ---
async function closeDuplicateTabs() {
  try {
    const allTabs = await chrome.tabs.query({});
    const urlMap = {};
    const duplicatesToRemove = [];
    
    for (const tab of allTabs) {
      if (tab.url) {
        if (urlMap[tab.url]) {
          duplicatesToRemove.push(tab.id);
        } else {
          urlMap[tab.url] = tab.id;
        }
      }
    }

    if (duplicatesToRemove.length > 0) {
      await chrome.tabs.remove(duplicatesToRemove);
    }

    return { success: true, count: duplicatesToRemove.length, message: `Closed ${duplicatesToRemove.length} duplicate tab(s).` };
  } catch (err) {
    console.error('Error closing duplicate tabs:', err);
    return { success: false, error: err.message };
  }
}

// --- Interactive Stats ---
async function findAndFocusAudibleTab() {
  try {
    const audibleTabs = await chrome.tabs.query({ audible: true });
    if (audibleTabs.length > 0) {
      const firstAudibleTab = audibleTabs[0];
      // Switch to the window that contains the tab
      await chrome.windows.update(firstAudibleTab.windowId, { focused: true });
      // Highlight the tab
      await chrome.tabs.update(firstAudibleTab.id, { active: true });
      return { success: true };
    }
    return { success: false, message: 'No audible tabs found.' };
  } catch (err) {
    console.error('Error focusing audible tab:', err);
    return { success: false, error: err.message };
  }
}

// --- Proactive Suggestions ---
async function getGroupingSuggestions() {
  try {
    const allTabs = await chrome.tabs.query({ nogroup: true }); // Only get tabs not in a group
    const domainMap = {};
    for (const tab of allTabs) {
      const domain = getBaseDomain(tab.url);
      if (!domain) continue;
      if (!domainMap[domain]) {
        domainMap[domain] = { domain, count: 0, favicon: getFavicon(tab) };
      }
      domainMap[domain].count++;
    }
    const suggestions = Object.values(domainMap).filter(item => item.count > 5);
    return { success: true, data: suggestions };
  } catch (err) {
    console.error('Error getting grouping suggestions:', err);
    return { success: false, error: err.message };
  }
}

// Initialize storage
chrome.runtime.onInstalled.addListener(() => {
  chrome.storage.local.get(['undoStack', 'redoStack', 'savedGroups'], result => {
    if (!result.undoStack) chrome.storage.local.set({ undoStack: [] });
    if (!result.redoStack) chrome.storage.local.set({ redoStack: [] });
    if (!result.savedGroups) chrome.storage.local.set({ savedGroups: [] });
  });
});

/**
 * Saves all tabs from a given domain to local storage and closes them.
 * @param {string} domain The domain to save tabs for.
 * @returns {Promise<Object>} A confirmation message.
 */
async function saveTabsForLater(domain) {
  const tabs = await chrome.tabs.query({ url: `*://${domain}/*` });
  if (tabs.length === 0) {
    throw new Error(`No tabs found for domain: ${domain}`);
  }

  const newGroup = {
    name: `Tabs from ${domain}`,
    timestamp: Date.now(),
    urls: tabs.map(t => t.url),
    favicon: tabs[0].favIconUrl || null
  };

  const { savedGroups } = await chrome.storage.local.get('savedGroups');
  savedGroups.unshift(newGroup); // Add to the beginning of the list
  await chrome.storage.local.set({ savedGroups });

  const tabIds = tabs.map(t => t.id);
  await chrome.tabs.remove(tabIds);
  
  return { message: `Saved ${tabs.length} tab(s) from ${domain}.` };
}

/**
 * Retrieves all saved tab groups from storage.
 * @returns {Promise<Object>} An object containing the list of saved groups.
 */
async function getSavedGroups() {
  const { savedGroups } = await chrome.storage.local.get('savedGroups');
  return { groups: savedGroups || [] };
}

/**
 * Restores a saved tab group by opening all its URLs in a new window.
 * @param {number} timestamp The timestamp ID of the group to restore.
 * @returns {Promise<Object>} A confirmation message.
 */
async function restoreSavedGroup(timestamp) {
  const { savedGroups } = await chrome.storage.local.get('savedGroups');
  const groupToRestore = savedGroups.find(g => g.timestamp === Number(timestamp));

  if (!groupToRestore) {
    throw new Error('Could not find the specified group to restore.');
  }

  await chrome.windows.create({ url: groupToRestore.urls });

  // Optional: Remove the group after restoring it.
  const remainingGroups = savedGroups.filter(g => g.timestamp !== Number(timestamp));
  await chrome.storage.local.set({ savedGroups: remainingGroups });

  return { message: `Restored ${groupToRestore.urls.length} tab(s).` };
}

/**
 * Deletes a saved tab group from storage.
 * @param {number} timestamp The timestamp ID of the group to delete.
 * @returns {Promise<Object>} A confirmation message.
 */
async function deleteSavedGroup(timestamp) {
  let { savedGroups } = await chrome.storage.local.get('savedGroups');
  const initialCount = savedGroups.length;
  savedGroups = savedGroups.filter(g => g.timestamp !== Number(timestamp));

  if (savedGroups.length === initialCount) {
    throw new Error('Could not find the specified group to delete.');
  }

  await chrome.storage.local.set({ savedGroups });
  return { message: 'Group deleted successfully.' };
}

// --- Offscreen Document and Clipboard ---

// A global promise to avoid race conditions
let creatingOffscreenDocument;

async function setupOffscreenDocument(path) {
  // Check if we have an existing offscreen document.
  if (await chrome.offscreen.hasDocument?.()) {
    return;
  }

  // If a creation process is already underway, wait for it to complete.
  if (creatingOffscreenDocument) {
    await creatingOffscreenDocument;
    return;
  }

  creatingOffscreenDocument = chrome.offscreen.createDocument({
    url: path,
    reasons: ['CLIPBOARD'],
    justification: 'To copy text to the clipboard',
  });

  await creatingOffscreenDocument;
  creatingOffscreenDocument = null;
}

async function copyUrlsByDomain(domain) {
  try {
    const tabs = await chrome.tabs.query({ url: `*://${domain}/*` });
    const urls = tabs.map(t => t.url);
    const textToCopy = urls.join('\n');

    await setupOffscreenDocument('offscreen.html');

    // Send message to the offscreen document to perform the copy
    await chrome.runtime.sendMessage({
      action: 'copyToClipboard',
      target: 'offscreen',
      data: textToCopy,
    });

    return { success: true, message: `Copied ${urls.length} URLs for ${domain}.` };
  } catch (err) {
    console.error('Error copying URLs:', err);
    return { success: false, error: err.message };
  }
}

// --- Main Action Handler ---
chrome.runtime.onMessage.addListener((request, sender, sendResponse) => {
  (async () => {
    try {
      let response;
      switch (request.action) {
        case 'organizeAll':
          response = await organizeTabsByDomain();
          if (response.success && response.groupIds) {
            saveUndoState(response.groupIds);
          }
          break;
        case 'getDomainAnalysis': {
          const analysis = await analyzeTabs(1);
          response = { status: 'success', domains: analysis.data, suggestions: [] };
          break;
        }
        case 'getComprehensiveStats':
          response = await getComprehensiveStats();
          break;
        case 'closeDuplicates':
          response = await closeDuplicateTabs();
          break;
        case 'focusAudibleTab':
          response = await findAndFocusAudibleTab();
          break;
        case 'getGroupingSuggestions':
          response = await getGroupingSuggestions();
          break;
        case 'organizeByDomain':
          response = await organizeTabsForDomain(request.domain);
          if (response.success && response.groupId) {
            saveUndoState(response.groupId);
          }
          break;
        case 'closeTabsByDomain':
          saveUndoState();
          response = await closeAllTabsForDomain(request.domain);
          break;
        case 'undo':
          response = await undoLastAction();
          break;
        case 'redo':
          response = await redoLastAction();
          break;
        case 'copyUrlsByDomain':
          response = await copyUrlsByDomain(request.domain);
          break;
        case 'saveTabsForLater':
          response = await saveTabsForLater(request.domain);
          break;
        case 'getSavedGroups':
          response = await getSavedGroups();
          break;
        case 'restoreSavedGroup':
          response = await restoreSavedGroup(request.timestamp);
          break;
        case 'deleteSavedGroup':
          response = await deleteSavedGroup(request.timestamp);
          break;
        default:
          throw new Error(`Unknown action: ${request.action}`);
      }
      sendResponse({ status: 'success', ...response });
    } catch (error) {
      console.error(`Error during ${request.action}:`, error);
      sendResponse({ status: 'error', message: error.message });
    }
  })();
  return true; // Indicates asynchronous response
}); 