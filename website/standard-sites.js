// Standard Sites Management Script
// Handles CRUD, open all, and UI for standard-sites.html

// Use chrome.storage.sync if available, fallback to local
const storage = chrome && chrome.storage && chrome.storage.sync ? chrome.storage.sync : chrome.storage.local;

const SITES_KEY = 'standardSites';

// DOM Elements
const sitesList = document.getElementById('sitesList');
const addSiteBtn = document.getElementById('addSiteBtn');
const openAllBtn = document.getElementById('openAllBtn');
const emptyState = document.getElementById('emptyState');
const siteModal = new bootstrap.Modal(document.getElementById('siteModal'));
const siteForm = document.getElementById('siteForm');
const siteTitle = document.getElementById('siteTitle');
const siteUrl = document.getElementById('siteUrl');
const siteIndex = document.getElementById('siteIndex');

let sites = [];

// Utility: Render Sites List
function renderSites() {
  sitesList.innerHTML = '';
  if (!sites.length) {
    emptyState.style.display = '';
    return;
  }
  emptyState.style.display = 'none';
  sites.forEach((site, idx) => {
    const item = document.createElement('div');
    item.className = 'list-group-item d-flex justify-content-between align-items-center';
    item.innerHTML = `
      <div>
        <img src="https://www.google.com/s2/favicons?domain=${encodeURIComponent(site.url)}" alt="favicon" style="width:20px;height:20px;margin-right:8px;vertical-align:middle;">
        <a href="${site.url}" target="_blank" rel="noopener">${site.title}</a>
      </div>
      <div>
        <button class="btn btn-sm btn-secondary me-1" onclick="editSite(${idx})">Edit</button>
        <button class="btn btn-sm btn-danger" onclick="deleteSite(${idx})">Delete</button>
      </div>
    `;
    sitesList.appendChild(item);
  });
}

// Load Sites from Storage
function loadSites() {
  storage.get([SITES_KEY], (result) => {
    sites = result[SITES_KEY] || [];
    renderSites();
  });
}

// Save Sites to Storage
function saveSites() {
  storage.set({ [SITES_KEY]: sites }, renderSites);
}

// Add Site
addSiteBtn.addEventListener('click', () => {
  siteForm.reset();
  siteIndex.value = '';
  siteModal.show();
});

// Edit Site
window.editSite = function(idx) {
  siteTitle.value = sites[idx].title;
  siteUrl.value = sites[idx].url;
  siteIndex.value = idx;
  siteModal.show();
};

// Delete Site
window.deleteSite = function(idx) {
  if (confirm('Delete this site?')) {
    sites.splice(idx, 1);
    saveSites();
  }
};

// Submit Add/Edit Form
siteForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const title = siteTitle.value.trim();
  const url = siteUrl.value.trim();
  const idx = siteIndex.value;
  if (idx === '') {
    sites.push({ title, url, addedAt: Date.now() });
  } else {
    sites[idx] = { ...sites[idx], title, url };
  }
  saveSites();
  siteModal.hide();
});

// Open All Sites
openAllBtn.addEventListener('click', () => {
  sites.forEach(site => {
    chrome.tabs.create({ url: site.url });
  });
});

// Initial Load
loadSites(); 