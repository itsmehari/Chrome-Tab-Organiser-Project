<?php
$page_title = "Smart Tab Organiser – Tame Your Tabs, Unleash Your Productivity";
$page_description = "The Chrome extension that turns tab chaos into clarity. Group, analyze, and master your browser with one click. 100% local, 100% private.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/index.php";

// Article Data for the blog section
$articles = [
    [
        'title' => 'How to Group Browser Tabs Like a Pro',
        'description' => 'Stop drowning in tabs. Learn the art of intelligent tab grouping to boost focus and reclaim your sanity.',
        'link' => 'blog/how-to-group-tabs-smartly.php',
        'icon' => 'fa-solid fa-layer-group'
    ],
    [
        'title' => 'Mastering Browser Sessions',
        'description' => 'A deep dive into saving, restoring, and managing your digital workspace for maximum efficiency.',
        'link' => 'blog/mastering-browser-sessions.php',
        'icon' => 'fa-solid fa-floppy-disk'
    ],
    [
        'title' => 'The Digital Declutter: A 5-Step Method',
        'description' => 'Follow this actionable guide to declutter your browser and create a zen-like, productive workspace.',
        'link' => 'blog/digital-declutter-browser-cleanup.php',
        'icon' => 'fa-solid fa-broom'
    ]
];
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
  <!--
    To apply these styles and assets to blog.php and other pages:
    1. Copy the below <link> and <style> block into the <head> of each page (e.g., blog.php, about.php, etc).
    2. Ensure all referenced assets exist in the correct paths.
    3. For maintainability, consider moving the <style> block to assets/css/main.css and only include the <link rel="stylesheet" href="assets/css/main.css"> in each page.
  -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); min-height: 100vh; overflow-x: hidden; }
    .sto-section-bg { background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); }
    .luxe-card { background: #fff; border-radius: 18px; box-shadow: 0 2px 12px rgba(37,99,235,0.07); padding: 2rem 1.5rem; margin-bottom: 2rem; }
    .luxe-card .icon, .luxe-card .benefit-icon { font-size: 2.2rem; border-radius: 50%; padding: 0.7rem; margin-bottom: 0.7rem; display: inline-flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(37,99,235,0.07); background: #f8fafc; }
    .luxe-card h3, .luxe-card h4 { font-weight: 600; color: #2563eb; }
    .luxe-card p { color: #334155; opacity: 0.92; }
    .alt-bg { background: linear-gradient(120deg, #f8fafc 60%, #e0e7ff 100%); border-radius: 24px; box-shadow: 0 2px 12px rgba(25,118,210,0.07); }
    .luxe-section { padding: 2.5rem 0 2rem 0; margin: 0 auto; max-width: 1200px; }
    .luxe-features, .luxe-benefits, .luxe-testimonials { display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; }
    .luxe-feature-card, .luxe-benefit-card, .luxe-testimonial-card { background: #fff; border-radius: 18px; box-shadow: 0 2px 12px rgba(25,118,210,0.07); padding: 2rem 1.5rem; min-width: 220px; max-width: 260px; flex: 1 1 220px; display: flex; flex-direction: column; align-items: center; transition: transform 0.25s, box-shadow 0.25s; position: relative; overflow: hidden; text-align: center; border: 1.5px solid #e0e7ff; }
    .luxe-feature-card:hover, .luxe-benefit-card:hover, .luxe-testimonial-card:hover { transform: translateY(-8px) scale(1.04) rotate(-1deg); box-shadow: 0 8px 32px rgba(25,118,210,0.13); border: 1.5px solid #1976D233; z-index: 2; }
    .luxe-cta { background: linear-gradient(90deg, #f59e42 0%, #10b981 100%); color: #fff; border-radius: 18px; margin: 2rem auto; max-width: 600px; text-align: center; padding: 2rem 1rem; box-shadow: 0 4px 24px rgba(245,158,66,0.13); }
    .luxe-cta .btn { background: #2563eb; color: #fff; border-radius: 32px; padding: 1rem 2.5rem; font-size: 1.125rem; font-weight: 600; box-shadow: 0 4px 16px rgba(37,99,235,0.12); transition: transform 0.2s, box-shadow 0.2s; }
    .luxe-cta .btn:hover, .luxe-cta .btn:focus { background: #10b981; color: #fff; transform: scale(1.05); box-shadow: 0 8px 32px rgba(16,185,129,0.18); outline: 2px solid #10b981; }
    .luxe-faq .accordion-button { font-weight: 600; color: #2563eb; }
    .luxe-faq .accordion-body { color: #334155; }
    .luxe-footer { background: #2563eb; color: #fff; border-radius: 24px 24px 0 0; margin-top: 3rem; box-shadow: 0 -2px 24px rgba(30,41,59,0.13); font-size: 1rem; }
    .luxe-footer a { color: #fff; opacity: 0.85; transition: color 0.2s, opacity 0.2s; }
    .luxe-footer a:hover, .luxe-footer a:focus { color: #10b981; opacity: 1; }
    @media (max-width: 900px) { .luxe-features, .luxe-benefits, .luxe-testimonials { gap: 1rem; } .luxe-feature-card, .luxe-benefit-card, .luxe-testimonial-card { min-width: 160px; max-width: 100vw; padding: 1.2rem 0.7rem; } }
    @media (max-width: 700px) { .luxe-section, .luxe-cta, .luxe-footer { border-radius: 0; max-width: 100vw; } .luxe-feature-card, .luxe-benefit-card, .luxe-testimonial-card { min-width: 90vw; } }
  </style>
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
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Is my browsing data safe?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "All analysis is local and private. Your data never leaves your browser."
        }
      },
      {
        "@type": "Question",
        "name": "How do I restore a session?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Click the 'Save Sessions' button, then select a session to restore from your saved list."
        }
      },
      {
        "@type": "Question",
        "name": "Can I group tabs by project?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes! Use the 'Group by Topic' feature to organize tabs by project, topic, or website."
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
</head>
<body class="sto-section-bg">
  
  <?php include 'components/navbar.php'; ?>
  
<?php include 'components/hero-section.php'; ?>
<?php include 'components/promo-banner.php'; ?><!-- Trust Bar -->
  <section class="luxe-section">
    <div class="luxe-card d-flex flex-wrap align-items-center justify-content-center gap-3 animate__animated animate__fadeInDown">
      <span class="fw-bold text-primary"><i class="fa-solid fa-users me-2"></i>Trusted by 10,000+ users</span>
      <img src="assets/chrome-web-store-badge.png" alt="Chrome Web Store badge" class="trust-badge" style="height:38px;" loading="lazy" />
      <span class="trust-partner-logos ms-2">[Partner Logo 1] [Partner Logo 2]</span>
    </div>
  </section>
  <!-- Features/Benefits -->
  <section class="luxe-section alt-bg">
    <div class="luxe-features">
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-1s">
        <span class="badge badge-accent">New!</span>
        <h3><i class="fa-solid fa-star text-accent me-2"></i>Standard Sites</h3>
        <p>Save your most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and skip repetitive steps for maximum productivity.</p>
      </div>
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-1s">
        <span class="icon text-primary"><i class="fa-solid fa-layer-group"></i></span>
        <h3>Group by Topic</h3>
        <p>Instantly group tabs by topic, project, or website</p>
      </div>
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-1s">
        <span class="icon text-primary"><i class="fa-solid fa-floppy-disk"></i></span>
        <h3>Save Sessions</h3>
        <p>Save and restore sessions with a single click</p>
      </div>
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-1s">
        <span class="icon text-primary"><i class="fa-solid fa-chart-pie"></i></span>
        <h3>Visualize Usage</h3>
        <p>Visualize your browsing habits and boost focus</p>
      </div>
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-1s">
        <span class="icon text-primary"><i class="fa-solid fa-shield-halved"></i></span>
        <h3>100% Private</h3>
        <p>All analysis is local—your data never leaves your browser</p>
      </div>
    </div>
  </section>
  <!-- Social Proof -->
  <section class="luxe-section">
    <div class="luxe-features justify-content-center">
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-2s">
        <h3>10,000+</h3>
        <p>Happy Users</p>
      </div>
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-2s">
        <h3>4.8 Stars</h3>
        <p>Average Rating</p>
      </div>
      <div class="luxe-feature-card animate__animated animate__fadeInUp animate__delay-2s">
        <h3>15,000+</h3>
        <p>Active Installs</p>
      </div>
    </div>
  </section>
  <!-- Testimonials -->
  <section class="luxe-section alt-bg">
    <h2 class="text-center fw-bold mb-4">What Our Users Are Saying</h2>
    <div class="luxe-testimonials justify-content-center">
      <div class="luxe-testimonial-card animate__animated animate__fadeInUp animate__delay-3s">
        <p>"This extension is a game-changer! I can finally keep my research tabs organized without losing focus. The AI grouping is pure magic."</p>
        <div class="testimonial-author"><strong>- Alex R.</strong>, Researcher</div>
      </div>
      <div class="luxe-testimonial-card animate__animated animate__fadeInUp animate__delay-3s">
        <p>"As a developer, I have dozens of tabs open at all times. Smart Tab Organiser is the first tool that has actually tamed the chaos. Highly recommend!"</p>
        <div class="testimonial-author"><strong>- Priya S.</strong>, Developer</div>
      </div>
    </div>
  </section>
  <!-- Latest From the Blog -->
  <section class="luxe-section">
    <h2 class="text-center fw-bold mb-4">Latest From the Blog</h2>
    <div class="luxe-features">
        <?php foreach ($articles as $article): ?>
        <div class="luxe-feature-card animate__animated animate__fadeInUp">
            <span class="icon text-secondary"><i class="<?php echo htmlspecialchars($article['icon']); ?>" aria-hidden="true"></i></span>
            <h4><?php echo htmlspecialchars($article['title']); ?></h4>
            <p><?php echo htmlspecialchars($article['description']); ?></p>
            <a href="<?php echo htmlspecialchars($article['link']); ?>" class="btn btn-outline-primary mt-auto">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="text-center mt-4">
        <a href="blog.php" class="btn btn-lg btn-primary">Visit Our Blog <i class="fa-solid fa-book-reader ms-2"></i></a>
    </div>
  </section>
  <!-- FAQ -->
  <section class="luxe-section">
    <h2 class="text-center fw-bold mb-4">Frequently Asked Questions</h2>
    <div class="accordion luxe-faq" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">Is my browsing data safe?</button></h2>
        <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-h" data-bs-parent="#faqAccordion"><div class="accordion-body">All analysis is local and private. Your data never leaves your browser.</div></div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">How do I restore a session?</button></h2>
        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Click the "Save Sessions" button, then select a session to restore from your saved list.</div></div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq3-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">Can I group tabs by project?</button></h2>
        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Yes! Use the "Group by Topic" feature to organize tabs by project, topic, or website.</div></div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq-stdsites-h"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-stdsites" aria-expanded="false" aria-controls="faq-stdsites">What is Standard Sites and how does it work?</button></h2>
        <div id="faq-stdsites" class="accordion-collapse collapse" aria-labelledby="faq-stdsites-h" data-bs-parent="#faqAccordion"><div class="accordion-body">Standard Sites lets you save your favorite or most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and launch your daily workflow instantly.</div></div>
      </div>
    </div>
  </section>
  <!-- CTA -->
  <section class="luxe-cta animate__animated animate__fadeInUp animate__delay-4s">
    <h2 class="fw-bold mb-3">Ready to Tame Your Tabs?</h2>
    <a href="download.php" class="btn btn-lg"><i class="fa-solid fa-download me-2"></i>Get Smart Tab Organiser</a>
    <div class="mt-2">Free to install. No signup required.</div>
  </section>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html> 