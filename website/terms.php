<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Terms of Service – Smart Tab Organiser";
$page_description = "Terms of Service for the Smart Tab Organiser Chrome Extension and website.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/terms.php";
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
    "about": "TermsOfService"
  }
  </script>
</head>
<body class="sto-section-bg">
  <section class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card sto-card shadow-lg border-0 p-4 animate__animated animate__fadeInUp">
          <div class="text-center mb-4">
            <i class="fa-solid fa-shield-halved fa-3x text-primary mb-2"></i>
            <h1 class="display-5 fw-bold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;">Terms of Service</h1>
            <div class="text-muted mb-3" style="font-family: 'Lato', 'Inter', sans-serif;">Please read these terms carefully before using Smart Tab Organiser.</div>
          </div>
          <nav class="toc-nav mb-4 p-3 bg-light rounded border" aria-label="Table of Contents">
            <h2 class="h6 fw-semibold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-list-ul text-secondary me-2"></i>Contents</h2>
            <ul class="row row-cols-2 row-cols-md-3 g-2">
              <li class="col"><a href="#acceptance"><i class="fa-solid fa-circle-check text-accent me-1"></i>Acceptance of Terms</a></li>
              <li class="col"><a href="#service"><i class="fa-solid fa-cube text-accent me-1"></i>Description of Service</a></li>
              <li class="col"><a href="#responsibilities"><i class="fa-solid fa-user-shield text-accent me-1"></i>User Responsibilities</a></li>
              <li class="col"><a href="#license"><i class="fa-solid fa-id-badge text-accent me-1"></i>License Grant</a></li>
              <li class="col"><a href="#ip"><i class="fa-solid fa-copyright text-accent me-1"></i>Intellectual Property</a></li>
              <li class="col"><a href="#restrictions"><i class="fa-solid fa-ban text-accent me-1"></i>Restrictions</a></li>
              <li class="col"><a href="#disclaimer"><i class="fa-solid fa-triangle-exclamation text-accent me-1"></i>Disclaimer</a></li>
              <li class="col"><a href="#liability"><i class="fa-solid fa-scale-balanced text-accent me-1"></i>Liability</a></li>
              <li class="col"><a href="#indemnification"><i class="fa-solid fa-handshake-angle text-accent me-1"></i>Indemnification</a></li>
              <li class="col"><a href="#termination"><i class="fa-solid fa-door-closed text-accent me-1"></i>Termination</a></li>
              <li class="col"><a href="#changes"><i class="fa-solid fa-arrows-rotate text-accent me-1"></i>Changes</a></li>
              <li class="col"><a href="#law"><i class="fa-solid fa-gavel text-accent me-1"></i>Governing Law</a></li>
              <li class="col"><a href="#contact"><i class="fa-solid fa-envelope text-accent me-1"></i>Contact</a></li>
            </ul>
          </nav>
          <section id="acceptance" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-circle-check text-accent me-2"></i>Acceptance of Terms</h2>
            <p>By installing or using Smart Tab Organiser ("the Extension"), you agree to these Terms of Service. If you do not agree, please do not use the Extension.</p>
          </section>
          <section id="service" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-cube text-accent me-2"></i>Description of Service</h2>
            <p>Smart Tab Organiser is a Chrome extension that helps users manage, group, and analyze browser tabs for productivity. <strong>Core features include Standard Sites (save and open your favorite websites in one click), tab grouping, and session management.</strong> The Extension is provided as-is and may be updated or discontinued at any time.</p>
          </section>
          <section id="responsibilities" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-user-shield text-accent me-2"></i>User Responsibilities</h2>
            <ul>
              <li>You agree to use the Extension in compliance with all applicable laws and regulations.</li>
              <li>You will not misuse, reverse engineer, or attempt to gain unauthorized access to the Extension or its code.</li>
              <li>You are responsible for maintaining the security of your browser and device.</li>
            </ul>
          </section>
          <section id="license" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-id-badge text-accent me-2"></i>License Grant</h2>
            <p>You are granted a non-exclusive, non-transferable, revocable license to use the Extension for personal or business use, subject to these Terms.</p>
          </section>
          <section id="ip" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-copyright text-accent me-2"></i>Intellectual Property</h2>
            <p>All intellectual property rights in the Extension, including but not limited to code, design, and branding, remain the property of the developers.</p>
          </section>
          <section id="restrictions" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-ban text-accent me-2"></i>Restrictions</h2>
            <ul>
              <li>You may not copy, modify, distribute, sell, or lease any part of the Extension.</li>
              <li>You may not use the Extension for any unlawful or harmful purpose.</li>
            </ul>
          </section>
          <section id="disclaimer" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-triangle-exclamation text-accent me-2"></i>Disclaimer of Warranties</h2>
            <p>The Extension is provided "as is" without warranty of any kind. We do not guarantee that the Extension will be error-free or uninterrupted.</p>
          </section>
          <section id="liability" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-scale-balanced text-accent me-2"></i>Limitation of Liability</h2>
            <p>To the fullest extent permitted by law, we are not liable for any damages or data loss resulting from the use or inability to use the Extension.</p>
          </section>
          <section id="indemnification" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-handshake-angle text-accent me-2"></i>Indemnification</h2>
            <p>You agree to indemnify and hold harmless the developers from any claims, damages, or expenses arising from your use of the Extension or violation of these Terms.</p>
          </section>
          <section id="termination" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-door-closed text-accent me-2"></i>Termination</h2>
            <p>We may terminate or suspend your access to the Extension at any time, with or without notice, for any reason.</p>
          </section>
          <section id="changes" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-arrows-rotate text-accent me-2"></i>Changes to Terms</h2>
            <p>We may update these Terms of Service from time to time. Changes will be posted on this page with an updated date.</p>
          </section>
          <section id="law" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-gavel text-accent me-2"></i>Governing Law</h2>
            <p>These Terms are governed by the laws of India, without regard to its conflict of law principles.</p>
          </section>
          <section id="contact" class="mb-2">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-envelope text-accent me-2"></i>Contact</h2>
            <p>If you have any questions or concerns about these Terms, please contact us:</p>
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