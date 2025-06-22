# Product Requirements Document: Smart Tab Organiser

## 1. Overview

Smart Tab Organiser is a Chrome extension that helps users manage browser tabs and sessions with advanced tools for organization, analytics, and productivity. A key feature is smart, content-based tab grouping using in-browser NLP (compromise), which complements session management, duplicate detection, and usage analytics.

## 2. Master Feature Checklist

This checklist will track the development progress.

### High Priority & Active Development

- [ ] **Feature: Full Session Management.** Implement saving and restoring of the entire browser state (all windows and tabs) from the options page. This includes auto-saving sessions periodically.
- [ ] **Feature: Improve "Save for Later" functionality.** Review and polish the existing session saving feature.
- [ ] **Feature: Make settings functional.** Ensure all options on the settings page (e.g., auto-grouping, default colors) are fully implemented, including shortcut customization links.
- [ ] **Feature: Cloud Sync Sessions**: Use `chrome.storage.sync` to sync saved sessions across devices.
- [ ] **Chore: Automated Publishing**: Set up a CI/CD pipeline (e.g., GitHub Actions) for releases.

### Completed Features & Fixes

- [x] **Bug: Fix Content Security Policy error.** Replaced CDN links with local library files (`Chart.js`, `Shepherd.js`) to comply with Manifest V3 security requirements.
- [x] **Bug: Fix incorrect ungrouped tab detection.** The logic now correctly identifies tabs that are not part of any group, allowing the "Organize" feature to work as expected.
- [x] **Feature: Sort Domain Analysis list.** The list of domains in the popup is now sorted by the number of open tabs in descending order.
- [x] **Logic: Handle large tab counts gracefully.** The "Organize" and "Organize All" functions now handle large numbers of tabs by creating new windows when a group exceeds 25 tabs.
- [x] **Bug: Fix missing tab count in Domain Analysis view.**
- [x] **UI: Improve popup action button layout.**
- [x] **UI: Refine "Analyzer" vs. "Saved" view toggle.**
- [x] **Manual Session Saving**: Allow users to close all tabs from a specific domain and save them.
- [x] **Find & Close Duplicates**: Add a one-click button to find and close all duplicate tabs.
- [x] **Proactive Grouping**: Suggest creating a tab group when 5+ tabs from the same domain are detected.
- [x] **Interactive Tour**: Replace the `alert()` tour with a guided tour using Shepherd.js.
- [x] **Implement Redo**: Enable the `redo` functionality.
- [x] **Descriptive Status Messages**: Provide more detailed feedback for actions.
- [x] **Interactive Statistics**: Make dashboard stats clickable.
- [x] **Improved Empty/Loading States**: Show helpful messages and loading indicators.
- [x] **Add Build Step**: Create a build process to minify JS/CSS.
- [x] **Code Linting**: Integrate ESLint for consistent code style.
- [x] **Docs: Update User Guide, Architecture, and PRD.**
- [x] **Docs: Maintain `CONTEXT.md`.**
- [x] **UI: Update `preview.html` to use a responsive CSS grid for group cards**
- [x] **UI: Add custom CSS for cards, hover effects, and responsive layout**
- [x] **UI: Display tab favicons, titles, and URLs in each card**
- [x] **UI: Add "Create Group" button to each card**
- [x] **UI: Add search/filter bar for groups/tabs**
- [x] **UI: Add "Create All Groups" button at the top**
- [x] **UI: Add expand/collapse for group details**
- [x] **UI: Add toasts/feedback for actions (e.g., group created)**
- [x] **UI: Add subtle animations for card entry/removal**

## 3. Organization Logic Details

### "Organize" Button (Per-Domain)

**Trigger**: User clicks the "Organize" button next to a specific domain in the Analyzer view.

1.  **Query**: The extension finds all tabs matching that domain (e.g., `google.com`) across **all** open windows.
2.  **Filter**: It filters out any of these tabs that are already part of a tab group.
3.  **Threshold Check**: It checks if the number of remaining, ungrouped tabs is **greater than 5**.
    - If 5 or fewer tabs are found, it displays a message and takes no further action.
4.  **Chunking**: If more than 5 tabs are found, it divides the list of tabs into "chunks" of up to 25.
5.  **Grouping**:
    - For **each** chunk of up to 25 tabs, a **new browser window** is created.
    - The tabs in the chunk are moved to this new window.
    - The tabs are grouped together.
    - If there is more than one chunk, the groups are named `Domain (Part X)`. Otherwise, the single group is named `Domain`.

### "Organize All Tabs" Button

**Trigger**: User clicks the "Organize All Tabs" button in the Main Actions card.

1.  **Query**: The extension finds all tabs across **all** open windows.
2.  **Filter**: It filters out any tabs that are already part of a tab group.
3.  **Domain Mapping**: It maps the remaining tabs by their base domain.
4.  **Threshold Check**: For each domain, it checks if there are **more than 5** tabs.
5.  **Grouping**: For each domain that meets the threshold, it executes the exact same chunking and grouping logic as the per-domain "Organize" button described above.

## 4. Upcoming Features: UI/UX Redesign & Smarter Grouping (NLP)

### [ ] **Feature: Content Grouping Preview UI/UX Redesign**

- [ ] **Design**
  - [ ] Research modern, soulful UI inspiration (cards, grids, color palettes, microinteractions)
  - [ ] Sketch wireframe for grid-based group preview
- [ ] **Implementation**
  - [x] Update `preview.html` to use a responsive CSS grid for group cards
  - [x] Add custom CSS for cards, hover effects, and responsive layout
  - [x] Display tab favicons, titles, and URLs in each card
  - [x] Add "Create Group" button to each card
  - [x] Add "Create All Groups" button at the top
  - [x] Add search/filter bar for groups/tabs
  - [x] Add expand/collapse for group details
  - [x] Add toasts/feedback for actions (e.g., group created)
  - [x] Add subtle animations for card entry/removal
- [ ] **Testing & Debugging**
  - [x] Test on various screen sizes (desktop, tablet, mobile)
  - [x] Test with many/few groups and tabs
  - [x] Lint and debug all new code
- [ ] **Documentation**
  - [x] Update user guide and architecture docs with new UI screenshots and workflow

---

### [ ] **Feature: Smarter Grouping with Free NLP**

- [x] Use compromise (browser UMD build) for NLP, not wink-nlp. No bundler required; works in Chrome extension context.
- [x] Research and select a free, open-source JS NLP library (e.g., compromise)
- [x] Add the library to the project (local or via CDN if allowed)
- [x] Update background script to extract tab content as before
- [x] Use NLP to extract topics, named entities, or cluster tabs by semantic similarity
- [x] Tune grouping logic for sensible, human-friendly clusters
- [x] Display new NLP-based group names in the preview grid
- [x] Show extracted topics/entities as group titles or tags
- [ ] **Testing & Debugging**
  - [x] Test with a variety of tab sets (tech, news, docs, etc.)
  - [x] Lint and debug all new code
- [ ] **Documentation**
  - [x] Update PRD, user guide, and architecture docs with new grouping logic

---

### [ ] **Final Steps**

- [ ] **Manual Testing**
  - [ ] Run through the manual testing checklist for all new features
- [ ] **Linting**
  - [ ] Ensure all code passes ESLint with no errors
- [ ] **Commit & Push**
  - [ ] Commit all changes to Git with clear messages
  - [ ] Push to GitHub repository
- [ ] **Deployment**
  - [ ] Run deployment script to update the `dist` folder
  - [ ] Load and test the extension in Chrome
