// Smart Tab Organiser Free Version - Background Script

// Constants for free version limitations
const FREE_VERSION_LIMITS = {
  MAX_TAB_GROUPS: 3,
  MAX_SAVED_SESSIONS: 2,
  MAX_TABS_PER_GROUP: 15
};

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
    
    result.sort((a, b) => b.tabCount - a.tabCount);
    return { success: true, data: result };
  } catch (err) {
    console.error('Error analyzing tabs:', err);
    return { success: false, error: err.message };
  }
}

// Check if action is allowed under free version limits
async function checkFreeVersionLimits(action) {
  const { groups } = await chrome.tabGroups.query({});
  const savedSessions = await chrome.storage.local.get('savedGroups');
  const savedGroupsCount = (savedSessions.savedGroups || []).length;

  switch (action) {
    case 'createGroup':
      if (groups.length >= FREE_VERSION_LIMITS.MAX_TAB_GROUPS) {
        return {
          allowed: false,
          message: `Free version is limited to ${FREE_VERSION_LIMITS.MAX_TAB_GROUPS} tab groups. Upgrade to create more!`
        };
      }
      break;
    case 'saveSession':
      if (savedGroupsCount >= FREE_VERSION_LIMITS.MAX_SAVED_SESSIONS) {
        return {
          allowed: false,
          message: `Free version is limited to ${FREE_VERSION_LIMITS.MAX_SAVED_SESSIONS} saved sessions. Upgrade to save more!`
        };
      }
      break;
  }
  return { allowed: true };
}

// Organize tabs for a specific domain
async function organizeTabsForDomain(domain) {
  try {
    const check = await checkFreeVersionLimits('createGroup');
    if (!check.allowed) {
      return { success: false, error: check.message };
    }

    const tabs = await chrome.tabs.query({ url: `*://${domain}/*` });
    const ungroupedTabs = tabs.filter(t => t.groupId === undefined || t.groupId === -1);

    if (ungroupedTabs.length === 0) {
      return { success: true, message: 'No ungrouped tabs found for this domain.' };
    }

    if (ungroupedTabs.length > FREE_VERSION_LIMITS.MAX_TABS_PER_GROUP) {
      return { 
        success: false, 
        error: `Free version is limited to ${FREE_VERSION_LIMITS.MAX_TABS_PER_GROUP} tabs per group. Upgrade to group more tabs!` 
      };
    }

    const group = await chrome.tabs.group({ tabIds: ungroupedTabs.map(t => t.id) });
    await chrome.tabGroups.update(group, { title: domain });
    
    return { 
      success: true, 
      message: `Grouped ${ungroupedTabs.length} tabs for ${domain}.`,
      groupId: group 
    };
  } catch (err) {
    console.error('Error organizing tabs for domain:', err);
    return { success: false, error: err.message };
  }
}

// Get comprehensive stats
async function getComprehensiveStats() {
  try {
    const windows = await chrome.windows.getAll({ populate: true });
    const { groups } = await chrome.tabGroups.query({});
    
    let totalTabs = 0;
    let audibleTabs = 0;
    let discardedTabs = 0;
    const urlMap = new Map();

    for (const win of windows) {
      for (const tab of win.tabs) {
        totalTabs++;
        if (tab.audible) audibleTabs++;
        if (tab.discarded) discardedTabs++;
        
        const url = tab.url || '';
        urlMap.set(url, (urlMap.get(url) || 0) + 1);
      }
    }

    const duplicateTabs = Array.from(urlMap.values()).filter(count => count > 1).length;

    return {
      status: 'success',
      totalTabs,
      totalWindows: windows.length,
      totalGroups: groups.length,
      audibleTabs,
      duplicateTabs,
      discardedTabs
    };
  } catch (err) {
    console.error('Error getting stats:', err);
    return { status: 'error', message: err.message };
  }
}

// Save tabs for later
async function saveTabsForLater(domain) {
  try {
    const check = await checkFreeVersionLimits('saveSession');
    if (!check.allowed) {
      return { success: false, error: check.message };
    }

    const tabs = await chrome.tabs.query({ url: `*://${domain}/*` });
    if (tabs.length === 0) {
      return { success: false, error: 'No tabs found for this domain.' };
    }

    const savedGroups = (await chrome.storage.local.get('savedGroups')).savedGroups || [];
    const timestamp = Date.now();
    
    savedGroups.push({
      timestamp,
      domain,
      tabs: tabs.map(t => ({ url: t.url, title: t.title }))
    });

    await chrome.storage.local.set({ savedGroups });
    return { success: true, message: `Saved ${tabs.length} tabs for ${domain}.` };
  } catch (err) {
    console.error('Error saving tabs:', err);
    return { success: false, error: err.message };
  }
}

// Get saved groups
async function getSavedGroups() {
  try {
    const { savedGroups } = await chrome.storage.local.get('savedGroups');
    return { success: true, data: savedGroups || [] };
  } catch (err) {
    console.error('Error getting saved groups:', err);
    return { success: false, error: err.message };
  }
}

// Restore saved group
async function restoreSavedGroup(timestamp) {
  try {
    const { savedGroups } = await chrome.storage.local.get('savedGroups');
    const group = savedGroups.find(g => g.timestamp === timestamp);
    
    if (!group) {
      return { success: false, error: 'Saved group not found.' };
    }

    const window = await chrome.windows.create({});
    for (const tab of group.tabs) {
      await chrome.tabs.create({
        windowId: window.id,
        url: tab.url
      });
    }

    return { success: true, message: `Restored ${group.tabs.length} tabs for ${group.domain}.` };
  } catch (err) {
    console.error('Error restoring group:', err);
    return { success: false, error: err.message };
  }
}

// Message handler
chrome.runtime.onMessage.addListener((request, sender, sendResponse) => {
  switch (request.action) {
    case 'analyzeTabs':
      analyzeTabs(request.limit).then(sendResponse);
      break;
    case 'organizeTabsForDomain':
      organizeTabsForDomain(request.domain).then(sendResponse);
      break;
    case 'getComprehensiveStats':
      getComprehensiveStats().then(sendResponse);
      break;
    case 'saveTabsForLater':
      saveTabsForLater(request.domain).then(sendResponse);
      break;
    case 'getSavedGroups':
      getSavedGroups().then(sendResponse);
      break;
    case 'restoreSavedGroup':
      restoreSavedGroup(request.timestamp).then(sendResponse);
      break;
    default:
      sendResponse({ success: false, error: 'Unknown action' });
  }
  return true;
}); 