# Manual Testing Checklist

**Objective**: To ensure all key features are working correctly before a release.
**Environment**: Latest Google Chrome on Windows/macOS.

---

### Phase 1: Pre-Build & Deployment Checks

- [ ] **Run Linter**: `npm run lint` completes with no errors.
- [ ] **Run Build**: `npm run build` completes with no errors and the `build/` directory contains minified JS files.
- [ ] **Run Deployment Script**: `create-deployment-package.ps1` runs successfully.
- [ ] **Verify `dist` Folder**:
  - [ ] The `dist` folder exists.
  - [ ] It contains `background.js`, `popup.js`, `options.js` (minified).
  - [ ] It contains `.html` files, `manifest.json`, and the `icons` folder.
  - [ ] It **does not** contain `node_modules`, `docs`, `build`, `.ps1`, `.json` (except manifest), etc.

---

### Phase 2: Core Functionality (Load Unpacked `dist` Folder)

**Setup**: Open 3 windows.

- Window 1: 10 tabs (6 google.com, 4 github.com).
- Window 2: 8 tabs (5 youtube.com - one playing video, 3 unrelated).
- Window 3: 12 tabs (7 developer.chrome.com, 5 cnn.com - some duplicates of each other).

#### **Popup: Analyzer View**

- [ ] **Stats Dashboard**:
  - [ ] Total Tabs, Windows, Groups counts are accurate.
  - [ ] Audible Tabs count is 1. Clicking it focuses the YouTube video tab.
  - [ ] Duplicate Tabs count is accurate.
- [ ] **Main Actions**:
  - [ ] Click **"Close Duplicate Tabs"**. Verify the duplicate tabs close and the "Undo" button appears.
  - [ ] Click **"Undo"**. Verify the closed tabs are restored.
  - [ ] Click **"Redo"**. Verify the tabs are closed again.
  - [ ] Click **"Organize All Tabs"**.
    - [ ] A new window is created for the `google.com` tabs, and they are grouped.
    - [ ] A new window is created for the `developer.chrome.com` tabs, and they are grouped.
    - [ ] `youtube.com` and `github.com` tabs are not grouped (since they don't meet the >5 threshold).
    - [ ] `cnn.com` tabs are grouped in their existing window because there are exactly 5.
  - [ ] Click **"Undo"** several times. Verify all grouping actions are reversed.
- [ ] **Domain Analysis List**:
  - [ ] The list accurately shows `google.com`, `github.com`, `youtube.com`, `developer.chrome.com`, and `cnn.com`.
  - [ ] For `youtube.com`:
    - [ ] Click **"Save"**. The 5 YouTube tabs close. The UI switches to the "Saved" view, showing the new group.
    - [ ] Switch back to "Analyzer" view. `youtube.com` is gone from the list.
  - [ ] For `github.com`:
    - [ ] Click **"Copy"**. Verify a plain text list of the 4 GitHub URLs is copied to the clipboard.
    - [ ] Click **"Close All"**. Verify the 4 GitHub tabs are closed.

#### **Popup: Saved View**

- [ ] The view shows the saved `youtube.com` group with the correct tab count.
- [ ] Click **"Restore"**. A new window opens with the 5 YouTube tabs. The group disappears from the "Saved" view.
- [ ] Re-save the `youtube.com` group.
- [ ] Click **"Delete"**. The group is permanently removed from the "Saved" view.

---

### Phase 3: Edge Case - Large Tab Organization

**Setup**: Open a single window with 30 tabs from `wikipedia.org`.

- [ ] **Organization**:
  - [ ] Open the popup and click "Organize" for `wikipedia.org`.
  - [ ] **Verify**:
    - A new window is created with 25 of the Wikipedia tabs, in a group named "wikipedia.org (Part 1)".
    - A second new window is created with the remaining 5 tabs, in a group named "wikipedia.org (Part 2)".
  - [ ] Click **"Undo"** twice. Verify both new windows are closed and the tabs return to the original window.

---

### Phase 4: Options Page

- [ ] **Open Options Page**: Right-click extension icon -> Options.
- [ ] **Session Management**:
  - [ ] Click **"Save Current Session"** with a test name. Verify it appears in the list.
  - [ ] Close one of the windows.
  - [ ] Click **"Restore"** on the saved session. Verify the closed window and its tabs are restored.
  - [ ] Click **"Delete"** on the saved session. Verify it is removed.
- [ ] **Settings**:
  - [ ] Change "Default Group Color" to "blue".
  - [ ] Click **"Save Settings"**.
  - [ ] Perform an "Organize" action. Verify the new group is blue.
- [ ] **Data Management**:
  - [ ] Click **"Clear All Data"** and accept the confirmation.
  - [ ] Verify saved sessions are gone.
  - [ ] Re-save a tab group and verify it is also gone after clearing.
