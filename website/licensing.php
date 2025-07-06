<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Licensing – Smart Tab Organiser";
$page_description = "Licensing information for the Smart Tab Organiser Chrome Extension.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/licensing.php";
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
            <i class="fa-solid fa-certificate fa-3x text-primary mb-2"></i>
            <h1 class="display-5 fw-bold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;">Licensing</h1>
            <div class="text-muted mb-3" style="font-family: 'Lato', 'Inter', sans-serif;">Understand your rights and responsibilities when using Smart Tab Organiser.</div>
          </div>
          <nav class="toc-nav mb-4 p-3 bg-light rounded border" aria-label="Table of Contents">
            <h2 class="h6 fw-semibold mb-2" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-list-ul text-secondary me-2"></i>Contents</h2>
            <ul class="row row-cols-2 g-2">
              <li class="col"><a href="#scope"><i class="fa-solid fa-scroll text-accent me-1"></i>Scope of License</a></li>
              <li class="col"><a href="#restrictions"><i class="fa-solid fa-ban text-accent me-1"></i>Restrictions</a></li>
              <li class="col"><a href="#termination"><i class="fa-solid fa-door-closed text-accent me-1"></i>Termination</a></li>
              <li class="col"><a href="#contact"><i class="fa-solid fa-envelope text-accent me-1"></i>Contact</a></li>
            </ul>
          </nav>
          <section id="scope" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-scroll text-accent me-2"></i>Scope of License</h2>
            <p>You are granted a non-exclusive, non-transferable license to use Smart Tab Organiser for personal or business use, subject to these terms.</p>
          </section>
          <section id="restrictions" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-ban text-accent me-2"></i>Restrictions</h2>
            <p>You may not redistribute, resell, or modify the extension for commercial purposes without written permission.</p>
          </section>
          <section id="termination" class="mb-4">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-door-closed text-accent me-2"></i>Termination</h2>
            <p>This license is terminated if you violate these terms or misuse the product.</p>
          </section>
          <section id="contact" class="mb-2">
            <h2 class="h5 fw-bold" style="font-family: 'Poppins', 'Inter', sans-serif;"><i class="fa-solid fa-envelope text-accent me-2"></i>Contact</h2>
            <p>Email: <a href="mailto:legal@smarttaborganiser.com">legal@smarttaborganiser.com</a></p>
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