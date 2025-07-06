# Master Design & Content Improvement Plan

## 1. Goal

To apply a consistent set of user-centric design and content enhancements to all relevant pages of the Smart Tab Organiser website, inspired by proven competitor layouts. The focus is on building user trust, showcasing value, and improving navigation.

## 2. Implementation Checklist

Apply all relevant items from this checklist to each page.

### 2.1. Navigation Bar (`components/navbar.php`)

- **[ ] Add "Feedback" Link:** Insert a link to `feedback.php` in the main navigation menu. This shows users their input is valued.
- **[ ] Add "Dashboard" Link:** Add a placeholder `Dashboard` link that is styled as disabled or hidden for non-logged-in users. This hints at future functionality.

### 2.2. Homepage (`index.php`)

- **[ ] Add Social Proof / Stats Bar:** Below the main hero section, add a 3-column row displaying key metrics.
  - **Metric 1:** "Happy Users" (e.g., "10,000+")
  - **Metric 2:** "Average Rating" (e.g., "4.8 Stars")
  - **Metric 3:** "Active Installs"
- **[ ] Add Testimonials Section:** Create a section titled "What Our Users Are Saying" with at least two sample testimonials in styled cards.
- **[ ] Add FAQ Section:** Add a section titled "Frequently Asked Questions" with 2-3 common questions.

### 2.3. Features Page (`features.php`)

- **[ ] Verify Consistent Layout:** Ensure the page uses the Bootstrap grid and card layout we previously implemented.
- **[ ] Add User Testimonials:** If not already present, add a relevant testimonial to reinforce feature value.

### 2.4. Footer (`components/footer.php`)

- **[ ] Add "Feature Request" Link:** Add a link to a new `feature-request.php` page in the "Useful Links" or "About" column.

### 2.5. New Pages to Create

- **[ ] Create `feedback.php`:** A simple page with a form for users to submit feedback.
- **[ ] Create `feature-request.php`:** A page explaining how users can suggest new features (can link to the contact page or a dedicated form).

## 3. Instructions for AI

- Open the target file.
- Read this context file (`DESIGN_IMPROVEMENT_CONTEXT.md`) completely.
- Apply the checklist items that are relevant to the target file.
- Use Bootstrap 5 classes for all new elements (e.g., `.row`, `.col-md-4`, `.card`, `.text-center`).
- Ensure all new sections are fully responsive and match the existing modern design (e.g., `Poppins` font, color scheme).
- For new pages, create them with the standard navbar and footer includes.
- Generate the complete, final code changes and apply them.
