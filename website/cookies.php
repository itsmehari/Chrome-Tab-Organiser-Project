<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Cookie Policy – Smart Tab Organiser";
$page_description = "Cookie policy for the Smart Tab Organiser Chrome Extension and website.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/cookies.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Cookie Policy – Smart Tab Organiser
    Purpose: Inform users about cookie usage and consent
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
  <meta name="robots" content="noindex, follow">
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
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>
  }
  </script>
</head>
<body class="sto-section-bg">
  <section class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card sto-card shadow-lg border-0 p-4 animate__animated animate__fadeInUp">
          <div class="text-center mb-4">
            <i class="fa-solid fa-cookie-bite fa-3x text-primary mb-2"></i>
            <h1 class="display-5 fw-bold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;">Cookie Policy</h1>
            <div class="text-muted mb-3" style="font-family: 'Lato', 'Inter', sans-serif;">We use cookies only for essential website functionality. No tracking or advertising cookies are used.</div>
          </div>
          <nav class="toc-nav mb-4 p-3 bg-light rounded border" aria-label="Table of Contents">
            <h2 class="h6 fw-semibold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-list-ul text-secondary me-2"></i>Contents</h2>
            <ul class="row row-cols-2 g-2">
              <li class="col"><a href="#usage"><i class="fa-solid fa-cookie-bite text-accent me-1"></i>Cookie Usage</a></li>
              <li class="col"><a href="#consent"><i class="fa-solid fa-check-double text-accent me-1"></i>Consent</a></li>
              <li class="col"><a href="#management"><i class="fa-solid fa-sliders text-accent me-1"></i>Managing Cookies</a></li>
              <li class="col"><a href="#contact"><i class="fa-solid fa-envelope text-accent me-1"></i>Contact</a></li>
            </ul>
          </nav>
          <section id="usage" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-cookie-bite text-accent me-2"></i>Cookie Usage</h2>
            <p>We use cookies only for login sessions and essential site features. No analytics or advertising cookies are set.</p>
          </section>
          <section id="consent" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-check-double text-accent me-2"></i>Consent</h2>
            <p>By using our website, you consent to the use of essential cookies. You may disable cookies in your browser settings.</p>
          </section>
          <section id="management" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-sliders text-accent me-2"></i>Managing Cookies</h2>
            <p>You can clear or block cookies at any time via your browser settings.</p>
          </section>
          <section id="contact" class="mb-2">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-envelope text-accent me-2"></i>Contact</h2>
            <p>Email: <a href="mailto:privacy@smarttaborganiser.com">privacy@smarttaborganiser.com</a></p>
            <div class="last-updated text-muted small mt-2">Last updated: June 2024</div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <?php include 'components/footer.php'; ?>
  <?php include 'components/analytics.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html> 