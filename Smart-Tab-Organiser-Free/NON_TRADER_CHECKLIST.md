# Non-Trader Chrome Extension Submission Checklist

**Legend:**

- `[x]` - Item is implemented and complete.
- `[!]` - Item is implemented but requires manual testing/verification.
- `[ ]` - Item requires manual action from you during the store submission process.

## Important Note About Non-Trader Status

- [ ] As per consumer protection laws for the European Economic Area (EEA), we are submitting this extension as a **non-trader**. (You must select this during submission).

## 1. App Name Requirements

- [ ] No other extensions with the same name exist. (Manual check on Chrome Web Store).
- [x] Name doesn't include version number.
- [ ] Name matches OAuth consent screen. (Manual setup in Google Cloud Console).
- [x] Name is not vague or too generic.
- [x] Name is 50 characters or less.
- [x] Name uses title case.
- [x] Name avoids punctuation, especially parentheses.
- [x] Name matches the name displayed within Chrome.

## 2. Developer Information

- [x] Developer name accurately represents individual status.
- [x] Developer website points to valid information.
- [ ] Non-trader status clearly indicated in store listing. (Manual selection during submission).
- [x] Personal contact information is valid and accessible via the website.

## 3. App Description

- [!] All links work and point to correct information. (Please verify all links on the website).
- [ ] Privacy policy link points to privacy policy page. (Manual entry during submission).
- [ ] Short and detailed descriptions are different. (Manual entry during submission).
- [x] Descriptions are clear and understandable.
- [x] Pricing information (free version) is clearly stated.
- [x] Upgrade options are transparently described.

## 4. Functionality Verification

- [!] No obvious bugs in core features. (Requires manual testing).
- [!] All actions work as expected. (Requires manual testing).
- [x] Loading indicators present where needed.
- [x] Clear integration with Chrome APIs.
- [x] Provides unique tab management functionality.
- [x] Not for advertising or spam purposes.
- [!] Fully functional, not in testing phase. (Requires manual testing).

## 5. User Experience

- [x] No use of Google brand assets or trademarks.
- [x] Consistent button labels and menu items.
- [x] Clear feedback for all actions.
- [!] No broken images or fuzzy graphics. (Icons copied, please verify quality).
- [!] Dark/Light mode works correctly. (Implemented, please test).
- [x] Error messages are clear and helpful.
- [x] Settings are easily accessible.

## 6. Graphics Requirements

- [x] Icons are properly sized (16, 32, 48, 128px).
- [!] Icons have transparent backgrounds. (Please verify the source images).
- [!] Icons represent app functionality. (Subjective, please verify).
- [!] Icons are in color (not grayscale). (Please verify).
- [ ] Screenshots are clear and readable. (See `STORE_ASSETS_GUIDE.md`).
- [ ] Screenshots accurately show features. (See `STORE_ASSETS_GUIDE.md`).
- [!] No Google trademarks in graphics. (Please verify your custom graphics).

## 7. Privacy & Security

- [x] Clear privacy policy provided (`PRIVACY.md`).
- [x] All data processing is local.
- [x] Minimal required permissions.
- [x] No unnecessary data collection.
- [x] Clear data handling explanation.
- [x] User data protection measures in place.
- [x] Easy data removal process (uninstall).

## 8. Documentation

- [x] `README.md` is complete.
- [x] `PRIVACY.md` is detailed.
- [x] `USER_GUIDE.md` is comprehensive.
- [x] All limitations clearly stated.
- [x] Installation instructions clear.
- [x] Support contact information provided.
- [x] License information included (`LICENSE`).

## 9. Store Listing Requirements

- [ ] At least 2 quality screenshots. (Manual creation, see `STORE_ASSETS_GUIDE.md`).
- [ ] Promotional tile image (440x280px). (Manual creation).
- [ ] Small tile image (96x96px). (This should be your `icon96.png`, which is missing. You'll need to create it).
- [ ] Marquee image (1400x560px). (Manual creation).
- [ ] Feature graphic (1280x800px). (Manual creation).
- [x] Clear feature list is available in documentation.
- [ ] Support email address. (Manual entry during submission).
- [x] Website URL.

## 10. Technical Requirements

- [x] Uses Manifest V3.
- [x] All permissions justified in `PRIVACY.md`.
- [x] No external dependencies (lib folder is empty).
- [ ] Code is minified. (Recommended for production, but not a blocker. Can be done later).
- [!] Assets are optimized. (Please verify icon sizes).
- [!] No console errors. (Requires manual testing).
- [!] Performance optimized. (Requires manual testing).

## 11. Free Version Specific

- [x] Limitations clearly stated.
- [x] Upgrade path clearly marked.
- [!] Free features fully functional. (Requires manual testing).
- [x] No misleading premium features.

## Pre-Submission Final Checks

- [!] Test on multiple Chrome versions.
- [!] Test all core functionality.
- [!] Verify all links work.
- [!] Check all images load.
- [!] Verify privacy policy is accurate.
- [!] Test installation process.
- [!] Verify uninstall process.
- [!] Check data cleanup on uninstall.

## Post-Submission

- [ ] Keep copy of submission
- [ ] Monitor developer email
- [ ] Prepare for review feedback
- [ ] Have support system ready
- [ ] Plan for updates
- [ ] Monitor user feedback

## Important Links

- [Chrome Web Store Developer Dashboard](https://chrome.google.com/webstore/devconsole)
- [Chrome Extension Documentation](https://developer.chrome.com/docs/extensions/mv3/)
- [Developer Program Policies](https://developer.chrome.com/docs/webstore/program_policies/)
- [Branding Guidelines](https://developer.chrome.com/docs/webstore/branding/)

## Notes

1. Review typically takes several days
2. Be prepared for additional information requests
3. Keep documentation of all development decisions
4. Maintain clear communication channels
5. Have a plan for user support
6. Consider future updates and maintenance
