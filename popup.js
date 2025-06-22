'use strict';

let chartInstance = null;

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

    if (response.status === 'error') {
      showToast(response.message || 'An unknown error occurred.');
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
        { label: 'Audible Tabs', value: response.audibleTabs, id: 'audible-tabs-link' },
        { label: 'Duplicate Tabs', value: response.duplicateTabs },
        { label: 'Memory Savers', value: response.discardedTabs }
      ];

      stats.forEach(stat => {
        const item = document.createElement('div');
        item.className = 'stat-item';
        item.innerHTML = `
          <div class="stat-value" ${stat.id ? `id="${stat.id}"` : ''}>${stat.value}</div>
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
        <button class="btn btn-sm btn-secondary copy-domain-btn" data-domain="${domain}" title="Copy URLs">Copy</button>
      </div>
    `;
    domainList.appendChild(entry);
  });
}

/**
 * Renders the chart of top domains by tab count.
 * @param {Array<Object>} domains - The list of domains.
 */
function renderTopDomainsChart(domains) {
  const chartLoader = document.getElementById('chart-loader');
  const ctx = document.getElementById('domain-chart').getContext('2d');
  if (!chartLoader || !ctx) return;

  chartLoader.style.display = 'none';

  const topFive = domains.slice(0, 5);
  const labels = topFive.map(d => d.domain);
  const data = topFive.map(d => d.tabCount);

  if (chartInstance) {
    chartInstance.destroy();
  }

  chartInstance = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        data: data,
        backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56', '#4bc0c0'],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: 'bottom',
        labels: { fontColor: document.documentElement.getAttribute('data-theme') === 'dark' ? '#fff' : '#333' }
      }
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
  // We might need to re-render the chart on theme change
  fetchAndDisplayDomains();
}

/**
 * Fetches and displays all saved tab groups from storage.
 */
function fetchAndDisplaySavedGroups() {
  chrome.runtime.sendMessage({ action: 'getSavedGroups' }, response => {
    if (chrome.runtime.lastError) {
      console.error(chrome.runtime.lastError);
      showToast('Error fetching saved groups.');
      return;
    }

    const list = document.getElementById('saved-groups-list');
    const emptyState = document.getElementById('empty-saved-list');
    if (!list || !emptyState) return;

    list.innerHTML = '';

    if (!response.groups || response.groups.length === 0) {
      emptyState.style.display = 'block';
      return;
    }
    emptyState.style.display = 'none';

    response.groups.forEach(group => {
      const entry = document.createElement('div');
      entry.className = 'tab-preview';
      const savedDate = new Date(group.timestamp).toLocaleString();
      entry.innerHTML = `
        <img src="${group.favicon || 'icons/icon16.jpeg'}" class="tab-thumb" alt="Favicon for saved group">
        <div class="tab-title">${group.name} <span class="badge">${group.urls.length}</span><br><small>${savedDate}</small></div>
        <div class="domain-actions">
          <button class="btn btn-sm restore-group-btn" data-timestamp="${group.timestamp}">Restore</button>
          <button class="btn btn-sm btn-danger delete-group-btn" data-timestamp="${group.timestamp}">Delete</button>
        </div>
      `;
      list.appendChild(entry);
    });
  });
}

/**
 * Fetches domain data and populates the domain list and chart.
 */
function fetchAndDisplayDomains() {
  const spinner = document.getElementById('spinner');
  if (spinner) spinner.style.display = 'inline-block';

  chrome.runtime.sendMessage({ action: 'getDomainAnalysis' }, response => {
    if (spinner) spinner.style.display = 'none';
    if (response && response.status === 'success') {
      displayDomainList(response.domains);
      renderTopDomainsChart(response.domains);
    }
  });
}


document.addEventListener('DOMContentLoaded', () => {
  // Basic setup
  initializeTheme();
  fetchAndDisplayStats();
  fetchAndDisplayDomains();

  // Setup view toggling
  const mainContent = document.getElementById('main-content');
  const savedGroupsContent = document.getElementById('saved-groups-content');
  const analyzerBtn = document.getElementById('show-analyzer-btn');
  const savedBtn = document.getElementById('show-saved-btn');

  if (analyzerBtn) {
    analyzerBtn.addEventListener('click', () => {
      if (mainContent) mainContent.style.display = 'block';
      if (savedGroupsContent) savedGroupsContent.style.display = 'none';
      analyzerBtn.classList.add('active');
      savedBtn.classList.remove('active');
    });
  }

  if (savedBtn) {
    savedBtn.addEventListener('click', () => {
      if (mainContent) mainContent.style.display = 'none';
      if (savedGroupsContent) savedGroupsContent.style.display = 'block';
      analyzerBtn.classList.remove('active');
      savedBtn.classList.add('active');
      fetchAndDisplaySavedGroups(); // Fetch and show saved groups
    });
  }

  // Onboarding and settings listeners
  const darkToggle = document.getElementById('dark-toggle');
  if(darkToggle) darkToggle.addEventListener('click', toggleTheme);
  
  const settingsLink = document.getElementById('settings-link');
  if(settingsLink) settingsLink.addEventListener('click', () => chrome.runtime.openOptionsPage());
  
  // Main action listeners
  const organizeAllBtn = document.getElementById('organize-all-btn');
  if(organizeAllBtn) organizeAllBtn.addEventListener('click', () => handleAction('organizeAll'));
  
  const closeDuplicatesBtn = document.getElementById('close-duplicates-btn');
  if(closeDuplicatesBtn) closeDuplicatesBtn.addEventListener('click', () => handleAction('closeDuplicates'));

  const undoBtn = document.getElementById('undo-btn');
  if(undoBtn) undoBtn.addEventListener('click', () => handleAction('undo'));

  const redoBtn = document.getElementById('redo-btn');
  if(redoBtn) redoBtn.addEventListener('click', () => handleAction('redo'));
  
  // Delegated event listeners for dynamic content
  document.body.addEventListener('click', e => {
    const target = e.target;
    if (target.closest('.organize-domain-btn')) {
      const domain = target.closest('.organize-domain-btn').dataset.domain;
      handleAction('organizeByDomain', { domain });
    } else if (target.closest('.close-domain-btn')) {
      const domain = target.closest('.close-domain-btn').dataset.domain;
      handleAction('closeTabsByDomain', { domain });
    } else if (target.closest('.copy-domain-btn')) {
      const domain = target.closest('.copy-domain-btn').dataset.domain;
      handleAction('copyUrlsByDomain', { domain });
    } else if (target.closest('.save-domain-btn')) {
      const domain = target.closest('.save-domain-btn').dataset.domain;
      handleAction('saveTabsForLater', { domain });
    } else if (target.closest('.restore-group-btn')) {
      const timestamp = target.closest('.restore-group-btn').dataset.timestamp;
      handleAction('restoreSavedGroup', { timestamp }, fetchAndDisplaySavedGroups);
    } else if (target.closest('.delete-group-btn')) {
      const timestamp = target.closest('.delete-group-btn').dataset.timestamp;
      handleAction('deleteSavedGroup', { timestamp }, fetchAndDisplaySavedGroups);
    } else if (target.id === 'audible-tabs-link') {
      e.preventDefault();
      handleAction('focusAudibleTab');
    }
  });
});