<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Pricing – Smart Tab Organiser";
$page_description = "Simple, flexible pricing for Smart Tab Organiser. Choose a free, pro, or team plan. No hidden fees.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/pricing.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Pricing – Smart Tab Organiser
    Purpose: Dedicated pricing and plans landing page
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
    "@type": "WebPage",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "image": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png",
    "brand": {
      "@type": "Brand",
      "name": "Smart Tab Organiser"
    },
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "0.00",
      "availability": "https://schema.org/InStock",
      "url": "https://chrome.google.com/webstore/detail/smart-tab-organiser/"
    }
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Is there a free plan?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, you can use the basic features for free, forever."
        }
      },
      {
        "@type": "Question",
        "name": "Can I cancel anytime?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, you can cancel or switch plans at any time."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer team discounts?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, contact us for custom team pricing."
        }
      },
      {
        "@type": "Question",
        "name": "What payment methods are accepted?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "All major cards, PayPal, and Google Pay."
        }
      },
      {
        "@type": "Question",
        "name": "What is Standard Sites?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Standard Sites lets you save your most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and boost your productivity by skipping repetitive steps."
        }
      }
    ]
  }
  </script>
</head>
<body>
  <header class="section hero-modern alt-bg text-center" style="padding:2.5rem 0 1.5rem 0;">
    <h1 class="fw-bold mb-2" style="font-size:2.5rem;">Simple, Transparent Pricing</h1>
    <p class="lead mb-3">Choose the plan that fits your workflow. No hidden fees, cancel anytime.</p>
    <a href="compare-features.php" class="btn btn-outline-primary mb-2"><i class="fa-solid fa-table-list me-1"></i> Compare All Features</a>
  </header>
  <section class="container py-5">
    <div class="row justify-content-center g-4">
      <!-- Free Plan -->
      <div class="col-md-4">
        <div class="card pricing-card text-center h-100">
          <div class="card-body">
            <h3 class="fw-bold">Free</h3>
            <div class="price mb-2">₹0 <span class="fs-6 text-muted">/ forever</span></div>
            <ul class="list-unstyled mb-3">
              <li><i class="fa-solid fa-check text-success me-1"></i> Standard Sites</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> Tab Grouping</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> Save/Restore Sessions</li>
              <li><i class="fa-solid fa-xmark text-danger me-1"></i> AI Grouping</li>
              <li><i class="fa-solid fa-xmark text-danger me-1"></i> Analytics</li>
              <li><i class="fa-solid fa-xmark text-danger me-1"></i> Team Sharing</li>
            </ul>
            <a href="download.php" class="btn btn-primary w-100">Get Started Free</a>
          </div>
        </div>
      </div>
      <!-- Pro Plan -->
      <div class="col-md-4">
        <div class="card pricing-card text-center h-100 border-success" style="border-width:2.5px;">
          <div class="card-body">
            <h3 class="fw-bold text-success">Pro</h3>
            <div class="price mb-2">₹80 <span class="fs-6 text-muted">/ month</span></div>
            <ul class="list-unstyled mb-3">
              <li><i class="fa-solid fa-check text-success me-1"></i> Standard Sites</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> All Free Features</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> AI Grouping</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> Analytics Dashboard</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> Undo/Redo</li>
              <li><i class="fa-solid fa-xmark text-danger me-1"></i> Team Sharing</li>
            </ul>
            <a href="download.php" class="btn btn-success w-100">Start Free Trial</a>
          </div>
        </div>
      </div>
      <!-- Team Plan -->
      <div class="col-md-4">
        <div class="card pricing-card text-center h-100 border-primary" style="border-width:2.5px;">
          <div class="card-body">
            <h3 class="fw-bold text-primary">Team</h3>
            <div class="price mb-2">Custom</div>
            <ul class="list-unstyled mb-3">
              <li><i class="fa-solid fa-check text-success me-1"></i> Standard Sites</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> All Pro Features</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> Team Sharing</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> Priority Support</li>
              <li><i class="fa-solid fa-check text-success me-1"></i> Custom Onboarding</li>
            </ul>
            <a href="contact.php" class="btn btn-outline-primary w-100">Contact Sales</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
      <span class="text-muted">All prices include taxes. <a href="compare-features.php">See detailed feature comparison</a>.</span>
    </div>
  </section>
  <section class="container py-4">
    <h2 class="text-center fw-bold mb-4">Frequently Asked Questions</h2>
    <div class="row justify-content-center g-3">
      <div class="col-md-6">
        <div class="card faq-card mb-3">
          <div class="card-body">
            <h5 class="fw-semibold mb-2"><i class="fa-solid fa-circle-question text-accent me-1"></i> Is there a free plan?</h5>
            <p class="mb-0">Yes, you can use the basic features for free, forever.</p>
          </div>
        </div>
        <div class="card faq-card mb-3">
          <div class="card-body">
            <h5 class="fw-semibold mb-2"><i class="fa-solid fa-arrows-rotate text-primary me-1"></i> Can I cancel anytime?</h5>
            <p class="mb-0">Yes, you can cancel or switch plans at any time.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card faq-card mb-3">
          <div class="card-body">
            <h5 class="fw-semibold mb-2"><i class="fa-solid fa-users text-secondary me-1"></i> Do you offer team discounts?</h5>
            <p class="mb-0">Yes, contact us for custom team pricing.</p>
          </div>
        </div>
        <div class="card faq-card mb-3">
          <div class="card-body">
            <h5 class="fw-semibold mb-2"><i class="fa-solid fa-credit-card text-primary me-1"></i> What payment methods are accepted?</h5>
            <p class="mb-0">All major cards, PayPal, and Google Pay.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cta-section animated-cta text-center" style="margin: 2.5rem auto; max-width: 600px;">
    <a href="download.php" class="btn btn-primary btn-lg" style="font-size:1.3rem; padding: 0.9rem 2.5rem; border-radius: 12px;">
      <i class="fa-solid fa-download me-2"></i>Start Free Trial
    </a>
  </section>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</body>
</html> 