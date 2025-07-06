# Smart Tab Organiser Website: Master Project Plan

## 1. Website Structure: Essential Pages

- Home/Landing Page
- Features/How It Works
- Pricing
- Download/Install
- Blog/Resources
- About
- Contact/Support
- Legal (Privacy Policy, Terms of Service)

## 2. Marketing & Content Plan

- Positioning & Messaging
- Content Strategy (SEO, tutorials, video, case studies)
- Social Proof & Community
- Launch & Growth (Product Hunt, Chrome Web Store, newsletter, referral program)

## 3. Design & UX Approach

- Modern, clean, friendly design
- Mobile responsive
- Interactive demos
- Sticky CTAs
- Trust signals (privacy, security)

## 4. Suggested Website Pages (Summary Table)

| Page                  | Purpose/Content                                  |
| --------------------- | ------------------------------------------------ |
| Home/Landing          | Value prop, features, demo, testimonials, CTA    |
| Features/How It Works | Deep dive into each feature, visuals, comparison |
| Pricing               | Plans, features per plan, FAQ                    |
| Download/Install      | Install button, guide, Chrome Web Store badge    |
| Blog/Resources        | SEO articles, tips, updates                      |
| About                 | Story, team, mission, press                      |
| Contact/Support       | Form, help center, FAQ                           |
| Legal                 | Privacy Policy, Terms of Service                 |

## 5. Next Steps

1. Wireframe the landing and key pages.
2. Draft homepage copy and feature blurbs.
3. Design a simple, modern UI kit (colors, buttons, icons).
4. Set up a static site generator (Next.js, Astro, Hugo, etc.) or use a no-code tool for MVP.
5. Prepare launch assets (screenshots, GIFs, demo video).
6. Plan your launch sequence (Product Hunt, social, newsletter, etc.)

---

For each step, a detailed design and development plan (PRD) will be created in the `website/` folder.

## New Feature: Standard Sites (Most-Used Websites)

- **Purpose:** Allow users to save and manage a list of their most-used websites (“Standard Sites”) and open all at once.
- **Key Actions:**
  - Add current tab to Standard Sites from popup
  - Manage Standard Sites (CRUD) on a dedicated page
  - Open all Standard Sites at once
- **New Files:**
  - `standard-sites.html` (management UI)
  - `standard-sites.js` (logic for CRUD, open all, etc.)
- **Integration:**
  - Add button in popup to save current tab
  - Link to management page from popup
- **Storage:** Use chrome.storage.sync (or local)
- **UI:** Responsive, clean, with favicons and user-friendly messages
