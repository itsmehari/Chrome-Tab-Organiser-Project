# Smart Tab Organiser Website Design Blueprint

**Product:** Smart Tab Organiser (Chrome Extension)
**Purpose:** Digital product sales website for maximum conversions, trust, and clarity

---

## 🌐 Global Design System Blueprint

### 🎨 Color Palette

- **Primary:** #2563eb (Blue-600)
- **Secondary:** #f59e42 (Orange-400)
- **Accent:** #10b981 (Green-500)
- **Neutral:** #f8fafc (Gray-50), #1e293b (Gray-800)
- **States:** Info: #2563eb, Success: #10b981, Warning: #f59e42, Error: #ef4444, Disabled: #cbd5e1

### 🅰️ Typography

- **Font Family:**
  - Headings: Poppins, Inter, sans-serif
  - Body: Lato, Inter, sans-serif
- **Hierarchy:**
  - H1: 2.5rem, 700
  - H2: 2rem, 600
  - H3: 1.5rem, 600
  - H4: 1.25rem, 500
  - Body: 1rem, 400
  - Caption: 0.875rem, 400
  - CTA: 1.125rem, 600, uppercase

### 🟦 Buttons

- **Variants:** Primary, Secondary, Icon-only
- **States:** Default, Hover, Focus, Disabled
- **Sizes:** Small (32px), Medium (40px), Large (48px)
- **Figma Naming:** `Button/Primary/Medium`, etc.

### 🗂️ Cards

- **Types:** Feature Card, Testimonial Card, Blog Card
- **Specs:** 24px padding, 12px radius, subtle shadow, media slot
- **Figma Naming:** `Card/Feature`, etc.

### 📝 Form Elements

- **Inputs:** Text, Email, Password, Textarea, Dropdown, Checkbox, Radio
- **States:** Default, Focus, Error, Success, Disabled
- **Validation:** Inline error/success, ARIA labels
- **Figma Naming:** `Input/Text/Default`, etc.

### 🧭 Navigation

- **Desktop:** Top bar, logo left, links center/right, CTA right
- **Mobile:** Hamburger menu, slide-in drawer, sticky CTA
- **Dropdowns:** For features/resources
- **Sticky on scroll:** Yes, with hide-on-scroll-down, show-on-scroll-up

### 🦶 Footer

- **Sections:** Product, Company, Legal, Connect
- **Social Icons:** SVG, accessible labels
- **Newsletter:** Inline form, success/error feedback
- **Copyright**

### 🟢 Accessibility

- All interactive elements keyboard navigable
- Sufficient color contrast (WCAG AA+)
- ARIA roles/labels for nav, forms, accordions
- Focus states visible

### 📱 Responsiveness

- Mobile-first, fluid grid (min 320px)
- Breakpoints: 640px, 1024px, 1280px
- Cards stack, nav collapses, CTAs remain visible

---

## 📄 Page-by-Page Blueprint

### 1. Landing Page (`PRD-landing-page.md`)

- **Wireframe:** Hero, Trust bar, Scroll Teaser, Benefits, Secondary CTA, Footer
- **Components:** HeroSection, TrustBar, ScrollTeaser, BenefitCard, CTASection, Footer
- **Animations:** Hero fade-in, CTA pulse, arrow bounce, cards slide-in
- **Accessibility:** Alt text, heading order, CTA focus ring
- **Mobile:** Stack hero, compress trust bar, cards single column

### 2. Features Page (`PRD-features-page.md`)

- **Wireframe:** Intro, Feature Grid, Demo Video, Use Cases, Comparison Table, CTA
- **Components:** FeatureCard, VideoEmbed, PersonaCard, ComparisonTable, CTASection
- **Animations:** Card hover, video modal fade, table row highlight
- **Accessibility:** Video captions, table ARIA roles
- **Mobile:** Features stack, table scrolls

### 3. Pricing Page (`PRD-pricing-page.md`)

- **Wireframe:** Pricing Toggle, Pricing Cards, Comparison Table, Testimonials, FAQ
- **Components:** PricingToggle, PricingCard, ComparisonTable, TestimonialCard, FAQAccordion
- **Animations:** Card highlight, FAQ expand/collapse
- **Accessibility:** Toggle ARIA-pressed, FAQ ARIA-expanded
- **Mobile:** Cards stack, table scrolls, sticky CTA

### 4. Download/Install Page (`PRD-download-install-page.md`)

- **Wireframe:** Platform Selector, Step Guide, System Requirements, Troubleshooting, Support CTA
- **Components:** PlatformTabs, StepGuide, RequirementsCard, FAQAccordion, SupportCTA
- **Animations:** Step highlight, tab switch fade
- **Accessibility:** Tablist ARIA, step headings
- **Mobile:** Steps vertical, tabs scrollable

### 5. Blog/Resources Page (`PRD-blog-resources.md`)

- **Wireframe:** Featured Banner, Blog Grid, Sidebar, Author Bio, Newsletter
- **Components:** FeaturedBanner, BlogCard, FilterBar, Sidebar, AuthorBio, NewsletterForm
- **Animations:** Card hover, filter bar slide
- **Accessibility:** Filter bar ARIA, newsletter labels
- **Mobile:** Grid stacks, sidebar below

### 6. About Page (`PRD-about-page.md`)

- **Wireframe:** Mission, Founders' Story, Milestones, Team Grid, CTA
- **Components:** MissionBlock, Timeline, TeamCard, CTASection
- **Animations:** Timeline slide-in, team card hover
- **Accessibility:** Team photo alt, timeline ARIA
- **Mobile:** Timeline vertical, team grid stacks

### 7. Contact/Support Page (`PRD-contact-support-page.md`)

- **Wireframe:** Contact Form, Support Block, Map, FAQ, Social Links
- **Components:** ContactForm, SupportBlock, MapEmbed, FAQAccordion, SocialLinks
- **Animations:** Form focus, FAQ expand/collapse
- **Accessibility:** Form ARIA, FAQ ARIA
- **Mobile:** Form full width, blocks stack

### 8. Legal Pages (`PRD-legal-pages.md`)

- **Wireframe:** Readable text, TOC, Last updated
- **Components:** LegalTextBlock, TOCNav
- **Accessibility:** High contrast, skip to content
- **Mobile:** Text reflows, TOC collapses

---

## 🏗️ Figma-Ready Component Naming

- Button/Primary/Medium
- Card/Feature
- Input/Text/Default
- Nav/Desktop
- Nav/Mobile
- Footer/Main
- Accordion/FAQ
- Pricing/Card
- Blog/Card
- Form/Contact
- Timeline/Milestone
- Table/Comparison
- Tabs/Platform

---

## 🚀 Developer/Designer Handoff Notes

- Use CSS variables for color and spacing tokens.
- All icons as SVG, accessible labels.
- Use semantic HTML5 (header, nav, main, section, footer).
- All interactive elements must have focus/active states.
- Test all flows on mobile and desktop.
- Use ARIA roles for all custom components (accordions, tabs, modals).
- Animations should be subtle, performant, and not block interaction.

---

## 🌀 Soulful, Animated, Highly Interactive Design Principle (MANDATORY)

All website pages and components must:

- Be soulful in design: visually rich, emotionally engaging, and memorable.
- Be highly interactive: every section, card, button, and navigation element should respond to user actions with smooth, delightful transitions and micro-interactions.
- Be animated: use advanced CSS3 (transitions, transforms, keyframes, gradients, glassmorphism, etc.) and non-Node JavaScript libraries (e.g., GSAP, Anime.js, VanillaTilt, Swiper, etc.) for interactivity and animation.
- Animations must be performant, accessible (respects reduced motion, keyboard navigation), and always enhance—not distract from—the user experience.
- Use layered effects, parallax, hover reveals, animated SVGs, and scroll-based animations where appropriate.
- This principle is mandatory for all pages, components, and future updates.

**Implementation:**

- Integrate animation libraries via CDN in HTML files.
- Add CSS classes and JS hooks for transitions, entrance animations, and interactive effects.
- Review every page and component for opportunities to add soul, motion, and interactivity.
- Document all animation patterns and guidelines in this blueprint and in component PRDs.

---

## 🏆 Index Page Excellence Principle (MANDATORY)

- The index page (homepage) must be exceptionally attractive and conversion-focused, embodying the best practices of digital product marketing.
- It should include all essential sections: hero, trust indicators, feature highlights, demo/preview, testimonials, pricing/plan summary, FAQ, strong CTAs, and a comprehensive footer.
- Visual design must be 10X: bold, modern, emotionally engaging, and memorable.
- Content and layout must be 10X: clear, persuasive, benefit-driven, and optimized for conversion.
- Use advanced animation, micro-interactions, and interactivity to delight and guide users.
- Approach every decision as both a world-class designer and a world-class marketing manager.
- This is a non-negotiable standard for the homepage and should inspire the rest of the site.

---

**This blueprint is for the Smart Tab Organiser Chrome extension digital product website. Use it as the foundation for Figma wireframes, design system setup, and developer implementation.**
