<?php
$page_title = "Blog & Resources – Smart Tab Organiser";
$page_description = "Unlock your productivity potential with expert tips, browser hacks, and in-depth guides from the Smart Tab Organiser team. Master your workflow today.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/blog.php";

// Article Data: Title, Description, Link, Read Time, Tags
$articles = [
    [
        'title' => 'How to Group Browser Tabs Like a Pro (and Why You Should)',
        'description' => 'Stop drowning in a sea of tabs. Learn the art of intelligent tab grouping to boost focus, speed up your workflow, and reclaim your browser sanity.',
        'link' => 'blog/how-to-group-tabs-smartly.php',
        'read_time' => '5 min read',
        'tags' => ['How-To', 'Productivity', 'Featured']
    ],
    [
        'title' => 'Mastering Browser Sessions: Never Lose Your Work Again',
        'description' => 'Unlock the power of browser sessions. A deep dive into saving, restoring, and managing your digital workspace for maximum efficiency.',
        'link' => 'blog/mastering-browser-sessions.php',
        'read_time' => '6 min read',
        'tags' => ['Workflow', 'Deep Dive']
    ],
    [
        'title' => 'The Digital Declutter: A 5-Step Method to Clean Your Browser',
        'description' => 'Feeling overwhelmed by digital chaos? Follow this actionable 5-step guide to declutter your browser and create a zen-like workspace.',
        'link' => 'blog/digital-declutter-browser-cleanup.php',
        'read_time' => '4 min read',
        'tags' => ['Productivity', 'Guide']
    ],
    [
        'title' => 'Are Your Browser Habits Draining Your Focus?',
        'description' => 'Identify and fix the silent productivity killers in your browsing habits. Learn how to cultivate a workflow that promotes deep work and concentration.',
        'link' => 'blog/browser-habits-draining-focus.php',
        'read_time' => '5 min read',
        'tags' => ['Productivity', 'Mindset']
    ],
    [
        'title' => 'Smart Tab Organiser vs. OneTab: Which is Right for You?',
        'description' => 'A head-to-head comparison. We break down the features, benefits, and ideal use cases to help you choose the best tab manager for your needs.',
        'link' => 'blog/smart-tab-organiser-vs-onetab.php',
        'read_time' => '7 min read',
        'tags' => ['Comparison', 'Vs.', 'Featured']
    ],
    [
        'title' => 'How Browser Tabs Secretly Hog Your CPU and Memory',
        'description' => 'Ever wonder why your computer slows down? We lift the curtain on how tabs impact performance and what you can do about it.',
        'link' => 'blog/how-tabs-affect-cpu-and-memory.php',
        'read_time' => '6 min read',
        'tags' => ['Performance', 'Tech']
    ],
    [
        'title' => 'Your Privacy is Our Priority: Our Data Commitment',
        'description' => 'In an age of data surveillance, we believe in transparency. Read our unwavering commitment to protecting your privacy and your data.',
        'link' => 'blog/our-commitment-to-privacy.php',
        'read_time' => '3 min read',
        'tags' => ['Privacy', 'Trust']
    ],
    [
        'title' => '10 Advanced Chrome Shortcuts to Supercharge Your Browsing',
        'description' => 'Move beyond Ctrl+T. These expert-level shortcuts will have you navigating Chrome with lightning speed and impressing your colleagues.',
        'link' => 'blog/advanced-chrome-shortcuts.php',
        'read_time' => '8 min read',
        'tags' => ['How-To', 'Power User']
    ],
     [
        'title' => 'The Best Chrome Extensions for High-Performing Remote Teams',
        'description' => 'Equip your remote toolkit with these essential extensions for collaboration, focus, and seamless communication across distributed teams.',
        'link' => 'blog/best-chrome-extensions-for-remote-work.php',
        'read_time' => '7 min read',
        'tags' => ['Productivity', 'Remote Work', 'Featured']
    ],
     [
        'title' => 'Crafting the Perfect Workspace for Deep Work',
        'description' => 'Your digital environment matters. Learn how to eliminate distractions and configure your browser for sustained, high-value deep work sessions.',
        'link' => 'blog/perfect-browser-workspace-for-deep-work.php',
        'read_time' => '6 min read',
        'tags' => ['Deep Work', 'Mindset']
    ]
];

// Find the first article with a 'Featured' tag, or default to the first article.
$featured_article = $articles[0]; // Default
foreach ($articles as $article) {
    if (in_array('Featured', $article['tags'])) {
        $featured_article = $article;
        break;
    }
}

// Create a separate array for the grid, excluding the featured article.
$grid_articles = array_filter($articles, function($a) use ($featured_article) {
    return $a['title'] !== $featured_article['title'];
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Page: Blog – Smart Tab Organiser
    Purpose: Blog and resource articles for users, now dynamically generated.
    Head Section: Contains SEO meta tags, social sharing tags, canonical URL, stylesheets, and scripts for this page.
    Structure:
      - Basic meta tags (charset, viewport, title, description, robots)
      - Canonical URL for SEO
      - Open Graph (OG) tags for social sharing
      - Twitter Card tags for Twitter sharing
      - CSS stylesheets (main, navbar/footer, fonts, Bootstrap, FontAwesome, Animate.css)
      - JavaScript libraries (GSAP, Anime.js)
      - Structured data (JSON-LD for BlogPosting)
  -->
  <!-- Basic Meta Tags -->
  <meta charset="UTF-8">
  <!-- Viewport and Basic Meta -->
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
  
  <!-- CSS Stylesheets: Main, Navbar/Footer, Fonts, Bootstrap, FontAwesome, Animate.css -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="components/navbar-footer.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  
  <!-- JavaScript Libraries: GSAP, Anime.js for Animations -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  
  <!-- Structured Data: BlogPosting Schema for SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": <?php echo json_encode($page_title); ?>,
    "image": "assets/blog-featured.jpg",
    "author": {
      "@type": "Organization",
      "name": "Smart Tab Organiser"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Smart Tab Organiser",
      "logo": {
        "@type": "ImageObject",
        "url": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png"
      }
    },
    "datePublished": "2024-06-24",
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>,
    "publisher": {
      "@type": "Organization",
      "name": "Smart Tab Organiser"
    }
  }
  </script>
</head>

<body>
  <?php include 'components/promo-banner.php'; ?>
  <?php include 'components/navbar.php'; ?>
  
  <header class="section hero-modern alt-bg" style="background: linear-gradient(90deg, #f8fafc 0%, #e0e7ff 100%); border-radius: 0 0 2rem 2rem; padding: 4rem 1.5rem;">
    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
      <h1 class="fw-bold mb-3" style="font-size:3.2rem; letter-spacing:-1.5px; color: #1e3a8a;">Blog & Resources</h1>
      <p class="lead mb-4" style="font-size:1.3rem; color: #334155;">Unlock your productivity potential. Expert tips, browser hacks, and in-depth guides from the Smart Tab Organiser team.</p>
      <div class="d-flex justify-content-center gap-2">
        <span class="tag bg-primary-soft text-primary-dark">#Productivity</span>
        <span class="tag bg-success-soft text-success-dark">#Workflow</span>
        <span class="tag bg-warning-soft text-warning-dark">#BrowserHacks</span>
        <span class="tag bg-danger-soft text-danger-dark">#Privacy</span>
      </div>
    </div>
  </header>

  <section class="section" style="padding-top: 3rem;">
    <div class="container">
      <h2 class="fw-bold mb-4 text-center"><i class="fa-solid fa-star text-warning me-2"></i>Featured Article</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card blog-card-featured shadow-lg border-0 mb-5 animate__animated animate__fadeInUp">
            <div class="card-body p-4">
              <?php foreach ($featured_article['tags'] as $tag): ?>
                <span class="badge bg-warning-soft text-warning-dark mb-2"><?php echo htmlspecialchars($tag); ?></span>
              <?php endforeach; ?>
              <h3 class="fw-bold mb-2"><?php echo htmlspecialchars($featured_article['title']); ?></h3>
              <p class="text-muted mb-3"><?php echo htmlspecialchars($featured_article['description']); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?php echo htmlspecialchars($featured_article['link']); ?>" class="btn btn-primary btn-lg px-4"><i class="fa-solid fa-book-open me-2"></i>Read Article</a>
                <span class="text-muted small fw-semibold"><i class="fa-solid fa-clock me-2"></i><?php echo htmlspecialchars($featured_article['read_time']); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main class="section bg-light" style="padding-top: 3rem;">
    <div class="container">
      <h2 class="fw-bold mb-5 text-center"><i class="fa-solid fa-newspaper me-2"></i>All Articles</h2>
      <div class="row g-4">
        <?php foreach ($grid_articles as $article): ?>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
          <div class="card blog-card h-100 shadow-sm border-0 animate__animated animate__fadeInUp">
            <div class="card-body d-flex flex-column">
              <h4 class="fw-bold mb-2"><?php echo htmlspecialchars($article['title']); ?></h4>
              <p class="text-muted flex-grow-1"><?php echo htmlspecialchars($article['description']); ?></p>
              <div class="mb-3">
                <?php foreach ($article['tags'] as $tag): ?>
                  <span class="badge bg-primary-soft text-primary-dark me-1"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-auto">
                <a href="<?php echo htmlspecialchars($article['link']); ?>" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-right me-2"></i>Read More</a>
                <small class="text-muted fw-semibold"><?php echo htmlspecialchars($article['read_time']); ?></small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

  <section class="section" style="background: #ffffff;">
    <div class="container">
      <h2 class="fw-bold mb-4 text-center"><i class="fa-solid fa-users me-2 text-primary"></i>Meet the Authors</h2>
      <div class="row justify-content-center g-4">
        <div class="col-md-5">
            <div class="card author-card text-center p-3 h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="assets/Smart-Tab-Manager-Logo.png" alt="Author Hari Krishnan" class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;">
                    <h4 class="fw-semibold mb-1">Hari Krishnan</h4>
                    <p class="text-muted mb-2">Founder & Product Lead</p>
                    <p class="mb-0 small">Hari is passionate about browser productivity and building tools that empower users to do more with less clutter.</p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card author-card text-center p-3 h-100 border-0 shadow-sm">
                <div class="card-body">
                    <img src="assets/Smart-Tab-Manager-Logo.png" alt="Author Priya S." class="rounded-circle mb-3" style="width: 80px; height: 80px; object-fit: cover;">
                    <h4 class="fw-semibold mb-1">Priya S.</h4>
                    <p class="text-muted mb-2">UX & Community</p>
                    <p class="mb-0 small">Priya brings a human touch to our UX and helps foster a vibrant, helpful user community that drives our development.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h2 class="fw-bold mb-3"><i class="fa-solid fa-envelope-open-text me-2 text-secondary"></i>Stay Ahead of the Curve</h2>
                <p class="lead mb-4">Subscribe to our newsletter for exclusive tips, new feature announcements, and productivity hacks delivered straight to your inbox.</p>
                <form class="newsletter-form">
                    <div class="input-group input-group-lg shadow-sm">
                        <input type="email" class="form-control border-0" placeholder="Enter your email address..." required>
                        <button class="btn btn-secondary fw-semibold" type="submit">Subscribe</button>
                    </div>
                </form>
                <p class="text-muted mt-3 small"><i class="fa-solid fa-lock me-1"></i> We respect your privacy. No spam, ever.</p>
            </div>
        </div>
    </div>
  </section>
  
  <?php include 'components/footer.php'; ?>
  <?php include 'components/analytics.php'; ?>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple intersection observer for animations
    const animatedElements = document.querySelectorAll('.animate__animated');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate__fadeInUp');
        }
      });
    }, { threshold: 0.1 });

    animatedElements.forEach(el => {
      observer.observe(el);
    });
  </script>
</body>
</html> 