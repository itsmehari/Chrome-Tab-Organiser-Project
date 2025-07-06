<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Privacy Policy – Smart Tab Organiser";
$page_description = "Privacy Policy for the Smart Tab Organiser Chrome Extension and website. Your data is 100% local and private.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/privacy.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="robots" content="noindex, follow">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:image" content="https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png">
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
    "url": <?php echo json_encode($canonical_url); ?>,
    "about": "PrivacyPolicy"
  }
  </script>
</head>
<body class="sto-section-bg">
  <section class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card sto-card shadow-lg border-0 p-4 animate__animated animate__fadeInUp">
          <div class="text-center mb-4">
            <i class="fa-solid fa-user-shield fa-3x text-primary mb-2"></i>
            <h1 class="display-5 fw-bold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;">Privacy Policy</h1>
            <div class="text-muted mb-3" style="font-family: 'Lato', 'Inter', sans-serif;">Your privacy is our top priority. Please review our policy below.</div>
          </div>
          <nav class="toc-nav mb-4 p-3 bg-light rounded border" aria-label="Table of Contents">
            <h2 class="h6 fw-semibold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-list-ul text-secondary me-2"></i>Contents</h2>
            <ul class="row row-cols-2 row-cols-md-3 g-2">
              <li class="col"><a href="#introduction"><i class="fa-solid fa-circle-info text-accent me-1"></i>Introduction & Scope</a></li>
              <li class="col"><a href="#data"><i class="fa-solid fa-database text-accent me-1"></i>Data We Collect</a></li>
              <li class="col"><a href="#use"><i class="fa-solid fa-gears text-accent me-1"></i>How We Use Data</a></li>
              <li class="col"><a href="#cookies"><i class="fa-solid fa-cookie-bite text-accent me-1"></i>Cookies & Tracking</a></li>
              <li class="col"><a href="#security"><i class="fa-solid fa-lock text-accent me-1"></i>Data Security</a></li>
              <li class="col"><a href="#rights"><i class="fa-solid fa-user-check text-accent me-1"></i>Your Rights</a></li>
              <li class="col"><a href="#children"><i class="fa-solid fa-child text-accent me-1"></i>Children's Privacy</a></li>
              <li class="col"><a href="#changes"><i class="fa-solid fa-arrows-rotate text-accent me-1"></i>Changes</a></li>
              <li class="col"><a href="#contact"><i class="fa-solid fa-envelope text-accent me-1"></i>Contact</a></li>
            </ul>
          </nav>
          <section id="introduction" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-circle-info text-accent me-2"></i>Introduction & Scope</h2>
            <p>This Privacy Policy explains how Smart Tab Organiser ("we", "us", or "our") handles your information when you use our Chrome extension. We are committed to protecting your privacy and ensuring transparency about our data practices.</p>
          </section>
          <section id="data" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-database text-accent me-2"></i>Data We Collect</h2>
            <ul>
              <li><strong>Extension Usage Data:</strong> We only collect data necessary for the extension to function, such as tab grouping and session management. No browsing history, personal data, or sensitive information is sent to our servers. <strong>Standard Sites Data:</strong> Your list of Standard Sites is stored locally in your browser and never leaves your device.</li>
              <li><strong>Support/Contact Data:</strong> If you contact us for support, we may collect your email address and any information you provide voluntarily.</li>
              <li><strong>No Sensitive Data:</strong> We do not collect passwords, payment information, or any sensitive personal data.</li>
            </ul>
          </section>
          <section id="use" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-gears text-accent me-2"></i>How We Use Data</h2>
            <ul>
              <li>All tab analysis and grouping is performed locally in your browser. We do not track, sell, or share your information.</li>
              <li>Support/contact data is used solely to respond to your inquiries and improve our service.</li>
              <li>We do not use your data for advertising or marketing purposes.</li>
            </ul>
          </section>
          <section id="cookies" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-cookie-bite text-accent me-2"></i>Cookies & Tracking</h2>
            <ul>
              <li>We do not use cookies or third-party trackers in the extension.</li>
              <li>Our website may use cookies for basic functionality, but not for tracking or advertising.</li>
            </ul>
          </section>
          <section id="security" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-lock text-accent me-2"></i>Data Security</h2>
            <p>We use industry-standard security measures to protect any information you provide. All extension data is processed locally and never transmitted to our servers.</p>
          </section>
          <section id="rights" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-user-check text-accent me-2"></i>Your Rights</h2>
            <ul>
              <li>You may request access to, correction, or deletion of any support or contact data we hold about you by emailing <a href="mailto:colourchemist@gmail.com">colourchemist@gmail.com</a>.</li>
              <li>We will respond to all requests within a reasonable timeframe.</li>
            </ul>
          </section>
          <section id="children" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-child text-accent me-2"></i>Children's Privacy</h2>
            <p>Smart Tab Organiser is not intended for children under 13. We do not knowingly collect personal information from children.</p>
          </section>
          <section id="changes" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-arrows-rotate text-accent me-2"></i>Changes to Policy</h2>
            <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated date.</p>
          </section>
          <section id="contact" class="mb-2">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-envelope text-accent me-2"></i>Contact</h2>
            <p>If you have any questions or concerns about this Privacy Policy or your data, please contact us:</p>
            <ul>
              <li>Email: <a href="mailto:colourchemist@gmail.com">colourchemist@gmail.com</a></li>
              <li>Phone: <a href="tel:988414512121">988414512121</a></li>
            </ul>
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