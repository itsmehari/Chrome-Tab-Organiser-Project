<!-- FontAwesome CDN for icons (include ONCE globally, e.g., in main layout or here if not already present) -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
<!-- Luxe-Inspired Hero Section for Smart Tab Manager -->
<section class="hero-modern">
  <div class="hero-modern__container">
    <!-- Left Side: Text + CTA -->
    <div class="hero-modern__left">
      <h1 style="font-family: 'Poppins', 'Inter', sans-serif;">
        <span class="intro">Hi, there!</span><br>
        <span class="highlight">SMART TAB MANAGER</span> IS HERE TO BOOST YOUR BROWSING PRODUCTIVITY
      </h1>
      <p style="font-family: 'Lato', 'Inter', sans-serif;">Chrome Extension to group, analyze & master tabs with one click.</p>
      <a href="https://chrome.google.com/webstore/detail/smart-tab-organiser/" class="cta-button" target="_blank" aria-label="Add Smart Tab Organiser to Chrome">
        <i class="fa-brands fa-chrome me-1" aria-hidden="true"></i> Add to Chrome – It's Free
      </a>
    </div>
    <!-- Right Side: Image + Floating Cards -->
    <div class="hero-modern__right">
      <div class="hero-image-container">
        <img src="assets/luxe-hero-side-image.png" alt="Smart Tab Manager Screenshot" class="main-img" />
        <div class="floating-card top-left" aria-label="2K+ Tabs Grouped"><i class="fa-solid fa-layer-group me-1 text-primary" aria-hidden="true"></i> 2K+ Tabs Grouped</div>
        <div class="floating-card top-right" aria-label="4.8 Rating"><i class="fa-solid fa-star me-1 text-accent" aria-hidden="true"></i> 4.8 Rating</div>
        <div class="floating-card bottom-right" aria-label="Chrome User – 5 Years"><i class="fa-brands fa-chrome me-1 text-secondary" aria-hidden="true"></i> Chrome User – 5 Years</div>
      </div>
    </div>
  </div>
</section>
<!-- Services Section -->
<section class="services">
  <div class="service-item">
    <i class="fa-solid fa-layer-group icon text-primary" aria-hidden="true"></i>
    <h3 style="font-family: 'Poppins', 'Inter', sans-serif;">Tab Grouping</h3>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">Auto-organize open tabs by topic and purpose.</p>
  </div>
  <div class="service-item">
    <i class="fa-solid fa-lightbulb icon text-accent" aria-hidden="true"></i>
    <h3 style="font-family: 'Poppins', 'Inter', sans-serif;">Smart Suggestions</h3>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">Get AI-powered tab recommendations.</p>
  </div>
  <div class="service-item">
    <i class="fa-solid fa-rocket icon text-secondary" aria-hidden="true"></i>
    <h3 style="font-family: 'Poppins', 'Inter', sans-serif;">Performance Boost</h3>
    <p style="font-family: 'Lato', 'Inter', sans-serif;">Free memory by unloading inactive tabs.</p>
  </div>
</section>
<style>
.hero-modern {
  background: linear-gradient(120deg, #f8fafc 0%, #ffe3ec 100%);
  padding: 3.5rem 0 2.5rem 0;
  position: relative;
  overflow: hidden;
}
.hero-modern__container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  gap: 2.5rem;
  flex-wrap: wrap;
}
.hero-modern__left {
  flex: 1 1 400px;
  min-width: 320px;
  max-width: 520px;
  z-index: 2;
}
.intro {
  font-size: 1.1rem;
  color: #00C853;
  font-weight: 600;
  margin-bottom: 0.5rem;
  display: inline-block;
}
.highlight {
  color: #1976D2;
  font-weight: 800;
  font-size: 2.7rem;
  letter-spacing: 1px;
}
.hero-modern__left h1 {
  font-size: 2.2rem;
  font-weight: 700;
  margin-bottom: 1.2rem;
  line-height: 1.15;
}
.hero-modern__left p {
  font-size: 1.2rem;
  color: #334155;
  margin-bottom: 2rem;
  line-height: 1.5;
}
.cta-button {
  display: inline-flex;
  align-items: center;
  background: linear-gradient(90deg, #1976D2 0%, #00C853 100%);
  color: #fff;
  border: none;
  border-radius: 32px;
  padding: 1rem 2.5rem;
  font-size: 1.1rem;
  font-weight: 600;
  box-shadow: 0 4px 16px rgba(25,118,210,0.12);
  transition: transform 0.2s, box-shadow 0.2s;
  cursor: pointer;
  text-decoration: none;
  gap: 0.7rem;
}
.cta-button:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 32px rgba(0,200,83,0.18);
}
.chrome-icon {
  width: 24px;
  height: 24px;
  margin-right: 0.5rem;
}
.hero-modern__right {
  flex: 1 1 350px;
  min-width: 300px;
  max-width: 500px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hero-image-container {
  position: relative;
  width: 100%;
  max-width: 400px;
  min-width: 260px;
}
.main-img {
  width: 100%;
  border-radius: 24px;
  box-shadow: 0 8px 32px rgba(37,99,235,0.13);
  position: relative;
  z-index: 2;
}
.floating-card {
  position: absolute;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 2px 12px rgba(25,118,210,0.13);
  padding: 0.7rem 1.2rem;
  font-size: 1rem;
  font-weight: 600;
  color: #1976D2;
  z-index: 3;
  min-width: 110px;
  text-align: center;
  animation: float 3s ease-in-out infinite alternate;
}
.floating-card.top-left {
  top: 18px;
  left: -30px;
  animation-delay: 0s;
}
.floating-card.top-right {
  top: 30px;
  right: -30px;
  color: #00C853;
  animation-delay: 1s;
}
.floating-card.bottom-right {
  bottom: 18px;
  right: -30px;
  color: #f59e42;
  animation-delay: 2s;
}
@keyframes float {
  from { transform: translateY(0); }
  to { transform: translateY(-12px); }
}
.services {
  display: flex;
  justify-content: center;
  gap: 2.5rem;
  margin: 2.5rem auto 1.5rem auto;
  max-width: 1100px;
  flex-wrap: wrap;
}
.service-item {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 2px 12px rgba(25,118,210,0.07);
  padding: 2rem 1.5rem 1.5rem 1.5rem;
  min-width: 220px;
  max-width: 260px;
  flex: 1 1 220px;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.25s cubic-bezier(.77,0,.18,1), box-shadow 0.25s;
  position: relative;
  overflow: hidden;
  text-align: center;
  border: 1.5px solid #e0e7ff;
}
.service-item:hover {
  transform: translateY(-8px) scale(1.04) rotate(-1deg);
  box-shadow: 0 8px 32px rgba(25,118,210,0.13);
  border: 1.5px solid #1976D233;
  z-index: 2;
}
.icon {
  font-size: 2.2rem;
  border-radius: 50%;
  padding: 0.7rem;
  margin-bottom: 0.7rem;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 8px rgba(25,118,210,0.07);
  background: #f8fafc;
}
.service-item h3 {
  font-weight: 600;
  font-size: 1.15rem;
  margin-bottom: 0.3rem;
  color: #1976D2;
}
.service-item p {
  font-size: 1rem;
  color: #334155;
  opacity: 0.92;
}
@media (max-width: 900px) {
  .hero-modern__container { flex-direction: column; gap: 2rem; }
  .hero-modern__right, .hero-modern__left { max-width: 100vw; }
  .hero-image-container { max-width: 260px; }
  .main-img { width: 100%; }
}
@media (max-width: 700px) {
  .hero-modern { padding: 2rem 0.5rem; }
  .hero-modern__container { gap: 1.2rem; }
  .services { flex-direction: column; gap: 1rem; }
  .service-item { min-width: 90vw; }
}
</style> 