'use strict';

// --- DOM Elements ---
const saveSessionBtn = document.getElementById('save-session-btn');
const sessionNameInput = document.getElementById('session-name');
const sessionList = document.getElementById('session-list');
const saveSettingsBtn = document.getElementById('save-settings-btn');
const autoOrganizeToggle = document.getElementById('auto-organize-toggle');
const groupColorSelect = document.getElementById('group-color-select');
const chunkSizeInput = document.getElementById('chunk-size-input');
const shortcutsBtn = document.getElementById('shortcuts-btn');
const resetSettingsBtn = document.getElementById('reset-settings-btn');
const clearDataBtn = document.getElementById('clear-data-btn');

// --- Functions ---

/**
 * Renders the list of saved sessions.
 */
function displaySavedSessions() {
  chrome.storage.local.get('savedSessions', ({ savedSessions }) => {
    sessionList.innerHTML = '';
    if (savedSessions && savedSessions.length > 0) {
      savedSessions.forEach(session => {
        const item = document.createElement('div');
        item.className = 'session-item';
        item.innerHTML = `
          <span>
            <strong>${session.name}</strong>
            <br>
            <small>${session.tabs.length} tabs - ${new Date(session.timestamp).toLocaleString()}</small>
          </span>
          <div>
            <button class="btn btn-secondary restore-session-btn" data-timestamp="${session.timestamp}">Restore</button>
            <button class="btn btn-danger delete-session-btn" data-timestamp="${session.timestamp}">Delete</button>
          </div>
        `;
        sessionList.appendChild(item);
      });
    } else {
      sessionList.innerHTML = '<p>No sessions saved yet.</p>';
    }
  });
}

/**
 * Loads current settings and populates the form.
 */
function loadSettings() {
  chrome.storage.local.get('taborg_settings', ({ taborg_settings }) => {
    if (taborg_settings) {
      autoOrganizeToggle.value = taborg_settings.autoOrganize || 'false';
      groupColorSelect.value = taborg_settings.groupColor || 'grey';
      chunkSizeInput.value = taborg_settings.chunkSize || '';
    }
  });
}

/**
 * Handles saving the current session.
 */
async function handleSaveSession() {
  const name = sessionNameInput.value.trim();
  if (!name) {
    alert('Please enter a name for the session.');
    return;
  }

  const tabs = await chrome.tabs.query({});
  const newSession = {
    name,
    timestamp: Date.now(),
    tabs: tabs.map(t => ({ url: t.url, pinned: t.pinned, active: t.active, groupId: t.groupId }))
  };

  chrome.storage.local.get('savedSessions', ({ savedSessions = [] }) => {
    savedSessions.unshift(newSession);
    chrome.storage.local.set({ savedSessions }, () => {
      sessionNameInput.value = '';
      displaySavedSessions();
      alert('Session saved successfully!');
    });
  });
}

/**
 * Handles restoring a saved session.
 * @param {Event} e - The click event.
 */
async function handleRestoreSession(e) {
  if (!e.target.classList.contains('restore-session-btn')) return;

  const timestamp = Number(e.target.dataset.timestamp);
  chrome.storage.local.get('savedSessions', ({ savedSessions }) => {
    const sessionToRestore = savedSessions.find(s => s.timestamp === timestamp);
    if (sessionToRestore) {
      chrome.windows.create({
        url: sessionToRestore.tabs.map(t => t.url)
      });
      // Optional: remove session after restoring
      const updatedSessions = savedSessions.filter(s => s.timestamp !== timestamp);
      chrome.storage.local.set({ savedSessions: updatedSessions }, displaySavedSessions);
    }
  });
}

/**
 * Handles deleting a saved session.
 * @param {Event} e - The click event.
 */
function handleDeleteSession(e) {
  if (!e.target.classList.contains('delete-session-btn')) return;
  if (!confirm('Are you sure you want to delete this session?')) return;

  const timestamp = Number(e.target.dataset.timestamp);
  chrome.storage.local.get('savedSessions', ({ savedSessions }) => {
    const updatedSessions = savedSessions.filter(s => s.timestamp !== timestamp);
    chrome.storage.local.set({ savedSessions: updatedSessions }, displaySavedSessions);
  });
}

// --- Event Listeners ---
document.addEventListener('DOMContentLoaded', () => {
  displaySavedSessions();
  loadSettings();

  saveSessionBtn.addEventListener('click', handleSaveSession);
  sessionList.addEventListener('click', e => {
    handleRestoreSession(e);
    handleDeleteSession(e);
  });

  saveSettingsBtn.addEventListener('click', () => {
    const settings = {
      autoOrganize: autoOrganizeToggle.value,
      groupColor: groupColorSelect.value,
      chunkSize: chunkSizeInput.value ? parseInt(chunkSizeInput.value, 10) : null,
    };
    chrome.storage.local.set({ 'taborg_settings': settings }, () => {
      alert('Settings saved!');
    });
  });
  
  shortcutsBtn.addEventListener('click', () => {
      chrome.tabs.create({ url: 'chrome://extensions/shortcuts' });
  });

  resetSettingsBtn.addEventListener('click', () => {
    if (confirm('Are you sure you want to reset all settings to their defaults?')) {
      chrome.storage.local.remove('taborg_settings', () => {
        loadSettings();
        alert('Settings have been reset.');
      });
    }
  });

  clearDataBtn.addEventListener('click', () => {
    if (confirm('Are you sure you want to permanently delete ALL saved sessions and groups? This cannot be undone.')) {
      chrome.storage.local.remove(['savedSessions', 'savedGroups'], () => {
        displaySavedSessions();
        alert('All saved data has been cleared.');
      });
    }
  });
}); 