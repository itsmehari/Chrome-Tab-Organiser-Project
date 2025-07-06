# PRD Checklist: Features / How It Works Page

## [x] Intro Section

- [x] Write intro copy (philosophy, approach)
- [x] Design intro block (Figma: Section/Intro)

## [x] Feature Grid

- [x] List all key features
- [x] Design feature cards (Figma: Card/Feature)
- [x] Add icons and short descriptions
- [x] Implement card hover/slide-in animation

## [x] Demo Video

- [x] Record or create demo video
- [x] Design video embed/modal (Figma: VideoEmbed)
- [x] Add captions and alt text

## [x] Use Case Scenarios

- [x] Define 2–3 mini personas
- [x] Write use case blurbs
- [x] Design persona cards (Figma: PersonaCard)

## [x] Comparison Table

- [x] List competitors/features
- [x] Design comparison table (Figma: ComparisonTable)
- [x] Add checkmarks, highlight Smart Tab Organiser
- [x] Implement row highlight on hover

## [x] FAQ Section

- [x] Write 5–7 common feature questions/answers
- [x] Design FAQ accordion (Figma: Accordion/FAQ)
- [x] Add ARIA-expanded for accessibility

## [x] CTA Section

- [x] Add CTA block (Figma: CTASection)
- [x] Ensure sticky or visible on mobile

## [x] Accessibility & Responsiveness

- [x] All interactive elements keyboard accessible
- [x] Sufficient color contrast (WCAG AA+)
- [x] Mobile layout: features stack, table scrolls

## [x] Review & QA

- [x] Content review (clarity, grammar)
- [x] Design review (matches design system)
- [x] Developer review (component usage, ARIA, animation)
- [x] Final approval

## New Feature: Standard Sites (Most-Used Websites)

### Purpose

Allow users to save their most-used websites in a special list (“Standard Sites”), so they can open all of them at once, saving time and effort.

### User Stories

- As a user, I want to add the current tab to my Standard Sites list with one click.
- As a user, I want to view, edit, and delete sites from my Standard Sites list on a dedicated management page.
- As a user, I want to open all my Standard Sites at once in new tabs.
- As a user, I want to manually add or reorder sites in my list.

### Requirements

- Add a button (“Add to Standard Sites”) in the popup (and/or context menu) to save the current tab's URL and title.
- Store the Standard Sites list in chrome.storage.sync (or local).
- Create a new management page (standard-sites.html + standard-sites.js) to:
  - List all saved sites (with title, favicon, URL)
  - Open all sites at once
  - Edit, delete, and reorder sites
  - Add new sites manually
- Link to the management page from the popup.
- CRUD operations must be user-friendly and confirm before deleting.
- Show success/error messages for all actions.

### UI/UX Notes

- Responsive, clean design (Bootstrap or custom CSS)
- Show favicons for each site
- Confirm before deleting
- Success/error toasts or alerts

### Acceptance Criteria

- User can add, view, edit, delete, and reorder Standard Sites
- User can open all Standard Sites at once
- All changes persist across browser restarts
- No linter errors in new code
