# Project Context: Smart Tab Organiser

This document provides a high-level summary of the "Smart Tab Organiser" Chrome Extension.

## 1. Core Purpose

The extension is a powerful tool designed to help users organize, analyze, and manage their browser tabs efficiently. It transforms a cluttered browser into an organized workspace.

Key functionalities include:

- **One-Click Tab Grouping**: Instantly group all tabs by their website domain.
- **Interactive Stats Dashboard**: Provides a real-time overview of browser health, including clickable stats to find noisy tabs and close duplicates.
- **Proactive Suggestions**: I implemented a feature where the extension would detect ungrouped tabs and proactively suggest creating a group.
- **Interactive Tour**: I replaced the basic `alert()` tour with a full-featured, multi-step guided tour using the Shepherd.js library.
- **Undo/Redo Support**: A non-destructive undo/redo system for organization actions.
- **Interactive Onboarding**: A guided tour to help new users learn the features.

## 2. Professional Development Workflow

The project is configured with a modern, professional development workflow to ensure code quality and streamline deployment:

- **Code Linting**: `ESLint` is integrated to maintain a consistent and error-free codebase.
- **Automated Build Process**: A build script using `Terser` minifies all JavaScript for an optimized production build.
- **Automated Deployment**: A single PowerShell script (`create-deployment-package.ps1`) automates the entire process of linting, building, and packaging the extension into a `dist` folder, ready for upload.

## 3. Documentation

All project documentation is centralized in the `/docs` folder and is excluded from the final build. This includes:

- **`prd.md`**: The living Product Requirements Document.
- **`architecture.md`**: A detailed technical overview.
- **`user_guide.md`**: A friendly guide for end-users.
- **`testing_plan.md`** & **`manual_testing_checklist.md`**: Comprehensive testing guides.

# Smart Tab Organiser

Smart Tab Organiser is a modern Chrome extension that helps users organize, analyze, and manage their browser tabs by website. It offers session management, tab grouping, undo/redo, color coding, onboarding, and a clean, accessible user interface.

## Features

- Organize all open tabs by website/domain (manual or auto-organize)
- Analyze and group tabs, see tab counts and color indicators
- Save, restore, and delete tab sessions
- Close, open, or copy URLs for all tabs in a group
- Undo/Redo for all major actions (up to 10 steps)
- Settings page for session management, auto-organize, group color, analytics opt-in, and more
- Color coding for tab groups (user-selectable)
- Custom group naming (for future tab group API support)
- Keyboard shortcuts for quick actions (see below)
- Onboarding tour for new users (step-by-step modal)
- Modern, responsive UI with dark mode support
- Fool-proof error handling and user feedback (toasts, modals)
- Accessibility: ARIA labels, keyboard navigation, high-contrast support

## Keyboard Shortcuts

- **Ctrl+Shift+Y**: Organize all tabs by website
- **Ctrl+Shift+S**: Save current session
- **Ctrl+Shift+R**: Restore last session
- **Ctrl+Shift+U**: Undo last action

## Accessibility & UX Best Practices

- All interactive elements have ARIA labels and are keyboard-navigable
- Undo/Redo buttons are disabled when not available
- Onboarding tour is accessible and non-intrusive
- Color indicators have sufficient contrast
- All settings and actions provide user feedback (toasts, modals)

## Edge Case Handling & Fool-Proofing

- Handles cases with no tabs, only one tab, or duplicate tabs
- Gracefully handles Chrome storage errors or permission issues
- Prevents accidental data loss with Undo/Redo and confirmations
- Settings are validated and persisted reliably
- Robust error handling for all async actions

## Known Limitations

- Tab group color/name is visual only (Chrome tab group API support planned)
- Analytics/statistics are opt-in and basic (future expansion possible)
- Undo/Redo is limited to the last 10 actions
- Session restore opens all URLs in new windows (may duplicate tabs if already open)

## How to Test, Debug, and Extend

- Load the extension in Chrome (Developer Mode > Load unpacked)
- Test all features: organize, analyze, undo/redo, save/restore sessions, onboarding, settings
- Use keyboard navigation and screen readers to verify accessibility
- Check the console for errors (background and popup)
- To extend: add new features in popup.js, background.js, or options.js; update CONTEXT.md as needed

## Contribution Guidelines

- Fork or clone the repository
- Use clear, descriptive commit messages
- Test all changes before submitting a pull request
- Follow accessibility and UX best practices
- Open issues for bugs, feature requests, or questions

## Reporting Issues & Requesting Features

- Open an issue on the repository with a clear description
- Include steps to reproduce, screenshots, and browser version if relevant
- Feature requests and suggestions are welcome!

---

For any questions or contributions, please open an issue or contact the maintainer.

Finally, we moved into a testing and finalization phase. I created a `testing_plan.md` and a `manual_testing_checklist.md`. I executed all the automated checks from the plan, which involved running the linter (catching and fixing a new error related to the Shepherd.js global), checking for debug code, validating the manifest, and running the full deployment script to verify its correctness and the integrity of the output `dist` folder.

The last major feature requested was a **"Save for Later"** functionality, inspired by OneTab. This involved:

1.  **UI/UX Overhaul**: Widening the popup and refactoring the layout to better accommodate action buttons.
2.  **Session Saving**: Implementing logic in `background.js` to save groups of tabs by domain into `chrome.storage.local`.
3.  **Session Management UI**: Adding a new "Saved" view to the popup to list, restore, or delete these saved sessions.
4.  **Intensive Debugging**: After implementation, the extension was unresponsive. This led to a multi-step debugging process that involved fixing linting errors (`no-case-declarations`, `no-undef`), correcting a critical data structure mismatch between the popup and background script, and aligning message-passing action names.

To conclude, I updated all project documentation (`user_guide.md`, `architecture.md`, `CONTEXT.md`) to reflect the final, feature-rich state of the extension.

The user initiated a session to refactor and enhance a "Smart Tab Organiser" Chrome Extension.

Initially, the extension's core logic was destructive (closing and reopening tabs). The first major task was to refactor the extension to use the non-destructive `chrome.tabGroups` API, which involved updating `manifest.json` and rewriting the organization logic in `background.js`.

Following this, a series of features were added. A visual statistics dashboard was implemented using Chart.js, displaying comprehensive stats like total tabs, windows, groups, and duplicate tabs. To professionalize the project, a formal development structure was introduced, including a Product Requirements Document (`prd.md`), a `.deployignore` file, and a PowerShell script (`create-deployment-package.ps1`) to automate the creation of a clean deployment package.

A checklist of features from the PRD was then implemented, including ESLint integration, a build step using `terser` to minify JavaScript, a "Find & Close Duplicates" feature, interactive statistics (making the "Audible Tabs" stat clickable), and a full undo/redo functionality using a `redoStack`. The UI was improved with descriptive status messages, loading spinners, and a more user-friendly interactive tour using Shepherd.js.

The user then identified a UI issue where action buttons in the popup were cramped and requested a "Save for Later" feature. This was implemented by widening the popup, improving the button layout, adding logic to `background.js` to save/restore/delete tab sessions via `chrome.storage.local`, and creating a new "Saved" view in the popup.

This was followed by a debugging cycle. The deployment script failed due to linting errors, which were fixed. The extension then became unresponsive, which was traced to a data structure mismatch between `popup.js` and `background.js` (the `getDomainAnalysis` action was missing a `status: 'success'` property). This was corrected. Further UI polish was applied to fix domain tab counts not displaying and to restyle the "Analyzer" and "Saved" view toggles into a proper tab navigation system. The settings page (`options.html`) was also completely overhauled with a modern, card-based UI, implementing session management and functional settings.

The user then requested a major logic enhancement for tab organization. The requirements were: when organizing a domain with more than 5 tabs, the tabs should be grouped in chunks of 25, and each chunk should be placed in a brand new window. I implemented this logic in a new `groupTabsInChunks` function in `background.js` and updated the `organizeTabsForDomain` and `organizeTabsByDomain` functions to use it.

During this process, the user noticed there were two `prd.md` files. I was instructed to merge them into a single, consolidated document in the `docs/` folder, which I did by combining their checklists and content, and then deleted the redundant file. All other documentation (`user_guide.md`, `architecture.md`) was also updated to reflect the new, sophisticated organization logic.

Finally, the user reported that they had accidentally lost all project files and requested a full restoration. I began restoring the project from memory, successfully recreating `manifest.json`, `background.js`, `popup.html`, and `popup.js`. The user interrupted the process while I was restoring `options.html`, first asking to generate the `dist` folder (which I advised against as the restoration was incomplete and the build would fail), and then asking me to stop the restoration altogether.
