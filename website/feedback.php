<?php include 'components/navbar.php'; ?>
<?php
$page_title = "Submit Feedback – Smart Tab Organiser";
$page_description = "Have feedback or a suggestion? We'd love to hear from you. Help us improve Smart Tab Organiser.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/feedback.php";
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
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
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
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card sto-card shadow-lg border-0 p-4 p-md-5 animate__animated animate__fadeInUp">
            <div class="text-center mb-4">
              <i class="fa-solid fa-comments fa-3x text-primary"></i>
              <h1 class="display-5 fw-bold mt-3">Submit Your Feedback</h1>
              <p class="lead text-muted">
                We value your input! Whether it's a bug report, a suggestion, or a compliment, your feedback helps us make Smart Tab Organiser better for everyone.
              </p>
            </div>
            
            <form id="feedbackForm" action="scripts/handle_feedback.php" method="POST" novalidate>
              <div class="mb-4">
                <label for="feedbackType" class="form-label fw-semibold"><i class="fa-solid fa-tag me-2 text-primary"></i>Type of Feedback</label>
                <select class="form-select form-select-lg" id="feedbackType" name="feedback_type" required aria-required="true">
                  <option selected disabled value="">Choose...</option>
                  <option value="bug">Bug Report</option>
                  <option value="suggestion">Suggestion</option>
                  <option value="compliment">Compliment</option>
                  <option value="other">Other</option>
                </select>
                <div class="invalid-feedback">Please select a feedback type.</div>
              </div>
              <div class="mb-4">
                <label for="feedbackMessage" class="form-label fw-semibold"><i class="fa-solid fa-pen-to-square me-2 text-primary"></i>Message</label>
                <textarea class="form-control form-control-lg" id="feedbackMessage" name="feedback_message" rows="5" required aria-required="true"></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
              </div>
              <div class="mb-4">
                <label for="userEmail" class="form-label fw-semibold"><i class="fa-solid fa-at me-2 text-primary"></i>Your Email (Optional)</label>
                <input type="email" class="form-control form-control-lg" id="userEmail" name="user_email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text mt-1">We'll only use this to follow up on your feedback if needed.</div>
              </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn sto-btn sto-btn--primary btn-lg w-100 py-2 fs-5">
                  <i class="fa-solid fa-paper-plane me-2"></i>Submit Feedback
                </button>
              </div>
            </form>
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
      const form = document.getElementById('feedbackForm');
      if (form) {
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