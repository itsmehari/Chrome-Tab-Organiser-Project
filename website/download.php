<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Download – Smart Tab Organiser";
$page_description = "Download and install the Smart Tab Organiser from the Chrome Web Store. Get started for free and begin organizing your tabs in seconds.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/download.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Download – Smart Tab Organiser
    Purpose: Download and install instructions for the extension
    Head Section: Contains SEO meta tags, social sharing tags, canonical URL, stylesheets, scripts, and structured data for this page.
    Structure:
      - Basic meta tags (charset, viewport, title, description, robots)
      - Canonical URL for SEO
      - Open Graph (OG) tags for social sharing
      - Twitter Card tags for Twitter sharing
      - CSS stylesheets (main, fonts, Bootstrap, FontAwesome, Animate.css)
      - Structured data (JSON-LD for SoftwareApplication)
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
  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Animate.css for entrance animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Structured Data: SoftwareApplication Schema for SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Smart Tab Organiser",
    "operatingSystem": "Chrome",
    "applicationCategory": "Productivity",
    "offers": {
      "@type": "Offer",
      "price": "0.00",
      "priceCurrency": "INR",
      "availability": "https://schema.org/InStock",
      "url": "https://chrome.google.com/webstore/detail/smart-tab-organiser/"
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.8",
      "reviewCount": "1000"
    },
    "image": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png"
  }
  </script>
</head>
<body class="sto-section-bg">
  <section class="container py-5">
    <header class="text-center mb-5 animate__animated animate__fadeInDown">
      <i class="fa-solid fa-download fa-3x text-primary mb-3"></i>
      <h1 class="display-4 fw-bold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;">Download & Install</h1>
      <p class="lead text-muted" style="font-family: 'Lato', 'Inter', sans-serif;">Get started in seconds. Smart Tab Organiser is free and secure.</p>
      <a href="https://chrome.google.com/webstore/detail/smart-tab-organiser/" class="btn sto-btn sto-btn--primary btn-lg mt-3 animate__animated animate__pulse animate__infinite" target="_blank" rel="noopener">
        <i class="fa-brands fa-chrome me-2"></i> Add to Chrome – It's Free
      </a>
      <div class="mt-2 text-muted small">Available for Chrome, Edge, and Brave.</div>
    </header>

    <div class="row g-4 justify-content-center">
      <div class="col-lg-8">
        <div class="card sto-card shadow-lg border-0 p-4 h-100 animate__animated animate__fadeInLeft">
          <h2 class="h4 fw-semibold mb-3" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-list-ol text-primary me-2"></i> How to Install</h2>
          <ol class="list-unstyled ps-3 install-steps">
            <li class="d-flex align-items-start mb-2"><span class="badge bg-primary rounded-pill me-3">1</span> <strong>Click "Add to Chrome"</strong> to visit the Chrome Web Store.</li>
            <li class="d-flex align-items-start mb-2"><span class="badge bg-primary rounded-pill me-3">2</span> <strong>Confirm the extension install prompt</strong> in your browser.</li>
            <li class="d-flex align-items-start mb-2"><span class="badge bg-primary rounded-pill me-3">3</span> <strong>Pin Smart Tab Organiser</strong> to your toolbar for easy access.</li>
            <li class="d-flex align-items-start"><span class="badge bg-primary rounded-pill me-3">4</span> <strong>Click the icon</strong> to start organizing your tabs!</li>
          </ol>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card sto-card shadow-lg border-0 p-4 h-100 animate__animated animate__fadeInRight">
          <h2 class="h4 fw-semibold mb-3" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-laptop-code text-primary me-2"></i> System Requirements</h2>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="fa-solid fa-check-circle text-accent me-2"></i> Google Chrome 109+ (or compatible)</li>
            <li class="mb-2"><i class="fa-solid fa-check-circle text-accent me-2"></i> Windows, Mac, or Linux</li>
            <li><i class="fa-solid fa-check-circle text-accent me-2"></i> Internet connection for install</li>
          </ul>
          <div class="version-info mt-auto pt-3 text-muted small">Version 1.0.0 – Last updated June 2024</div>
        </div>
      </div>
    </div>

    <section class="mt-5 animate__animated animate__fadeInUp">
      <h2 class="h3 fw-semibold mb-4 text-center" style="font-family: 'Poppins', 'Inter', sans-serif;">Install & Troubleshooting FAQs</h2>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq1-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">Why can't I see the extension after installing?</button></h2>
          <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Pin it from the Chrome extensions menu (the puzzle piece icon) for quick access.</div></div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq2-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">Does it work on Edge or Brave?</button></h2>
          <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes, the Chrome Web Store link works for all Chromium-based browsers.</div></div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq3-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">How do I update?</button></h2>
          <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Updates are handled automatically by your browser via the Chrome Web Store.</div></div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq4-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">Is it safe?</button></h2>
          <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes, it has been reviewed and approved by the Chrome Web Store team.</div></div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq5-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">Where can I get support?</button></h2>
          <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Please use our <a href="contact.php">contact page</a>.</div></div>
        </div>
      </div>
    </section>
  </section>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html> 