# 📄 PRD & Master Checklist: Email Marketing Funnel & Templates for Smart Tab Organiser

## 1. Objective

To design, develop, and deploy a set of high-converting, market-standard HTML email templates that support the entire user journey—from acquisition to retention—using a funnel-based approach. These templates will be used for onboarding, engagement, conversion, feedback, and transactional communications.

---

## 2. Scope

- Create `/website/email/` directory to store all email templates.
- Develop 10 core HTML email templates, each mapped to a specific funnel stage.
- Ensure all templates are responsive, accessible, and compatible with major email clients.
- Provide a checklist for each template and the overall system for QA and launch-readiness.

---

## 3. Email Templates & Funnel Stages

| Template File             | Funnel Stage  | Purpose/Trigger                                  |
| ------------------------- | ------------- | ------------------------------------------------ |
| welcome.html              | Awareness     | After signup/install                             |
| onboarding.html           | Activation    | Guide to first use, tips, and support            |
| feature-announcement.html | Engagement    | Announce new features/updates                    |
| upgrade-offer.html        | Monetization  | Promote paid plans, special offers               |
| feedback.html             | Retention     | Request for feedback/review                      |
| reactivation.html         | Retention     | Win-back inactive users                          |
| newsletter.html           | Engagement    | Regular value-driven content                     |
| referral.html             | Engagement    | Invite friends, referral rewards                 |
| survey.html               | Feedback      | User research, satisfaction, feature requests    |
| transactional.html        | Transactional | Receipts, password resets, account notifications |

---

## 4. General Requirements

- All templates must be:
  - Responsive (mobile-first, max 600px width)
  - Use inline CSS for compatibility
  - Use web-safe fonts (Poppins with fallbacks)
  - Include alt text for all images
  - Accessible (semantic HTML, ARIA where needed)
  - Include a clear, single CTA per email
  - Branded (logo, color palette, footer)
  - Include unsubscribe link (except transactional)
  - Tested in major email clients (Gmail, Outlook, Apple Mail, etc.)
  - Hosted images (no base64)
  - GDPR/Privacy compliant

---

## 5. Detailed Checklist

### 📁 Folder & System Setup

- [ ] `/website/email/` directory created
- [ ] Naming follows kebab-case (e.g., welcome.html)
- [ ] This PRD/checklist file exists: `EMAIL_TEMPLATES_PRD_CHECKLIST.md`
- [ ] README.md in `/website/email/` with usage instructions

---

### 📧 Template Checklist (Repeat for Each Template)

#### Example: welcome.html

- [ ] File exists: `/website/email/welcome.html`
- [ ] Subject line defined (in comment or README)
- [ ] Preheader text included (hidden preview)
- [ ] Brand logo at top (hosted image, alt text)
- [ ] Headline and intro copy
- [ ] Main CTA button (clear, above the fold)
- [ ] Secondary info (optional)
- [ ] Social media links (icons, alt text)
- [ ] Footer with company info, address, and unsubscribe link
- [ ] Responsive layout (mobile and desktop)
- [ ] Inline CSS only (no external stylesheets)
- [ ] All images have descriptive alt text
- [ ] All links tested and working
- [ ] Accessibility: semantic structure, readable text, color contrast
- [ ] Tested in Gmail, Outlook, Apple Mail, Yahoo, mobile clients
- [ ] Unsubscribe link present and functional (except transactional)
- [ ] GDPR/privacy note (if required)
- [ ] No broken images or links
- [ ] No spam trigger words in copy
- [ ] Final HTML validated (no errors/warnings)

---

### 📝 Template-Specific Checklist

#### onboarding.html

- [ ] Step-by-step guide or tips included
- [ ] Support/contact link present

#### feature-announcement.html

- [ ] New feature(s) clearly described
- [ ] Visuals/screenshots included (if relevant)
- [ ] CTA to try feature or learn more

#### upgrade-offer.html

- [ ] Offer/discount details clear
- [ ] Urgency or scarcity element (if used)
- [ ] CTA to upgrade

#### feedback.html

- [ ] Feedback/review request copy
- [ ] Link to feedback form or review site

#### reactivation.html

- [ ] Win-back incentive or value proposition
- [ ] CTA to return or re-engage

#### newsletter.html

- [ ] Curated content or tips
- [ ] Consistent layout for repeat use

#### referral.html

- [ ] Referral program details
- [ ] Unique referral link placeholder

#### survey.html

- [ ] Survey link or embedded form
- [ ] Incentive (if any) described

#### transactional.html

- [ ] Transaction details (receipt, reset, etc.)
- [ ] No promotional content
- [ ] No unsubscribe link required

---

### ✅ Final QA & Launch

- [ ] All templates reviewed and approved
- [ ] All checklist items for each template completed
- [ ] README.md updated with template usage and customization notes
- [ ] Templates uploaded to email service provider (ESP) and tested with real data
- [ ] Analytics/tracking (if used) tested and working

---

## 6. Out of Scope

- Dynamic content population (handled by backend/ESP)
- Multi-language support (future phase)
- Automated campaign flows (handled by ESP)

---

## 7. Success Criteria

- All templates pass checklist and render correctly in all major clients
- Open and click rates meet or exceed industry benchmarks
- No deliverability or spam issues
- Positive user feedback on onboarding and communication
