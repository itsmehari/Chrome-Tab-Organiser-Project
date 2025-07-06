<?php
$page_title = "Why Local-First is the Future: Our Commitment to Your Privacy";
$page_description = "We believe your data is yours. Learn what 'local-first' processing means and why Smart Tab Organiser is designed from the ground up to protect your privacy.";
$canonical_url = "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/blog/our-commitment-to-privacy.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta name="robots" content="index, follow">

  <!-- Social Meta -->
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:image" content="https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/blog/privacy-featured.png">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Styles & Fonts -->
  <link rel="stylesheet" href="../assets/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lora:ital,wght@0,400;1,500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": { "@type": "WebPage", "@id": "<?php echo htmlspecialchars($canonical_url); ?>" },
    "headline": "<?php echo htmlspecialchars($page_title); ?>",
    "description": "<?php echo htmlspecialchars($page_description); ?>",
    "image": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/blog/privacy-featured.png",
    "author": { "@type": "Organization", "name": "Smart Tab Organiser" },
    "publisher": {
      "@type": "Organization",
      "name": "Smart Tab Organiser",
      "logo": { "@type": "ImageObject", "url": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png" }
    },
    "datePublished": "<?php echo date('Y-m-d'); ?>",
    "dateModified": "<?php echo date('Y-m-d'); ?>"
  }
  </script>

  <style>
    .privacy-hero { background: #f8fafc; padding: 4rem 1rem; }
    .privacy-point { text-align: center; margin-bottom: 2rem; }
    .privacy-point .icon { font-size: 2.5rem; color: #1d4ed8; margin-bottom: 1rem; }
    .privacy-point h3 { font-weight: 600; }
    .commitment-box { background: #eff6ff; border: 1px solid #dbeafe; border-radius: 1rem; }
  </style>
</head>
<body>

<?php include '../components/navbar.php'; ?>

<main>
  <header class="privacy-hero text-center">
    <div class="container">
      <i class="fas fa-user-shield fa-3x text-primary mb-3"></i>
      <h1 class="display-5 fw-bold">Your Tabs Are Your Business. Not Ours.</h1>
      <p class="lead text-muted mt-3">Understanding our 'local-first' promise.</p>
    </div>
  </header>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <article class="blog-content">
          <p class="lead">
            In an era where personal data is the world's most valuable resource, we decided to build something different. We believe that how you use your browser—the articles you read, the research you do, the products you shop for—is your information alone.
          </p>
          <p>
            That's why we built Smart Tab Organiser on a simple but powerful principle: **local-first processing.**
          </p>

          <h2 class="h3 fw-bold text-center my-5">What Does "Local-First" Actually Mean?</h2>

          <div class="row text-center">
            <div class="col-md-6 privacy-point">
              <div class="icon"><i class="fas fa-desktop"></i></div>
              <h3>Your Data Stays on Your Computer</h3>
              <p>All the AI analysis, tab grouping, and session saving happens directly inside your browser. Your tab titles and history are never sent to our servers or any third party. Ever.</p>
            </div>
            <div class="col-md-6 privacy-point">
              <div class="icon"><i class="fas fa-server"></i></div>
              <h3>No Cloud Processing</h3>
              <p>Unlike many "AI-powered" services that send your data to the cloud for analysis, our model runs entirely on your machine. This makes it faster, more reliable, and infinitely more private.</p>
            </div>
          </div>
          
          <div class="commitment-box p-5 my-4">
            <h2 class="h4 fw-bold text-center">Our Unbreakable Privacy Promise</h2>
            <ul class="list-unstyled">
              <li class="d-flex mb-3"><i class="fas fa-check-circle text-success me-3 mt-1"></i><span>We will NEVER track the websites you visit.</span></li>
              <li class="d-flex mb-3"><i class="fas fa-check-circle text-success me-3 mt-1"></i><span>We will NEVER sell your data to advertisers or data brokers.</span></li>
              <li class="d-flex mb-0"><i class="fas fa-check-circle text-success me-3 mt-1"></i><span>We only collect the bare minimum anonymous data needed for performance (like bug reports you choose to send).</span></li>
            </ul>
          </div>

          <div class="alert alert-info mt-4" role="alert" style="background: linear-gradient(110deg, #10b981 0%, #2563eb 100%); color: #fff;">
            <i class="fa-solid fa-star me-2"></i>
            <strong>Standard Sites</strong> lets you save your favorite websites for one-click access. Your list is always stored locally—never sent to our servers or anyone else.
          </div>

          <h2 class="h3 fw-bold mt-5">Why Does This Matter?</h2>
          <p>
            Because privacy isn't a feature; it's a foundation. When you can trust the tools you use, you can work with confidence. You don't have to wonder who is watching or what your data is being used for. You can simply focus on your work, knowing that your digital workspace is truly your own.
          </p>
        </article>

        <section class="text-center p-5 mt-4">
          <h2 class="fw-bold h3 mb-3">Choose the Tool That Respects You.</h2>
          <p class="text-muted mb-4">Experience a powerful productivity tool that puts your privacy first. Install Smart Tab Organiser for free.</p>
          <a href="../download.php" class="btn sto-btn sto-btn--primary btn-lg">
            <i class="fas fa-lock me-2"></i> Get Started with a Private Tool
          </a>
        </section>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php'; ?>

<?php include '../../components/analytics.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 