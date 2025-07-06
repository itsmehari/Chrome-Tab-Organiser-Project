<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Contact Us – Smart Tab Organiser";
$page_description = "Get in touch with the Smart Tab Organiser team for support, feedback, or partnership inquiries. We're here to help.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/contact.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Contact Us – Smart Tab Organiser
    Purpose: Contact and support page for user inquiries
    Head Section: Contains SEO meta tags, social sharing tags, canonical URL, stylesheets, and scripts for this page.
    Structure:
      - Basic meta tags (charset, viewport, title, description, robots)
      - Canonical URL for SEO
      - Open Graph (OG) tags for social sharing
      - Twitter Card tags for Twitter sharing
      - CSS stylesheets (main, fonts, Bootstrap, FontAwesome, Animate.css)
  -->
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="robots" content="index, follow">
  <!-- Canonical URL for SEO -->
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
  <!-- Open Graph Meta Tags for Social Sharing -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:image" content="https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png">
  <meta property="og:type" content="website">
  <!-- Twitter Card Meta Tags for Twitter Sharing -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png">
  <!-- CSS Stylesheets: Main, Fonts, Bootstrap, FontAwesome, Animate.css -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Smart Tab Organiser",
    "url": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/",
    "contactPoint": {
      "@type": "ContactPoint",
      "email": "support@smarttaborganiser.com",
      "contactType": "customer support",
      "areaServed": "IN"
    },
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Chennai",
      "addressCountry": "IN"
    }
  }
  </script>
</head>
<body>
  <section class="sto-section-bg py-5">
    <div class="container py-4">
      <h1 class="section-title text-center mb-5 display-5 fw-bold text-primary" style="font-family: 'Poppins', 'Inter', sans-serif;">Contact & Support</h1>
      <div class="row g-5 align-items-stretch">
        <!-- Contact Form -->
        <div class="col-lg-6">
          <div class="card sto-card shadow-lg border-0 p-4 animate__animated animate__fadeInLeft h-100">
            <h2 class="h4 mb-3 fw-semibold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-envelope-circle-check text-primary me-2"></i>Send Us a Message</h2>
            <form id="contactForm" novalidate>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required aria-required="true">
                <div class="invalid-feedback">Please enter your name.</div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required aria-required="true">
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required aria-required="true">
                <div class="invalid-feedback">Please enter a subject.</div>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required aria-required="true"></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
              </div>
              <button type="submit" class="btn sto-btn sto-btn--primary w-100 py-2 fs-5"><i class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
            </form>
          </div>
          <div class="card sto-card shadow border-0 p-4 mt-4 animate__animated animate__fadeInUp">
            <h2 class="h6 mb-2 fw-semibold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-headset text-accent me-2"></i>Live Chat & Email</h2>
            <p>Email: <a href="mailto:support@smarttaborganiser.com">support@smarttaborganiser.com</a></p>
            <p class="mb-0">Live chat available 9am–6pm IST (Mon–Fri)</p>
          </div>
        </div>
        <!-- Office, FAQ, Social -->
        <div class="col-lg-6">
          <div class="card sto-card shadow border-0 p-4 mb-4 animate__animated animate__fadeInRight">
            <h2 class="h6 mb-2 fw-semibold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-location-dot text-secondary me-2"></i>Our Office</h2>
            <address class="mb-2">Chennai, India</address>
            <div class="office-map mb-2 rounded overflow-hidden">
              <iframe src="https://maps.google.com/maps?q=Chennai&t=&z=13&ie=UTF8&iwloc=&output=embed" title="Smart Tab Organiser Office Location" style="border-radius:12px;"></iframe>
            </div>
          </div>
          <div class="card sto-card shadow border-0 p-4 mb-4 faq-section animate__animated animate__fadeInRight animate__delay-1s">
            <h2 class="h6 mb-3 fw-semibold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-circle-question text-primary me-2"></i>Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq1-heading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                    How do I get support?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">Use the form or email us at support@smarttaborganiser.com.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq2-heading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    Where can I find the user guide?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">See our <a href="../docs/user_guide.md">User Guide</a> for step-by-step help.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq3-heading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                    How quickly do you respond?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">We reply within 24 hours on business days.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq4-heading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                    Can I suggest a feature?
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">Absolutely! Use the form or email to send your ideas.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq5-heading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                    Is there a community forum?
                  </button>
                </h2>
                <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">Coming soon! Join our newsletter for updates.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card sto-card shadow border-0 p-4 social-links animate__animated animate__fadeInUp animate__delay-2s">
            <h2 class="h6 mb-2 fw-semibold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-share-nodes text-accent me-2"></i>Connect with Us</h2>
            <a href="#" aria-label="Twitter" class="me-3 fs-4 text-primary"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
            <a href="#" aria-label="LinkedIn" class="me-3 fs-4 text-primary"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
            <a href="#" aria-label="GitHub" class="fs-4 text-primary"><i class="fa-brands fa-github" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'components/footer.php'; ?>
  <?php include 'components/analytics.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
  <script>
    // Bootstrap form validation
    (() => {
      'use strict';
      const form = document.getElementById('contactForm');
      if(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      }
    })();
  </script>
</body>
</html> 