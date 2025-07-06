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
 * Saves options to chrome.storage.
 */
function saveOptions() {
  const autoGroup = document.getElementById('auto-group').value;
  
  chrome.storage.sync.set({
    autoGroup: parseInt(autoGroup, 10)
  }, () => {
    showToast('Settings saved!');
  });
}

/**
 * Restores options from chrome.storage.
 */
function restoreOptions() {
  chrome.storage.sync.get({
    autoGroup: 10 // default value
  }, (items) => {
    document.getElementById('auto-group').value = items.autoGroup;
  });
}

/**
 * Displays saved sessions in the options page.
 */
function displaySavedSessions() {
  const container = document.getElementById('saved-sessions');
  const noSessions = document.getElementById('no-sessions');

  chrome.runtime.sendMessage({ action: 'getSavedGroups' }, response => {
    if (response.success && response.data) {
      const sessions = response.data;
      
      if (sessions.length === 0) {
        noSessions.style.display = 'block';
        return;
      }

      noSessions.style.display = 'none';
      container.innerHTML = '';

      sessions.forEach(session => {
        const card = document.createElement('div');
        card.className = 'session-card';
        card.innerHTML = `
          <div class="session-info">
            <strong>${session.domain}</strong><br>
            <small>${session.tabs.length} tabs - ${new Date(session.timestamp).toLocaleString()}</small>
          </div>
          <div class="session-actions">
            <button class="restore-btn" data-timestamp="${session.timestamp}">Restore</button>
            <button class="delete-btn" data-timestamp="${session.timestamp}">Delete</button>
          </div>
        `;
        container.appendChild(card);
      });

      // Add event listeners
      container.querySelectorAll('.restore-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          const timestamp = parseInt(btn.dataset.timestamp, 10);
          chrome.runtime.sendMessage(
            { action: 'restoreSavedGroup', timestamp },
            response => {
              if (response.success) {
                showToast(response.message);
              } else {
                showToast(response.error || 'Error restoring session');
              }
            }
          );
        });
      });

      container.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          const timestamp = parseInt(btn.dataset.timestamp, 10);
          if (confirm('Are you sure you want to delete this saved session?')) {
            chrome.runtime.sendMessage(
              { action: 'deleteSavedGroup', timestamp },
              response => {
                if (response.success) {
                  showToast('Session deleted');
                  displaySavedSessions(); // Refresh the list
                } else {
                  showToast(response.error || 'Error deleting session');
                }
              }
            );
          }
        });
      });
    }
  });
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
  restoreOptions();
  displaySavedSessions();

  // Add event listeners
  document.getElementById('auto-group').addEventListener('change', saveOptions);
}); 