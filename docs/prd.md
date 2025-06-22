# Product Requirements Document: Smart Tab Organiser

## 1. Overview

This document outlines the requirements and features for the Smart Tab Organiser Chrome Extension. The extension aims to help users manage their browser tabs effectively by providing tools for organizing, saving, and analyzing tab usage.

## 2. Master Feature Checklist

This checklist will track the development progress.

### High Priority & Active Development

- [ ] **Feature: Full Session Management.** Implement saving and restoring of the entire browser state (all windows and tabs) from the options page. This includes auto-saving sessions periodically.
- [ ] **Feature: Improve "Save for Later" functionality.** Review and polish the existing session saving feature.
- [ ] **Feature: Make settings functional.** Ensure all options on the settings page (e.g., auto-grouping, default colors) are fully implemented, including shortcut customization links.
- [ ] **Feature: Cloud Sync Sessions**: Use `chrome.storage.sync` to sync saved sessions across devices.
- [ ] **Chore: Automated Publishing**: Set up a CI/CD pipeline (e.g., GitHub Actions) for releases.

### Completed Features & Fixes

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
