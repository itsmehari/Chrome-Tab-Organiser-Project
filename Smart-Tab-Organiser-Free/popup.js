'use strict';

/**
 * Shows a toast notification with a message.
 * @param {string} message - The message to display.
 */
function showToast(message) {
  const toast = document.getElementById('toast');
  if (!toast) return;
  toast.textContent = message;
  toast.classList.add('show');
  setTimeout(() => {
    toast.classList.remove('show');
  }, 3000);
}

/**
 * Generic handler for sending actions to the background script.
 * @param {string} action - The action to perform.
 * @param {object} [data={}] - Additional data to send.
 * @param {function} [callback=null] - A function to call on success.
 */
function handleAction(action, data = {}, callback = null) {
  const spinner = document.getElementById('spinner');
  if (spinner) spinner.style.display = 'inline-block';

  chrome.runtime.sendMessage({ action, ...data }, response => {
    if (spinner) spinner.style.display = 'none';

    if (chrome.runtime.lastError) {
      console.error(`Error with action ${action}:`, chrome.runtime.lastError);
      showToast('An error occurred.');
      return;
    }

    if (response.status === 'error' || !response.success) {
      showToast(response.message || response.error || 'An unknown error occurred.');
    } else if (response.message) {
      showToast(response.message);
    }

    fetchAndDisplayStats();
    fetchAndDisplayDomains();
    if (callback) callback(response);
  });
}

/**
 * Fetches and displays comprehensive stats.
 */
function fetchAndDisplayStats() {
  const loader = document.getElementById('stats-loader');
  const container = document.getElementById('stats-container-grid');
  if (!loader || !container) return;

  loader.style.display = 'block';
  container.innerHTML = '';

  chrome.runtime.sendMessage({ action: 'getComprehensiveStats' }, response => {
    loader.style.display = 'none';
    if (response && response.status === 'success') {
      const stats = [
        { label: 'Total Tabs', value: response.totalTabs },
        { label: 'Windows', value: response.totalWindows },
        { label: 'Tab Groups', value: response.totalGroups },
        { label: 'Audible Tabs', value: response.audibleTabs },
        { label: 'Duplicate Tabs', value: response.duplicateTabs },
        { label: 'Memory Savers', value: response.discardedTabs }
      ];

      stats.forEach(stat => {
        const item = document.createElement('div');
        item.className = 'stat-item';
        item.innerHTML = `
          <div class="stat-value">${stat.value}</div>
          <div class="stat-label">${stat.label}</div>
        `;
        container.appendChild(item);
      });
    }
  });
}

/**
 * Displays a list of domains that have a high number of tabs.
 * @param {Array<Object>} domains - A list of domain objects with `name` and `count` properties.
 */
function displayDomainList(domains) {
  const domainList = document.getElementById('domain-list');
  const emptyState = document.getElementById('empty-domain-list');
  if (!domainList || !emptyState) return;

  domainList.innerHTML = '';

  if (domains.length === 0) {
    emptyState.style.display = 'block';
    return;
  }
  emptyState.style.display = 'none';

  domains.forEach(({ domain, tabCount, favicon }) => {
    const entry = document.createElement('div');
    entry.className = 'tab-preview';
    entry.innerHTML = `
      <img src="${favicon || 'icons/icon16.jpeg'}" class="tab-thumb" alt="Favicon for ${domain}">
      <div class="tab-info">
        <div class="tab-title">${domain}</div>
      </div>
      <span class="badge">${tabCount}</span>
      <div class="domain-actions">
        <button class="btn btn-sm btn-success save-domain-btn" data-domain="${domain}">Save</button>
        <button class="btn btn-sm organize-domain-btn" data-domain="${domain}">Organize</button>
        <button class="btn btn-sm btn-danger close-domain-btn" data-domain="${domain}">Close All</button>
      </div>
    `;
    domainList.appendChild(entry);
  });

  // Add event listeners
  domainList.querySelectorAll('.save-domain-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const domain = btn.dataset.domain;
      handleAction('saveTabsForLater', { domain });
    });
  });

  domainList.querySelectorAll('.organize-domain-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const domain = btn.dataset.domain;
      handleAction('organizeTabsForDomain', { domain });
    });
  });

  domainList.querySelectorAll('.close-domain-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const domain = btn.dataset.domain;
      if (confirm(`Are you sure you want to close all tabs from ${domain}?`)) {
        handleAction('closeTabsForDomain', { domain });
      }
    });
  });
}

/**
 * Fetches and displays domains with multiple tabs.
 */
function fetchAndDisplayDomains() {
  handleAction('analyzeTabs', { limit: 1 }, response => {
    if (response && response.success && response.data) {
      displayDomainList(response.data);
    }
  });
}

/**
 * Initializes or updates the color theme based on stored preference.
 */
function initializeTheme() {
  const currentTheme = localStorage.getItem('theme') || 'light';
  document.documentElement.setAttribute('data-theme', currentTheme);
  const toggle = document.getElementById('dark-toggle');
  if(toggle) toggle.textContent = currentTheme === 'dark' ? '☀️' : '🌙';
}

/**
 * Toggles the color theme between light and dark.
 */
function toggleTheme() {
  const currentTheme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
  localStorage.setItem('theme', currentTheme);
  initializeTheme();
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
  initializeTheme();
  fetchAndDisplayStats();
  fetchAndDisplayDomains();

  // Event listeners
  document.getElementById('dark-toggle').addEventListener('click', toggleTheme);
}); 