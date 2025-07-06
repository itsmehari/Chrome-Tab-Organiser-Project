// Add to Standard Sites Button Logic
const addToStandardSitesBtn = document.getElementById('addToStandardSitesBtn');
if (addToStandardSitesBtn) {
  addToStandardSitesBtn.addEventListener('click', () => {
    chrome.tabs.query({ active: true, currentWindow: true }, (tabs) => {
      const tab = tabs[0];
      if (!tab || !tab.url) return;
      const storage = chrome && chrome.storage && chrome.storage.sync ? chrome.storage.sync : chrome.storage.local;
      storage.get(['standardSites'], (result) => {
        const sites = result.standardSites || [];
        // Avoid duplicates
        if (sites.some(site => site.url === tab.url)) {
          alert('This site is already in your Standard Sites.');
          return;
        }
        sites.push({ title: tab.title, url: tab.url, addedAt: Date.now() });
        storage.set({ standardSites: sites }, () => {
          alert('Site added to Standard Sites!');
        });
      });
    });
  });
}

// Link to Standard Sites Management Page
const manageStandardSitesLink = document.getElementById('manageStandardSitesLink');
if (manageStandardSitesLink) {
  manageStandardSitesLink.addEventListener('click', () => {
    chrome.tabs.create({ url: chrome.runtime.getURL('standard-sites.html') });
  });
} 