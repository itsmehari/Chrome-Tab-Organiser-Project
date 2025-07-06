<?php
$page_title = "About Us – Smart Tab Organiser";
$page_description = "Learn about the mission and team behind Smart Tab Organiser, the tool designed to bring clarity and productivity back to your browser.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/about.php";
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": <?php echo json_encode($page_title); ?>,
    "description": <?php echo json_encode($page_description); ?>,
    "url": <?php echo json_encode($canonical_url); ?>
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Smart Tab Organiser",
    "url": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/",
    "logo": {
      "@type": "ImageObject",
      "url": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png"
    }
  }
  </script>
  <style>
    body {
      background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      overflow-x: hidden;
    }
    .mission-block, .founders-story, .milestones, .team-grid, .media-kit, .cta-section {
      background: rgba(255,255,255,0.85);
      border-radius: 18px;
      box-shadow: 0 2px 12px rgba(37,99,235,0.07);
      margin: 2rem auto;
      max-width: 900px;
      padding: 2rem 1.5rem;
      animation: fadeIn 1.2s cubic-bezier(.77,0,.18,1) both;
    }
    .timeline-item {
      background: rgba(245,158,66,0.12);
      border-radius: 14px;
      margin: 1rem 0;
      padding: 1rem 1.2rem;
      box-shadow: 0 2px 12px rgba(245,158,66,0.07);
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .timeline-item:hover {
      transform: scale(1.04) rotate(-1deg);
      box-shadow: 0 8px 32px rgba(245,158,66,0.13);
    }
    .team-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      background: rgba(255,255,255,0.95);
    }
    .team-card {
      background: rgba(37,99,235,0.07);
      border-radius: 16px;
      box-shadow: 0 2px 12px rgba(37,99,235,0.07);
      padding: 1.2rem 1rem;
      text-align: center;
      min-width: 180px;
      max-width: 220px;
      transition: transform 0.2s, box-shadow 0.2s;
      margin-bottom: 1rem;
    }
    .team-card img {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      margin-bottom: 0.5rem;
      box-shadow: 0 2px 8px rgba(37,99,235,0.13);
      object-fit: cover;
    }
    .team-card:hover {
      transform: scale(1.07) rotate(-1deg);
      box-shadow: 0 8px 32px rgba(37,99,235,0.13);
      background: linear-gradient(120deg, #f8fafc 60%, #e0e7ff 100%);
    }
    .media-kit a {
      display: inline-block;
      background: linear-gradient(90deg, #2563eb 0%, #10b981 100%);
      color: #fff;
      border-radius: 24px;
      padding: 0.7rem 2rem;
      font-weight: 600;
      margin-top: 1rem;
      text-decoration: none;
      box-shadow: 0 2px 12px rgba(37,99,235,0.07);
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .media-kit a:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 32px rgba(16,185,129,0.13);
    }
    .cta-section {
      background: linear-gradient(90deg, #f59e42 0%, #10b981 100%);
      color: #fff;
      border-radius: 18px;
      margin: 2rem auto;
      max-width: 600px;
      text-align: center;
      padding: 2rem 1rem;
      box-shadow: 0 4px 24px rgba(245,158,66,0.13);
      animation: fadeIn 1.2s 0.5s both;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: none; }
    }
    @media (max-width: 900px) {
      .team-grid { flex-direction: column; align-items: center; }
    }
    .team-avatar { width:80px; border-radius:50%; margin-bottom:1rem; box-shadow:0 2px 8px rgba(25,118,210,0.07); }
  </style>
</head>
<body>
<?php include 'components/navbar.php'; ?>
<header class="section hero-modern alt-bg">
  <h1 class="fw-bold mb-2">About Smart Tab Organiser</h1>
  <p class="lead">Empowering you to master your digital workspace and reclaim focus, one tab at a time.</p>
</header>
<section class="section features polished-section">
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-star text-accent" aria-hidden="true"></i></span>
    <h2 style="font-family: 'Poppins', 'Inter', sans-serif;">Standard Sites</h2>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">Save your most-used websites and open them all at once with a single click. Add any site from the popup, manage your list, and skip repetitive steps for maximum productivity.</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-bullseye text-accent" aria-hidden="true"></i></span>
    <h2 style="font-family: 'Poppins', 'Inter', sans-serif;">Mission & Vision</h2>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">We believe productivity starts with clarity. Our vision is a world where browser chaos never stands in the way of your best work.</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-rocket text-primary" aria-hidden="true"></i></span>
    <h2 style="font-family: 'Poppins', 'Inter', sans-serif;">Founders' Story</h2>
    <p style="font-family: 'Lato', 'Inter', sans-serif;"><strong>2023:</strong> Frustrated by tab overload, our founders built a prototype to group tabs by topic using AI.<br><strong>2024:</strong> Smart Tab Organiser launches, helping thousands regain control of their browser.</p>
  </div>
  <div class="feature-card">
    <span class="icon"><i class="fa-solid fa-trophy text-secondary" aria-hidden="true"></i></span>
    <h2 style="font-family: 'Poppins', 'Inter', sans-serif;">Milestones</h2>
    <ul style="text-align:left; font-family: 'Lato', 'Inter', sans-serif;">
      <li><strong>Jan 2024:</strong> 1,000 users</li>
      <li><strong>Apr 2024:</strong> Chrome Web Store featured</li>
      <li><strong>Jun 2024:</strong> 10,000+ users worldwide</li>
    </ul>
  </div>
</section>
<section class="section alt-bg">
  <h2 class="text-center fw-bold mb-4" style="font-family: 'Poppins', 'Inter', sans-serif;">Meet the Team</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <img src="assets/team-hari.jpg" alt="Hari Krishnan, Founder" class="team-avatar" />
      <div style="font-family: 'Lato', 'Inter', sans-serif;"><strong>Hari Krishnan</strong><br>Founder & Product Lead</div>
    </div>
    <div class="feature-card">
      <img src="assets/team-alex.jpg" alt="Alex R., Engineering" class="team-avatar" />
      <div style="font-family: 'Lato', 'Inter', sans-serif;"><strong>Alex R.</strong><br>Engineering</div>
    </div>
    <div class="feature-card">
      <img src="assets/team-priya.jpg" alt="Priya S., UX & Community" class="team-avatar" />
      <div style="font-family: 'Lato', 'Inter', sans-serif;"><strong>Priya S.</strong><br>UX & Community</div>
    </div>
  </div>
</section>
<section class="section">
  <h2 class="text-center fw-bold mb-4" style="font-family: 'Poppins', 'Inter', sans-serif;">Press & Media Kit</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <span class="icon"><i class="fa-solid fa-newspaper text-accent" aria-hidden="true"></i></span>
      <a href="assets/media-kit.zip" download style="font-family: 'Lato', 'Inter', sans-serif;">Download logos, screenshots, and press mentions</a>
    </div>
  </div>
</section>
<!-- Testimonials Section (polished, placeholder) -->
<section class="section alt-bg">
  <h2 class="text-center fw-bold mb-4" style="font-family: 'Poppins', 'Inter', sans-serif;">What Our Users Are Saying</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <span class="icon"><i class="fa-solid fa-comment-dots text-primary" aria-hidden="true"></i></span>
      <p style="font-family: 'Lato', 'Inter', sans-serif;">"Smart Tab Organiser helped me regain control of my browser and my workday!"</p>
      <div class="testimonial-author" style="font-family: 'Lato', 'Inter', sans-serif;"><strong>- Satisfied User</strong></div>
    </div>
  </div>
</section>
<!-- FAQ Section (polished, placeholder) -->
<section class="section">
  <h2 class="text-center fw-bold mb-4" style="font-family: 'Poppins', 'Inter', sans-serif;">Frequently Asked Questions</h2>
  <div class="features" style="justify-content:center;">
    <div class="feature-card">
      <span class="icon"><i class="fa-solid fa-circle-question text-accent" aria-hidden="true"></i></span>
      <h4 style="font-family: 'Poppins', 'Inter', sans-serif;">How do I get started?</h4>
      <p style="font-family: 'Lato', 'Inter', sans-serif;">Just install from the Chrome Web Store and click the extension icon to begin!</p>
    </div>
    <div class="feature-card">
      <span class="icon"><i class="fa-solid fa-lock text-primary" aria-hidden="true"></i></span>
      <h4 style="font-family: 'Poppins', 'Inter', sans-serif;">Is my data private?</h4>
      <p style="font-family: 'Lato', 'Inter', sans-serif;">Yes, all analysis is local. Nothing leaves your browser.</p>
    </div>
  </div>
</section>
<section class="cta-section animated-cta">
  <a href="download.php" class="btn btn-primary">Try Smart Tab Organiser Free</a>
</section>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
  <script>
    // GSAP entrance animations
    gsap.from('.animated-mission', { opacity: 0, y: 40, duration: 1, ease: 'power2.out', delay: 0.2 });
    gsap.from('.animated-timeline', { opacity: 0, x: -40, duration: 1, delay: 0.5, ease: 'power2.out' });
    gsap.from('.animated-milestones', { opacity: 0, y: 40, duration: 1, delay: 0.8, ease: 'power2.out' });
    gsap.from('.animated-team', { opacity: 0, y: 40, duration: 1, delay: 1.1, ease: 'power2.out' });
    gsap.from('.animated-media', { opacity: 0, y: 30, duration: 1, delay: 1.4, ease: 'power2.out' });
    gsap.from('.animated-cta', { opacity: 0, scale: 0.95, duration: 1, delay: 1.7, ease: 'back.out(1.7)' });
    // Micro-interactions
    document.querySelectorAll('.timeline-item').forEach(item => {
      item.addEventListener('mouseenter', () => {
        anime({ targets: item, scale: 1.04, duration: 200, easing: 'easeOutQuad' });
      });
      item.addEventListener('mouseleave', () => {
        anime({ targets: item, scale: 1, duration: 200, easing: 'easeOutQuad' });
      });
    });
    document.querySelectorAll('.team-card').forEach(card => {
      card.addEventListener('mouseenter', () => {
        anime({ targets: card, scale: 1.07, duration: 200, easing: 'easeOutQuad' });
      });
      card.addEventListener('mouseleave', () => {
        anime({ targets: card, scale: 1, duration: 200, easing: 'easeOutQuad' });
      });
    });
    document.querySelectorAll('.media-kit a').forEach(link => {
      link.addEventListener('mouseenter', () => {
        anime({ targets: link, scale: 1.05, duration: 200, easing: 'easeOutQuad' });
      });
      link.addEventListener('mouseleave', () => {
        anime({ targets: link, scale: 1, duration: 200, easing: 'easeOutQuad' });
      });
    });
  </script>
</body>
</html> 