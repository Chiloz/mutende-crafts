<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog — Mutende Crafts, Lusaka</title>
<link rel="icon" type="image/png" href="images/image_1.png">
<meta name="description" content="Behind-the-scenes stories, process videos, and updates from the Mutende Crafts workbench in Lusaka, Zambia.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php $activePage = 'blog'; include __DIR__ . '/header.php'; ?>

<main id="top">

  <!-- ============ BLOG HERO — FEATURED VIDEO (centered background) ============ -->
  <section class="blog-hero blog-hero--video-bg">
    <video
      class="blog-hero-bg-video"
      id="blogHeroVideo"
      src="videos/mutende-process.mp4"
      poster="images/image_3.jpg"
      playsinline
      autoplay
      muted
      loop
      preload="auto">
    </video>
    <div class="blog-hero-bg-tint"></div>

    <div class="blog-hero-content reveal">
      <div class="hero-eyebrow"><span class="dot"></span> From the Workbench</div>
      <h1>Watch a piece come together, <em>bead by bead</em>.</h1>
      <div class="blog-meta-row">
        <span class="blog-meta-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          21 sec process clip
        </span>
        <span class="blog-meta-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          June 2026
        </span>
        <span class="blog-meta-pill blog-meta-pill--live"><span class="live-dot"></span> Behind the Scenes</span>
      </div>
      <p class="lede">A quick look at how we work a piece by hand — no machines, no shortcuts. Every order on this site is made the same way, just for you.</p>
      <div class="hero-ctas">
        <a href="https://wa.me/260976425817" class="btn btn-primary" target="_blank" rel="noopener">
          Order one like this
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <a href="gallery.php" class="btn btn-ghost">See the gallery</a>
      </div>
    </div>
  </section>

  <div class="thread" aria-hidden="true">
    <svg viewBox="0 0 1200 22" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="0" y1="11" x2="1200" y2="11" stroke="#B8862F" stroke-width="1" opacity="0.35"/>
      <g fill="#B8862F">
        <circle cx="10" cy="11" r="4"/><circle cx="40" cy="11" r="2.4"/><circle cx="70" cy="11" r="4"/><circle cx="100" cy="11" r="2.4"/>
        <circle cx="130" cy="11" r="4"/><circle cx="160" cy="11" r="2.4"/><circle cx="190" cy="11" r="4"/><circle cx="220" cy="11" r="2.4"/>
        <circle cx="250" cy="11" r="4"/><circle cx="280" cy="11" r="2.4"/><circle cx="310" cy="11" r="4"/><circle cx="340" cy="11" r="2.4"/>
        <circle cx="370" cy="11" r="4"/><circle cx="400" cy="11" r="2.4"/><circle cx="430" cy="11" r="4"/><circle cx="460" cy="11" r="2.4"/>
        <circle cx="490" cy="11" r="4"/><circle cx="520" cy="11" r="2.4"/><circle cx="550" cy="11" r="4"/><circle cx="580" cy="11" r="2.4"/>
        <circle cx="610" cy="11" r="4"/><circle cx="640" cy="11" r="2.4"/><circle cx="670" cy="11" r="4"/><circle cx="700" cy="11" r="2.4"/>
        <circle cx="730" cy="11" r="4"/><circle cx="760" cy="11" r="2.4"/><circle cx="790" cy="11" r="4"/><circle cx="820" cy="11" r="2.4"/>
        <circle cx="850" cy="11" r="4"/><circle cx="880" cy="11" r="2.4"/><circle cx="910" cy="11" r="4"/><circle cx="940" cy="11" r="2.4"/>
        <circle cx="970" cy="11" r="4"/><circle cx="1000" cy="11" r="2.4"/><circle cx="1030" cy="11" r="4"/><circle cx="1060" cy="11" r="2.4"/>
        <circle cx="1090" cy="11" r="4"/><circle cx="1120" cy="11" r="2.4"/><circle cx="1150" cy="11" r="4"/><circle cx="1180" cy="11" r="2.4"/>
      </g>
    </svg>
  </div>

  <!-- ============ BLOG POST GRID ============ -->
  <section class="blog-posts" id="posts">
    <div class="wrap section-pad">
      <div class="section-head reveal">
        <span class="eyebrow">Latest From The Studio</span>
        <h2>Stories, process notes, and new pieces.</h2>
        <p>A running diary of what's leaving the worktable — plus the occasional look at how it's made.</p>
      </div>

      <div class="blog-grid">
        <article class="blog-card reveal">
          <div class="blog-card-media">
            <img src="images/image_3.jpg" alt="Process video still — beaded shoulder cape in progress">
            <span class="blog-card-cat">Video</span>
          </div>
          <div class="blog-card-body">
            <span class="blog-card-date">June 2026</span>
            <h3>Watch a piece come together, bead by bead</h3>
            <p>Our latest behind-the-scenes clip — straight from Mercy's hands to the finished piece.</p>
            <a href="#top" class="read-more">Watch the video</a>
          </div>
        </article>

        <article class="blog-card reveal">
          <div class="blog-card-media">
            <img src="images/image_8.jpg" alt="Placeholder photo for an upcoming blog post">
            <span class="blog-card-cat">Facebook Page</span>
          </div>
          <div class="blog-card-body">
            <span class="blog-card-date">Coming soon</span>
            <h3>Follow Mutende Crafts on Facebook</h3>
            <p>Stay connected for new products, customer stories, behing-the-scenes content and special updates from mutende crafts.</p>
            <a href="https://www.facebook.com/Mutende Crafts" class="read-more" target="_blank" rel="noopener">Visit our Facebook Page</a>
          </div>
        </article>

        <article class="blog-card reveal">
          <div class="blog-card-media">
            <img src="images/image_11.jpg" alt="Placeholder photo for an upcoming blog post">
            <span class="blog-card-cat">Story</span>
          </div>
          <div class="blog-card-body">
            <span class="blog-card-date">Coming soon</span>
            <h3>More stories coming soon</h3>
            <p>check back regularly for new content.</p>
            <span class="read-more read-more--soon">coming soon</span>
          </div>
        </article>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
// Scroll reveal
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => io.observe(el));

  // Hero background video: ensure autoplay kicks in on mobile browsers
  // that pause programmatic playback until a user gesture occurs.
  const heroVideo = document.getElementById('blogHeroVideo');
  if (heroVideo) {
    const tryPlay = () => heroVideo.play().catch(() => {});
    tryPlay();
    document.addEventListener('click', tryPlay, { once: true });
  }
</script>

</body>
</html>
