<?php
$page_title = "Features – Smart Tab Organiser";
$page_description = "Explore all the features of Smart Tab Organiser. See how AI-powered grouping, session restore, and tab analytics can boost your productivity.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/features.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Features – Smart Tab Organiser
    Purpose: Showcase all features of the extension
    Head Section: Contains SEO meta tags, social sharing tags, canonical URL, stylesheets, scripts, and structured data for this page.
    Structure:
      - Basic meta tags (charset, viewport, title, description, robots)
      - Canonical URL for SEO
      - Open Graph (OG) tags for social sharing
      - Twitter Card tags for Twitter sharing
      - CSS stylesheets (main, fonts, Bootstrap)
      - Structured data (JSON-LD for SoftwareApplication, FAQPage)
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
  <!-- Structured Data: SoftwareApplication & FAQPage Schema for SEO -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Smart Tab Organiser",
      "operatingSystem": "Chrome OS, Windows, macOS, Linux",
      "applicationCategory": "BrowserExtension",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "ratingCount": "120" 
      },
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
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
          "name": "How does tab grouping work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We use NLP and AI to analyze your tab titles and content, grouping them by topic or project."
          }
        },
        {
          "@type": "Question",
          "name": "Is my data private?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, all analysis is local. Nothing leaves your browser."
          }
        },
        {
          "@type": "Question",
          "name": "Can I undo actions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, you can undo/redo tab actions instantly."
          }
        },
        {
          "@type": "Question",
          "name": "What is Standard Sites and how does it work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard Sites lets you save your favorite or most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and launch your daily workflow instantly."
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
  <!-- Custom Styles for Features Page -->
  <style>
    body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); }
    .feature-icon { font-size: 2rem; margin-bottom: 0.5rem; }
    .feature-card { border-radius: 18px; box-shadow: 0 2px 12px rgba(37,99,235,0.07); background: #fff; transition: transform 0.2s, box-shadow 0.2s; }
    .feature-card:hover { transform: translateY(-8px) scale(1.04) rotate(-1deg); box-shadow: 0 8px 32px rgba(37,99,235,0.13); }
    .persona-card { background: rgba(245,158,66,0.12); border-radius: 16px; box-shadow: 0 2px 12px rgba(245,158,66,0.07); transition: transform 0.2s, box-shadow 0.2s; }
    .persona-card:hover { transform: scale(1.05) rotate(1deg); box-shadow: 0 8px 32px rgba(245,158,66,0.13); }
    .demo-video video { border-radius: 18px; box-shadow: 0 4px 24px rgba(37,99,235,0.13); max-width: 100%; }
    .cta-section { background: linear-gradient(90deg, #f59e42 0%, #10b981 100%); color: #fff; border-radius: 18px; margin: 2rem auto; max-width: 600px; text-align: center; padding: 2rem 1rem; box-shadow: 0 4px 24px rgba(245,158,66,0.13); }
    .comparison-table table { background: #fff; border-radius: 16px; box-shadow: 0 2px 12px rgba(37,99,235,0.07); overflow-x: auto; }
    .faq-section details { margin: 1rem 0; background: #fff; border-radius: 12px; padding: 1rem; box-shadow: 0 2px 12px rgba(37,99,235,0.07); }
    .faq-section details[open] { box-shadow: 0 8px 32px rgba(16,185,129,0.13); }
  </style>
</head>
<body>
<?php include 'components/navbar.php'; ?>
<header class="section alt-bg" style="background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);">
  <div style="max-width: 900px; margin: 0 auto;">
    <h1 class="fw-bold mb-2">How Smart Tab Organiser Works</h1>
    <p class="lead">Your browser, your rules. Organize, analyze, and master your tabs with a single click.</p>
  </div>
</header>
<section class="features" style="max-width: 1200px; margin: 0 auto 2rem auto;">
  <div class="feature-card">
    <span class="badge badge-accent">New!</span>
    <h3><i class="fa-solid fa-star text-accent me-2"></i>Standard Sites</h3>
    <p>Save your most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and boost your productivity by skipping repetitive steps.</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-brain text-accent"></i></span>
    <h3>AI-powered tab grouping</h3>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-bookmark text-primary"></i></span>
    <h3>Save/restore sessions</h3>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-chart-bar text-secondary"></i></span>
    <h3>Tab analytics dashboard</h3>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-lock text-accent"></i></span>
    <h3>100% local privacy</h3>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-bolt text-primary"></i></span>
    <h3>One-click cleanup</h3>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-arrows-rotate text-secondary"></i></span>
    <h3>Undo/redo tab actions</h3>
  </div>
</section>
<section class="demo-video text-center alt-bg" style="padding: 2.5rem 0;">
  <h2 class="fw-semibold mb-3">See It In Action</h2>
  <div style="max-width: 600px; margin: 0 auto;">
    <video controls poster="assets/demo-thumb.png" aria-label="Demo video of Smart Tab Organiser" style="border-radius: 18px; box-shadow: 0 4px 24px rgba(37,99,235,0.13); width: 100%;">
      <source src="assets/demo.mp4" type="video/mp4">
      <div class="alert alert-warning mt-3">No video with supported format and MIME type found. Please try a different browser or device.</div>
    </video>
  </div>
</section>
<section class="section" style="background: linear-gradient(90deg, #f8fafc 0%, #e0e7ff 100%);">
  <h2 class="fw-semibold mb-3 text-center">Who Is It For?</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <strong>Power User:</strong> Juggles 30+ tabs daily, needs instant grouping and session restore.
    </div>
    <div class="feature-card">
      <strong>Researcher:</strong> Gathers info from many sources, loves analytics and topic grouping.
    </div>
    <div class="feature-card">
      <strong>Minimalist:</strong> Wants a clean browser, uses one-click cleanup and privacy features.
    </div>
  </div>
</section>
<section class="comparison-table alt-bg" style="padding: 2.5rem 0;">
  <h2 class="fw-semibold mb-3 text-center">How We Compare</h2>
  <div class="table-responsive" style="max-width: 900px; margin: 0 auto;">
    <table class="table table-bordered align-middle" style="background: #fff; border-radius: 16px; box-shadow: 0 2px 12px rgba(37,99,235,0.07); overflow: hidden;">
      <thead class="table-light">
        <tr><th>Feature</th><th>Smart Tab Organiser</th><th>Competitor A</th><th>Competitor B</th></tr>
      </thead>
      <tbody>
        <tr><td>AI Grouping</td><td><i class="fa-solid fa-check text-success"></i></td><td><i class="fa-solid fa-xmark text-danger"></i></td><td><i class="fa-solid fa-xmark text-danger"></i></td></tr>
        <tr><td>Session Restore</td><td><i class="fa-solid fa-check text-success"></i></td><td><i class="fa-solid fa-check text-success"></i></td><td><i class="fa-solid fa-check text-success"></i></td></tr>
        <tr><td>Analytics</td><td><i class="fa-solid fa-check text-success"></i></td><td><i class="fa-solid fa-xmark text-danger"></i></td><td><i class="fa-solid fa-xmark text-danger"></i></td></tr>
        <tr><td>Privacy</td><td>✔️ (Local)</td><td><i class="fa-solid fa-xmark text-danger"></i></td><td><i class="fa-solid fa-xmark text-danger"></i></td></tr>
        <tr><td>Undo/Redo</td><td><i class="fa-solid fa-check text-success"></i></td><td><i class="fa-solid fa-xmark text-danger"></i></td><td><i class="fa-solid fa-xmark text-danger"></i></td></tr>
      </tbody>
    </table>
  </div>
</section>
<section class="section" style="background: linear-gradient(90deg, #e0e7ff 0%, #f8fafc 100%);">
  <h2 class="text-center fw-bold mb-4">What Our Users Are Saying</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <p>"The AI grouping is shockingly accurate. It sorted my messy research tabs into perfect categories, saving me at least an hour a week. It's an essential tool for any serious researcher."</p>
      <div class="testimonial-author"><strong>- Dr. Eleanor Vance</strong>, Academic Researcher</div>
    </div>
  </div>
</section>
<section class="section alt-bg" style="padding: 2.5rem 0;">
  <h2 class="text-center fw-bold mb-4">Frequently Asked Questions</h2>
  <div style="max-width: 900px; margin: 0 auto;">
    <details class="faq-item mb-3">
      <summary><strong>Is there a free plan?</strong></summary>
      <div>Yes, you can use the basic features for free, forever.</div>
    </details>
    <details class="faq-item mb-3">
      <summary><strong>Can I cancel anytime?</strong></summary>
      <div>Yes, you can cancel or switch plans at any time.</div>
    </details>
    <details class="faq-item mb-3">
      <summary><strong>Do you offer team discounts?</strong></summary>
      <div>Yes, contact us for custom team pricing.</div>
    </details>
    <details class="faq-item mb-3">
      <summary><strong>How does the free trial work?</strong></summary>
      <div>Try Pro free for 7 days, no credit card required.</div>
    </details>
    <details class="faq-item mb-3">
      <summary><strong>What payment methods are accepted?</strong></summary>
      <div>All major cards, PayPal, and Google Pay.</div>
    </details>
  </div>
</section>
<section class="cta-section animated-cta" style="margin: 2.5rem auto; max-width: 600px;">
  <a href="download.php" class="btn btn-primary btn-lg" style="font-size:1.3rem; padding: 0.9rem 2.5rem; border-radius: 12px;">Start Free Trial</a>
</section>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script>
  // GSAP entrance animations
  gsap.from('.feature-card', { opacity: 0, y: 40, stagger: 0.12, duration: 1, ease: 'power2.out', delay: 0.2 });
  gsap.from('.demo-video', { opacity: 0, y: 30, duration: 1, delay: 0.7, ease: 'power2.out' });
  gsap.from('.cta-section', { opacity: 0, scale: 0.95, duration: 1, delay: 1.2, ease: 'back.out(1.7)' });
  // Micro-interactions
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      anime({ targets: card, scale: 1.08, duration: 200, easing: 'easeOutQuad' });
    });
    card.addEventListener('mouseleave', () => {
      anime({ targets: card, scale: 1, duration: 200, easing: 'easeOutQuad' });
    });
  });
</script>
</body>
</html> 