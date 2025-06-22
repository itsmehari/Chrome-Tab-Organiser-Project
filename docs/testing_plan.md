# Testing Plan: Smart Tab Organiser

This document outlines the testing strategy for the Smart Tab Organiser Chrome Extension.

## 1. Testing Objectives

- **Functionality**: Ensure all features described in the PRD work as expected across different scenarios.
- **Usability**: Verify that the UI is intuitive, responsive, and provides clear feedback to the user.
- **Performance**: Confirm that the extension does not significantly impact browser performance, even with a large number of tabs.
- **Robustness**: Test for edge cases, invalid inputs, and unexpected user actions to ensure the extension handles errors gracefully.
- **Compatibility**: Check for consistent behavior across different operating systems (Windows, macOS).

## 2. Testing Scope

### In Scope

- All features implemented in `background.js`, `popup.js`, and `options.js`.
- User interface and interactions in `popup.html` and `options.html`.
- Data persistence in `chrome.storage.local` and `chrome.storage.sync`.
- Core Chrome APIs: `tabs`, `tabGroups`, `windows`, `storage`, `runtime`.
- The build and deployment process.

### Out of Scope

- Chrome browser-specific bugs not directly related to the extension's code.
- Performance on outdated or unsupported versions of Chrome.
- In-depth security penetration testing (beyond standard best practices).

## 3. Testing Levels

- **Unit Testing**: Where applicable, core helper functions (e.g., `getBaseDomain`) can be tested in isolation. (Future goal)
- **Integration Testing**: The primary focus will be on testing the integration between the popup UI (`popup.js`) and the background service worker (`background.js`), ensuring messages are passed and handled correctly.
- **End-to-End (E2E) Testing**: Manual E2E testing will be performed for all major user workflows as outlined in the `manual_testing_checklist.md`. This simulates real-world usage from start to finish.
- **Regression Testing**: After every major feature addition or bug fix, a full run of the `manual_testing_checklist.md` will be performed to ensure existing functionality has not been broken.

## 4. Tools & Environment

- **Browser**: Latest stable version of Google Chrome.
- **Environment**: Windows 10/11, macOS.
- **Linting**: ESLint for static code analysis.
- **Build**: Terser for minification.
- **Deployment**: Manual loading of the unpacked `dist` folder.

## 5. Manual Testing

Manual testing is the primary method for quality assurance. A detailed checklist of test cases is maintained in `docs/manual_testing_checklist.md`. This checklist is to be executed before every new version is considered for release.
