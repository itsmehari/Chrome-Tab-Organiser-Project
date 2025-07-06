<?php
$page_title = "Compare Features & Pricing – Smart Tab Organiser";
$page_description = "Compare features and see our simple, flexible pricing for monthly or one-time purchase.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/compare-features.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Compare Features & Pricing – Smart Tab Organiser
    Purpose: Show feature comparison and pricing plans
    Head Section: Contains SEO meta tags, social sharing tags, canonical URL, stylesheets, scripts, and structured data for this page.
    Structure:
      - Basic meta tags (charset, viewport, title, description, robots)
      - Canonical URL for SEO
      - Open Graph (OG) tags for social sharing
      - Twitter Card tags for Twitter sharing
      - CSS stylesheets (main, fonts, Bootstrap)
      - Structured data (JSON-LD for FAQPage)
      - Custom styles
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
  <!-- CSS Stylesheets: Main, Fonts, Bootstrap -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Structured Data: FAQPage Schema for SEO -->
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
        }
      ]
    }
  </script>
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
    }
  }
  </script>
  <style>
    body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); }
    .maxw-900 { max-width: 900px; margin: 0 auto; }
    .maxw-1100 { max-width: 1100px; margin: 0 auto; }
    .marketing-lead { font-size: 1.25rem; font-weight: 500; color: #2563eb; margin-bottom: 1.5rem; }
    .section-title { font-weight: 700; margin-bottom: 1.5rem; font-size: 2rem; }
    .card + .card { margin-top: 2rem; }
    .feature-list li { font-size: 1.08rem; margin-bottom: 0.5rem; }
    .feature-list i { margin-right: 0.5rem; }
    .testimonial-card { background: linear-gradient(90deg, #f59e42 0%, #10b981 100%); color: #fff; border-radius: 18px; margin: 2rem auto; max-width: 700px; text-align: center; padding: 2rem 1rem; box-shadow: 0 4px 24px rgba(245,158,66,0.13); }
    .faq-card { background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(37,99,235,0.07); margin-bottom: 1.2rem; }
    .faq-card h4 { color: #2563eb; font-weight: 600; }
    .cta-section { background: linear-gradient(90deg, #f59e42 0%, #10b981 100%); color: #fff; border-radius: 18px; margin: 2rem auto; max-width: 600px; text-align: center; padding: 2rem 1rem; box-shadow: 0 4px 24px rgba(245,158,66,0.13); }
    .table-responsive { border-radius: 16px; overflow: hidden; }
    .table { background: #fff; }
    @media (max-width: 900px) { .maxw-900, .maxw-1100 { max-width: 98vw; } }
  </style>
</head>
<body>
<?php include 'components/navbar.php'; ?>
<div class="container maxw-1100 py-5">
  <div class="card p-4 mb-4">
    <h1 class="section-title text-center"><i class="fa-solid fa-table-list me-2 text-primary"></i>Compare Features & Plans</h1>
    <p class="marketing-lead text-center">See how Smart Tab Organiser stacks up against the competition. Choose the plan that fits your workflow and budget.</p>
  </div>
  <div class="card p-4 mb-4">
    <h2 class="fw-semibold mb-3 text-center">Compare Plans</h2>
    <div class="table-responsive">
      <table class="table table-bordered align-middle mb-0">
        <thead class="table-light">
          <tr><th>Feature</th><th>Free</th><th>Pro</th><th>Team</th></tr>
        </thead>
        <tbody>
          <tr><td>Tab Grouping</td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td></tr>
          <tr><td>AI Grouping</td><td><i class="fa-solid fa-xmark text-danger" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td></tr>
          <tr><td>Analytics</td><td><i class="fa-solid fa-xmark text-danger" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td></tr>
          <tr><td>Undo/Redo</td><td><i class="fa-solid fa-xmark text-danger" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td></tr>
          <tr><td>Team Sharing</td><td><i class="fa-solid fa-xmark text-danger" aria-hidden="true"></i></td><td><i class="fa-solid fa-xmark text-danger" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td></tr>
          <tr><td>Priority Support</td><td><i class="fa-solid fa-xmark text-danger" aria-hidden="true"></i></td><td><i class="fa-solid fa-xmark text-danger" aria-hidden="true"></i></td><td><i class="fa-solid fa-check text-success" aria-hidden="true"></i></td></tr>
        </tbody>
      </table>
    </div>
    <div class="text-center mt-3">
      <a href="pricing.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-tags me-1"></i> See Pricing</a>
    </div>
  </div>
  <div class="row g-4 mb-4">
    <div class="col-md-4">
      <div class="card h-100 p-4">
        <h3 class="fw-bold text-success mb-2"><i class="fa-solid fa-bolt me-1"></i> Why Choose Us?</h3>
        <ul class="feature-list">
          <li><i class="fa-solid fa-check-circle text-accent"></i> AI-powered tab grouping</li>
          <li><i class="fa-solid fa-check-circle text-accent"></i> 100% local privacy</li>
          <li><i class="fa-solid fa-check-circle text-accent"></i> Save/restore sessions</li>
          <li><i class="fa-solid fa-check-circle text-accent"></i> Analytics dashboard</li>
          <li><i class="fa-solid fa-check-circle text-accent"></i> Undo/redo tab actions</li>
        </ul>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card h-100 p-4 d-flex flex-column justify-content-center">
        <h3 class="fw-bold mb-2 text-primary"><i class="fa-solid fa-star me-1"></i> What Makes Us Different?</h3>
        <p class="mb-2" style="font-size:1.13rem;">Smart Tab Organiser is designed for power users, researchers, and anyone who wants to master their browser. Our AI engine groups tabs by topic, keeps your data private, and helps you focus on what matters.</p>
        <ul class="feature-list">
          <li><i class="fa-solid fa-lightbulb text-warning"></i> No signup required – get started instantly</li>
          <li><i class="fa-solid fa-lock text-primary"></i> All analysis is local – your data never leaves your browser</li>
          <li><i class="fa-solid fa-rocket text-accent"></i> Trusted by 10,000+ users worldwide</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="testimonial-card">
    <span class="icon"><i class="fa-solid fa-comment-dots fa-2x" aria-hidden="true"></i></span>
    <p class="fs-5 mb-2">“I finally feel in control of my browser. The AI grouping is a game changer!”</p>
    <div class="testimonial-author fw-semibold">– Priya S.</div>
  </div>
  <div class="testimonial-card">
    <span class="icon"><i class="fa-solid fa-lightbulb fa-2x" aria-hidden="true"></i></span>
    <p class="fs-5 mb-2">“Our team saves hours every week. Love the privacy-first approach.”</p>
    <div class="testimonial-author fw-semibold">– Alex R.</div>
  </div>
  <div class="card p-4 mb-4">
    <h2 class="text-center fw-bold mb-4">Pricing & Billing FAQs</h2>
    <div class="row g-3 justify-content-center">
      <div class="col-md-6">
        <div class="faq-card p-3">
          <h4><i class="fa-solid fa-circle-question text-accent me-1"></i> Is there a free plan?</h4>
          <p>Yes, you can use the basic features for free, forever.</p>
        </div>
        <div class="faq-card p-3">
          <h4><i class="fa-solid fa-arrows-rotate text-primary me-1"></i> Can I cancel anytime?</h4>
          <p>Yes, you can cancel or switch plans at any time.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="faq-card p-3">
          <h4><i class="fa-solid fa-users text-secondary me-1"></i> Do you offer team discounts?</h4>
          <p>Yes, contact us for custom team pricing.</p>
        </div>
        <div class="faq-card p-3">
          <h4><i class="fa-solid fa-badge text-accent me-1"></i> How does the free trial work?</h4>
          <p>Try Pro free for 7 days, no credit card required.</p>
        </div>
        <div class="faq-card p-3">
          <h4><i class="fa-solid fa-credit-card text-primary me-1"></i> What payment methods are accepted?</h4>
          <p>All major cards, PayPal, and Google Pay.</p>
        </div>
      </div>
    </div>
  </div>
  <section class="cta-section animated-cta">
    <a href="download.php" class="btn btn-primary btn-lg" style="font-size:1.3rem; padding: 0.9rem 2.5rem; border-radius: 12px;"><i class="fa-solid fa-play-circle me-1" aria-hidden="true"></i>Start Free Trial</a>
  </section>
</div>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</body>
</html> 