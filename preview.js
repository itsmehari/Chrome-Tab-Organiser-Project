'use strict';

document.addEventListener('DOMContentLoaded', () => {
    const suggestionGrid = document.getElementById('suggestion-grid');
    const searchInput = document.getElementById('search-input');
    const createAllBtn = document.getElementById('create-all-btn');
    let allGroups = [];

    // Helper to show toast
    function showToast(message) {
        let toast = document.getElementById('toast');
        if (!toast) {
            toast = document.createElement('div');
            toast.id = 'toast';
            toast.style.position = 'fixed';
            toast.style.bottom = '32px';
            toast.style.left = '50%';
            toast.style.transform = 'translateX(-50%)';
            toast.style.background = '#323232';
            toast.style.color = '#fff';
            toast.style.padding = '12px 24px';
            toast.style.borderRadius = '8px';
            toast.style.fontSize = '1rem';
            toast.style.zIndex = '9999';
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 0.3s';
            document.body.appendChild(toast);
        }
        toast.textContent = message;
        toast.style.opacity = '1';
        setTimeout(() => { toast.style.opacity = '0'; }, 2000);
    }

    // Helper to render all group cards
    function renderGroups(groups) {
        suggestionGrid.innerHTML = '';
        groups.forEach(group => {
            const card = document.createElement('div');
            card.className = 'group-card';
            card.style.transition = 'transform 0.3s, box-shadow 0.3s, opacity 0.3s';
            card.style.opacity = '0';
            setTimeout(() => { card.style.opacity = '1'; }, 10);

            // Group header
            const header = document.createElement('div');
            header.className = 'group-header';
            header.innerHTML = `
                <span class="group-icon">🧠</span>
                <span class="group-title">${group.name}</span>
                <button class="create-group-btn">Create Group</button>
                <span class="expand-icon" style="margin-left:8px;cursor:pointer;user-select:none;">▼</span>
            `;
            card.appendChild(header);

            // NLP topic/entity tags
            if (group.tabs && group.tabs.length > 0 && group.tabs[0].topics && group.tabs[0].topics.length > 0) {
                const tagBar = document.createElement('div');
                tagBar.className = 'group-tags';
                tagBar.style.margin = '0.5rem 0 0.5rem 2.2rem';
                group.tabs[0].topics.forEach(topic => {
                    const tag = document.createElement('span');
                    tag.className = 'group-tag';
                    tag.textContent = topic;
                    tag.style.background = '#e0f2fe';
                    tag.style.color = '#0369a1';
                    tag.style.fontSize = '0.85rem';
                    tag.style.padding = '2px 8px';
                    tag.style.borderRadius = '6px';
                    tag.style.marginRight = '0.4rem';
                    tagBar.appendChild(tag);
                });
                card.appendChild(tagBar);
            }

            // Tab list
            const tabList = document.createElement('div');
            tabList.className = 'tab-list';
            tabList.style.maxHeight = '500px';
            tabList.style.overflow = 'hidden';
            tabList.style.transition = 'max-height 0.3s cubic-bezier(0.4,0,0.2,1)';
            group.tabs.forEach(tab => {
                const tabItem = document.createElement('div');
                tabItem.className = 'tab-item';
                tabItem.innerHTML = `
                    <img class="tab-favicon" src="chrome://favicon/${tab.url}" alt="favicon">
                    <span class="tab-title">${tab.title || '(No Title)'}</span>
                    <span class="tab-url">${tab.url}</span>
                `;
                tabList.appendChild(tabItem);
            });
            card.appendChild(tabList);

            // Expand/collapse logic
            let expanded = true;
            const expandIcon = header.querySelector('.expand-icon');
            header.addEventListener('click', (e) => {
                if (e.target.classList.contains('create-group-btn')) return;
                expanded = !expanded;
                if (expanded) {
                    tabList.style.maxHeight = '500px';
                    expandIcon.textContent = '▼';
                } else {
                    tabList.style.maxHeight = '0';
                    expandIcon.textContent = '▲';
                }
            });

            // Store tab IDs for group creation
            header.querySelector('.create-group-btn').addEventListener('click', (e) => {
                e.stopPropagation();
                chrome.runtime.sendMessage({ action: 'createSpecificGroup', tabIds: group.tabs.map(t => t.id) }, (response) => {
                    if(response.success) {
                        card.remove();
                        showToast('Group created!');
                    }
                });
            });

            suggestionGrid.appendChild(card);
        });
    }

    // Load suggestions from storage and display them
    chrome.storage.local.get('groupSuggestions', ({ groupSuggestions }) => {
        allGroups = groupSuggestions || [];
        renderGroups(allGroups);
    });

    // Search/filter functionality
    searchInput.addEventListener('input', (e) => {
        const q = e.target.value.toLowerCase();
        const filtered = allGroups.filter(group =>
            group.name.toLowerCase().includes(q) ||
            group.tabs.some(tab => (tab.title || '').toLowerCase().includes(q) || (tab.url || '').toLowerCase().includes(q))
        );
        renderGroups(filtered);
    });

    // Create All Groups functionality
    createAllBtn.addEventListener('click', async () => {
        if (!allGroups.length) return;
        createAllBtn.disabled = true;
        createAllBtn.textContent = 'Creating...';
        // Send all tab ID arrays to background
        const groupTabIdArrays = allGroups.map(group => group.tabs.map(t => t.id));
        let createdCount = 0;
        for (const tabIds of groupTabIdArrays) {
            await new Promise(resolve => {
                chrome.runtime.sendMessage({ action: 'createSpecificGroup', tabIds }, (response) => {
                    if (response && response.success) createdCount++;
                    resolve();
                });
            });
        }
        // Feedback and UI update
        createAllBtn.textContent = `Created ${createdCount} group(s)!`;
        suggestionGrid.innerHTML = '';
        showToast(`Created ${createdCount} group(s)!`);
        setTimeout(() => {
            createAllBtn.textContent = 'Create All Groups';
            createAllBtn.disabled = false;
        }, 2000);
    });
}); 