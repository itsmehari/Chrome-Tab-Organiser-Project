<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Request a Feature – Smart Tab Organiser";
$page_description = "Have a great idea for a new feature? Let us know how we can make Smart Tab Organiser even better.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/feature-request.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Feature Request – Smart Tab Organiser
    Purpose: Allow users to submit new feature ideas
    Head Section: Contains SEO meta tags, canonical URL, stylesheets, and scripts for this page.
    Structure:
      - Basic meta tags (charset, viewport, title, description, robots)
      - Canonical URL for SEO
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
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
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
    "@type": "ContactPage",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>
  }
  </script>
</head>
<body>
  <section class="sto-section-bg py-5">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="card sto-card shadow-lg border-0 p-4 p-md-5 text-center animate__animated animate__fadeInUp">
            <div class="mb-4">
              <i class="fa-solid fa-lightbulb fa-4x text-primary"></i>
            </div>
            <h1 class="display-5 fw-bold mb-3">Have an Idea for a New Feature?</h1>
            <p class="lead text-muted mb-4">
              We build Smart Tab Organiser for you, and the best ideas come from our users. If you have a suggestion for a new feature or an improvement, we want to hear it! Your feedback directly shapes the future of our extension.
            </p>
            <hr class="my-4" style="width: 50%; margin-left: auto; margin-right: auto;">
            
            <div class="text-start">
                <h2 class="h4 fw-semibold mb-3 text-center">How to Submit Your Idea</h2>
                <ul class="list-unstyled d-flex flex-column flex-md-row justify-content-center gap-3 text-center">
                    <li class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-accent me-2"></i> Click the button below.</li>
                    <li class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-accent me-2"></i> Select "Suggestion" as the type.</li>
                    <li class="d-flex align-items-center"><i class="fa-solid fa-check-circle text-accent me-2"></i> Describe your brilliant idea!</li>
                </ul>
            </div>

            <div class="mt-4">
              <a href="feedback.php" class="btn sto-btn sto-btn--primary btn-lg mt-3 animate__animated animate__pulse animate__infinite">
                <i class="fa-solid fa-paper-plane me-2"></i> Go to Feedback Form
              </a>
            </div>

            <div class="mt-5 p-3 bg-light rounded border">
                <h3 class="h6 fw-semibold"><i class="fa-solid fa-cogs text-secondary me-2"></i>What We're Working On</h3>
                <p class="mb-0 text-muted small">We're currently exploring AI-powered grouping and cross-device sync based on user suggestions!</p>
            </div>
          </div>
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