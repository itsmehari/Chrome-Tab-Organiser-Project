'use strict';

document.addEventListener('DOMContentLoaded', () => {
    const suggestionsContainer = document.getElementById('suggestions-container');

    // Load suggestions from storage and display them
    chrome.storage.local.get('groupSuggestions', ({ groupSuggestions }) => {
        if (!groupSuggestions || groupSuggestions.length === 0) {
            suggestionsContainer.innerHTML = '<p>No suggestions available. Try analyzing your tabs from the popup.</p>';
            return;
        }

        groupSuggestions.forEach(group => {
            const groupElement = document.createElement('div');
            groupElement.className = 'suggestion-group';

            let tabListHtml = group.tabs.map(tab => `<div class="tab-item">${tab.title}</div>`).join('');

            groupElement.innerHTML = `
                <h2>${group.name}</h2>
                <div>${tabListHtml}</div>
                <button class="btn create-group-btn" data-tabs="${JSON.stringify(group.tabs.map(t => t.id))}">Create Group</button>
            `;
            suggestionsContainer.appendChild(groupElement);
        });
    });

    // Event listener for creating a group
    suggestionsContainer.addEventListener('click', (e) => {
        if (e.target.classList.contains('create-group-btn')) {
            const tabIds = JSON.parse(e.target.dataset.tabs);
            chrome.runtime.sendMessage({ action: 'createSpecificGroup', tabIds: tabIds }, (response) => {
                if(response.success) {
                    // Visually remove the created group from the preview page
                    e.target.closest('.suggestion-group').remove();
                }
            });
        }
    });
}); 