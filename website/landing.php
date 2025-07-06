<?php
$page_title = "Smart Tab Organiser – Turn Tab Chaos into Clarity";
$page_description = "The simple, private, and powerful Chrome extension to group, analyze, and master your browser tabs. Get started for free.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/landing.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="robots" content="index, follow">
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
  <link rel="stylesheet" href="components/navbar-footer.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Animation Libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <style>/* ...existing styles... */</style>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": <?php echo json_encode($page_title); ?>,
    "url": <?php echo json_encode($canonical_url); ?>,
    "publisher": {
      "@type": "Organization",
      "name": "Smart Tab Organiser",
      "logo": {
        "@type": "ImageObject",
        "url": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png"
      }
    }
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
</head>
<body>
<?php include 'components/navbar.php'; ?>
<?php include 'components/hero-section.php'; ?>
<!-- Trust Bar (polished) -->
<section class="trust-bar polished-section">
  <div class="container trust-bar__container">
    <span class="trust-users"><strong>Trusted by 10,000+ users</strong></span>
    <img src="assets/chrome-web-store-badge.png" alt="Chrome Web Store badge" class="trust-badge" loading="lazy" />
    <span class="trust-partners">| <span class="trust-partner-logos">[Partner Logo 1] [Partner Logo 2]</span></span>
  </div>
</section>
<!-- Unified Features/Benefits (polished) -->
<section class="features polished-section alt-bg">
  <div class="feature-card">
    <span class="badge badge-accent">New!</span>
    <h3><i class="fa-solid fa-star text-accent me-2"></i>Standard Sites</h3>
    <p>Save your most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and skip repetitive steps for maximum productivity.</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-folder-tree text-accent" aria-hidden="true"></i></span>
    <h3 style="font-family: 'Poppins', 'Inter', sans-serif;">Group by Topic</h3>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">Instantly group tabs by topic, project, or website</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-floppy-disk text-primary" aria-hidden="true"></i></span>
    <h3 style="font-family: 'Poppins', 'Inter', sans-serif;">Save Sessions</h3>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">Save and restore sessions with a single click</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-chart-bar text-secondary" aria-hidden="true"></i></span>
    <h3 style="font-family: 'Poppins', 'Inter', sans-serif;">Visualize Usage</h3>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">Visualize your browsing habits and boost focus</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-shield-halved text-accent" aria-hidden="true"></i></span>
    <h3 style="font-family: 'Poppins', 'Inter', sans-serif;">100% Private</h3>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">All analysis is local—your data never leaves your browser</p>
  </div>
</section>
<!-- Social Proof Section (polished) -->
<section class="section alt-bg">
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <h3>10,000+</h3>
      <p>Happy Users</p>
    </div>
    <div class="feature-card">
      <h3>4.8 Stars</h3>
      <p>Average Rating</p>
    </div>
    <div class="feature-card">
      <h3>15,000+</h3>
      <p>Active Installs</p>
    </div>
  </div>
</section>
<!-- Testimonials Section (polished) -->
<section class="section">
  <h2 class="text-center fw-bold mb-4">What Our Users Are Saying</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <p>"This extension is a game-changer! I can finally keep my research tabs organized without losing focus. The AI grouping is pure magic."</p>
      <div class="testimonial-author"><strong>- Alex R.</strong>, Researcher</div>
    </div>
    <div class="feature-card">
      <p>"As a developer, I have dozens of tabs open at all times. Smart Tab Organiser is the first tool that has actually tamed the chaos. Highly recommend!"</p>
      <div class="testimonial-author"><strong>- Priya S.</strong>, Developer</div>
    </div>
  </div>
</section>
<!-- FAQ Section (polished) -->
<section class="section alt-bg">
  <h2 class="text-center fw-bold mb-4">Frequently Asked Questions</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <h4>Is my browsing data safe?</h4>
      <p><strong>Absolutely.</strong> All processing happens locally on your computer. Your tab data never leaves your browser, ensuring 100% privacy.</p>
    </div>
    <div class="feature-card">
      <h4>Does this extension work on other browsers?</h4>
      <p>Yes, Smart Tab Organiser works on all Chromium-based browsers, including Google Chrome, Microsoft Edge, and Brave.</p>
    </div>
    <div class="feature-card">
      <h4>What is Standard Sites and how do I use it?</h4>
      <p><strong>Standard Sites</strong> lets you save your most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and boost your productivity by skipping repetitive steps.</p>
    </div>
  </div>
</section>
<!-- Secondary CTA Block -->
<section class="cta-section animated-cta">
  <a href="#" class="btn btn-primary">Get Started Free</a>
</section>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
  <script>/* ...existing scripts... */</script>
</body>
</html> 