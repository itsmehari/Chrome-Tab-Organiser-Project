<!-- FontAwesome CDN for icons (include ONCE globally, e.g., in main layout or here if not already present) -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
<!-- Porto-Style Navbar Component for Smart Tab Organiser Website -->
<!-- Optional: Top utility bar for support/contact info -->
<div class="sto-navbar__utility">
  <div class="sto-navbar__utility-inner">
    <span><i class="fa-solid fa-headset me-1 text-primary" aria-hidden="true"></i> Support: <a href="mailto:colourchemist@gmail.com">colourchemist@gmail.com</a></span>
    <span class="sto-navbar__utility-sep">|</span>
    <span><i class="fa-solid fa-tag me-1 text-accent" aria-hidden="true"></i> Sales: <a href="mailto:penthhivetechnologies@gmail.com">penthhivetechnologies@gmail.com</a></span>
    <span class="sto-navbar__utility-sep">|</span>
    <span><i class="fa-solid fa-phone me-1 text-secondary" aria-hidden="true"></i> Call: <a href="tel:+919884145121">+91 9884145121</a></span>
  </div>
</div>
<header class="sto-navbar" role="banner">
  <nav class="sto-nav" role="navigation" aria-label="Main Navigation">
    <div class="sto-nav__logo">
      <a href="index.php" aria-label="Smart Tab Organiser Home">
        <img src="assets/Smart-Tab-Manager-Logo.png" alt="Smart Tab Organiser Logo" height="40" />
      </a>
    </div>
    <button class="sto-nav__toggle" aria-controls="sto-nav__links" aria-expanded="false" aria-label="Open menu" tabindex="0">
      <span class="sto-nav__hamburger"></span>
    </button>
    <ul class="sto-nav__links" id="sto-nav__links">
      <li><a href="index.php"><i class="fa-solid fa-house me-1 text-primary" aria-hidden="true"></i> Home</a></li>
      <li><a href="features.php"><i class="fa-solid fa-bolt me-1 text-accent" aria-hidden="true"></i> Features</a></li>
      <li><a href="pricing.php"><i class="fa-solid fa-tags me-1 text-secondary" aria-hidden="true"></i> Pricing</a></li>
      <li><a href="compare-features.php"><i class="fa-solid fa-table-list me-1 text-primary" aria-hidden="true"></i> Compare Features</a></li>
      <li><a href="blog.php"><i class="fa-solid fa-newspaper me-1 text-accent" aria-hidden="true"></i> Blog</a></li>
      <li><a href="about.php"><i class="fa-solid fa-circle-info me-1 text-secondary" aria-hidden="true"></i> About</a></li>
      <li><a href="contact.php"><i class="fa-solid fa-envelope me-1 text-primary" aria-hidden="true"></i> Contact</a></li>
    </ul>
    <div class="sto-nav__cta dropdown" style="position:relative;">
      <a href="#" class="sto-btn sto-btn--primary dropdown-toggle" id="installDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="padding-right:2.2em;" tabindex="0">
        <i class="fa-solid fa-download me-1" aria-hidden="true"></i> Install Now
      </a>
      <ul class="dropdown-menu" aria-labelledby="installDropdown" style="min-width:220px;">
        <li><a class="dropdown-item" href="https://chrome.google.com/webstore/detail/smart-tab-organiser/" target="_blank" rel="noopener"><i class="fa-brands fa-chrome me-1 text-primary" aria-hidden="true"></i> Install from Chrome Web Store</a></li>
        <li><a class="dropdown-item" href="mailto:colourchemist@gmail.com,penthhivetechnologies@gmail.com?subject=Smart%20Tab%20Organiser%20Install%20Link&body=Please%20send%20me%20the%20installable%20link%20for%20Smart%20Tab%20Organiser."><i class="fa-solid fa-envelope-open-text me-1 text-accent" aria-hidden="true"></i> Request Install Link by Email</a></li>
      </ul>
    </div>
  </nav>
</header> 