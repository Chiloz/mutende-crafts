<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mutende Crafts — Handmade Beaded Jewelry &amp; Handbags, Lusaka</title>
<link rel="icon" type="image/png" href="images/image_1.png">
<meta name="description" content="Mutende Crafts makes one-of-a-kind beaded jewelry and handbags by hand in Lusaka, Zambia. Every piece is custom made to your colors, your design, your story.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php $activePage = 'home'; include __DIR__ . '/header.php'; ?>

<main id="top">

  <!-- ============ HERO ============ -->
  <section class="hero">
    <img src="images/image_2.jpg" alt="Handmade black and gold beaded shoulder cape by Mutende Crafts" class="hero-bg">
    <div class="hero-bg-tint"></div>
    <div class="hero-inner">
      <div class="hero-eyebrow reveal-down"><span class="dot"></span> Handmade in Lusaka, Zambia</div>
      <h1 class="reveal-left">Beaded by hand,<br><em>made for you</em>.</h1>
      <p class="lede reveal-left" style="transition-delay:.12s">Mutende Crafts turns beads, fabric, yarn, and reclaimed materials into jewelry and handbags built around your colors, your story, one piece at a time.</p>
      <div class="hero-ctas reveal-scale" style="transition-delay:.28s">
        <a href="contact.php" class="btn btn-primary">
          Start a custom order
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <a href="gallery.php" class="btn btn-ghost">See the gallery</a>
      </div>
    </div>
    <div class="hero-scroll-cue"><span>Scroll</span><span class="line"></span></div>
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

  <!-- ============ BRIEF GALLERY ============ -->
  <section class="brief-gallery" id="gallery">
    <div class="wrap section-pad">

      <!-- "meet in the middle" header: eyebrow+heading comes from the
           left, the description paragraph comes from the right, they
           land together on the same line as the viewer scrolls in -->
      <div class="section-head reveal-meet-l">
        <span class="eyebrow">Handmade Gallery</span>
        <h2>Recent pieces, straight off the worktable.</h2>
      </div>
      <div class="section-head reveal-meet-r" style="margin-top:-18px;">
        <p>A look at what's left our hands lately. Every piece below was custom built — yours can be too, in whatever colors you bring us.</p>
      </div>

      <div class="gallery-filter reveal-down" id="briefFilter">
        <button class="filter-btn active" data-filter="all">All Pieces</button>
        <button class="filter-btn" data-filter="jewelry">Jewelry</button>
        <button class="filter-btn" data-filter="bags">Handbags &amp; Clutches</button>
      </div>

      <div class="brief-slider reveal-scale">
        <div class="brief-track">
          <div class="brief-piece" data-cat="jewelry">
            <img src="images/image_3.jpg" alt="Black and gold beaded shoulder cape with fringe, draped over the back" loading="lazy">
            <div class="brief-cap">Beaded Shoulder Cape</div>
          </div>
          <div class="brief-piece" data-cat="bags">
            <img src="images/image_5.jpg" alt="Black and clear crystal beaded flap clutch handbag" loading="lazy">
            <div class="brief-cap">Crystal Flap Clutch</div>
          </div>
          <div class="brief-piece" data-cat="bags">
            <img src="images/image_7.jpg" alt="Multicolor jewel-toned beaded round handbag with chain strap" loading="lazy">
            <div class="brief-cap">Jewel-Tone Round Bag</div>
          </div>
          <div class="brief-piece" data-cat="bags">
            <img src="images/image_10.jpg" alt="Ombre pearl beaded handbag fading from clear to pink to purple" loading="lazy">
            <div class="brief-cap">Ombré Pearl Handbag</div>
          </div>
          <div class="brief-piece" data-cat="bags">
            <img src="images/image_8.jpg" alt="Teal beaded handbag with satin bow detail and top handle" loading="lazy">
            <div class="brief-cap">Teal Bow Top-Handle Bag</div>
          </div>
          <div class="brief-piece" data-cat="jewelry">
            <img src="images/collar-black-bodychain-front.jpg" alt="Black and gold beaded statement collar with draped body-chain fringe, front view" loading="lazy">
            <div class="brief-cap">Statement Bead Collar</div>
          </div>
          <!-- duplicate set for seamless infinite slide -->
          <div class="brief-piece" data-cat="jewelry" aria-hidden="true">
            <img src="images/image_3.jpg" alt="" loading="lazy">
            <div class="brief-cap">Beaded Shoulder Cape</div>
          </div>
          <div class="brief-piece" data-cat="bags" aria-hidden="true">
            <img src="images/image_5.jpg" alt="" loading="lazy">
            <div class="brief-cap">Crystal Flap Clutch</div>
          </div>
          <div class="brief-piece" data-cat="bags" aria-hidden="true">
            <img src="images/image_7.jpg" alt="" loading="lazy">
            <div class="brief-cap">Jewel-Tone Round Bag</div>
          </div>
          <div class="brief-piece" data-cat="bags" aria-hidden="true">
            <img src="images/image_10.jpg" alt="" loading="lazy">
            <div class="brief-cap">Ombré Pearl Handbag</div>
          </div>
          <div class="brief-piece" data-cat="bags" aria-hidden="true">
            <img src="images/image_8.jpg" alt="" loading="lazy">
            <div class="brief-cap">Teal Bow Top-Handle Bag</div>
          </div>
          <div class="brief-piece" data-cat="jewelry" aria-hidden="true">
            <img src="images/collar-black-bodychain-front.jpg" alt="" loading="lazy">
            <div class="brief-cap">Statement Bead Collar</div>
          </div>
        </div>
      </div>

      <p class="brief-instructions reveal-down">Hover to pause &middot; tap a piece to view it larger</p>

      <div class="brief-more reveal-scale">
        <a href="gallery.php" class="btn btn-primary">
          View full gallery
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>
    </div>
  </section>

  <div class="thread" aria-hidden="true">
    <svg viewBox="0 0 1200 22" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="0" y1="11" x2="1200" y2="11" stroke="#1C1410" stroke-width="1" opacity="0.12"/>
      <g fill="#7A1F2B">
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

  <!-- ============ SHOP BY CATEGORY ============ -->
  <section class="home-categories">
    <div class="wrap section-pad">
      <div class="section-head reveal-meet-l">
        <span class="eyebrow">Shop By Category</span>
        <h2>Find your piece.</h2>
      </div>
      <div class="section-head reveal-meet-r" style="margin-top:-18px;">
        <p>From everyday necklaces to statement handbags — every category is handmade to order, in the colors you choose.</p>
      </div>
      <div class="category-grid">
        <a href="gallery.php#necklaces" class="category-card reveal-left">
          <img src="images/necklace-pearl-multistrand-1.jpg" alt="Handmade pearl multistrand beaded necklace" loading="lazy">
          <div class="category-card-label">
            <div>
              <h3>Necklaces</h3>
              <span>Beaded &amp; layered styles</span>
            </div>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </div>
        </a>
        <a href="gallery.php#earrings" class="category-card reveal-down" style="transition-delay:.1s">
          <img src="images/earring-marble-brown.jpg" alt="Handmade marble brown beaded earrings" loading="lazy">
          <div class="category-card-label">
            <div>
              <h3>Earrings</h3>
              <span>Light, faceted &amp; bold</span>
            </div>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </div>
        </a>
        <a href="gallery.php#bags" class="category-card reveal-right" style="transition-delay:.2s">
          <img src="images/bag-ruby-beaded-1.jpg" alt="Handmade ruby beaded handbag" loading="lazy">
          <div class="category-card-label">
            <div>
              <h3>Handbags &amp; Clutches</h3>
              <span>One-of-a-kind builds</span>
            </div>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- ============ BY THE NUMBERS ============ -->
  <section class="home-stats">
    <div class="wrap section-pad">
      <div class="section-head center reveal-down">
        <span class="eyebrow">By The Numbers</span>
        <h2>Handmade trust, built over time.</h2>
        <p>Every figure below is a piece beaded by hand, a color matched, a customer who came back.</p>
      </div>
      <div class="home-stats-grid reveal-scale">
        <div class="home-stat">
          <span class="num" data-count="4" data-suffix="+">0+</span>
          <span class="label">Years Beading</span>
        </div>
        <div class="home-stat">
          <span class="num" data-count="300" data-suffix="+">0+</span>
          <span class="label">Custom Pieces Made</span>
        </div>
        <div class="home-stat">
          <span class="num" data-count="100" data-suffix="%">0%</span>
          <span class="label">Handmade, Always</span>
        </div>
        <div class="home-stat">
          <span class="num" data-count="5" data-suffix="+">0+</span>
          <span class="label">Countries Reached</span>
        </div>
      </div>
    </div>
  </section>

  <div class="thread" aria-hidden="true">
    <svg viewBox="0 0 1200 22" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="0" y1="11" x2="1200" y2="11" stroke="#1C1410" stroke-width="1" opacity="0.12"/>
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

  <!-- ============ TESTIMONIALS ============ -->
  <section class="testimonials">
    <div class="wrap section-pad">
      <div class="section-head reveal-meet-l">
        <span class="eyebrow">What Clients Say</span>
        <h2>Loved, one bead at a time.</h2>
        <p>Real words from real customers — straight off WhatsApp.</p>
      </div>
      <div class="testimonial-grid testimonial-grid-2col">
        <div class="testimonial-card reveal-left">
          <span class="stars">★★★★★</span>
          <p class="quote">"You did a beautiful job — the headband and earrings were on point."</p>
          <div class="who">Marrian — WhatsApp Customer</div>
        </div>
        <div class="testimonial-card reveal-right">
          <span class="stars">★★★★★</span>
          <p class="quote">"My clutch matched my outfit exactly. you got the colors perfect on the first try."</p>
          <div class="who">Chanda M. — Lusaka</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ HOW IT WORKS (3-step) ============ -->
  <section class="home-steps">
    <div class="wrap section-pad">
      <div class="section-head reveal-down">
        <span class="eyebrow">How It Works</span>
        <h2>From message to masterpiece.</h2>
        <p>Every order starts with a conversation and ends with a one-of-a-kind piece.</p>
      </div>
      <div class="home-steps-grid">
        <div class="home-step reveal-left" style="transition-delay:.05s">
          <span class="step-num">1</span>
          <h3>Tell us your idea</h3>
          <p>Message Mercy on WhatsApp with your colors, occasion, or inspiration photo.</p>
        </div>
        <div class="home-step reveal-down" style="transition-delay:.18s">
          <span class="step-num">2</span>
          <h3>We beads it by hand</h3>
          <p>Your piece is designed and beaded one strand at a time, just for you.</p>
        </div>
        <div class="home-step reveal-right" style="transition-delay:.3s">
          <span class="step-num">3</span>
          <h3>Collect or get it delivered</h3>
          <p>Pick it up in Lusaka or arrange delivery wherever you are.</p>
        </div>
      </div>
    </div>
  </section>

  

  <!-- ============ CONNECT WITH MUTENDE CRAFTS ============ -->
  <section class="connect">
    <div class="wrap section-pad">
      <div class="connect-card reveal-scale">
        <span class="eyebrow">Let's Make Something</span>
        <h2>Connect with Mutende Crafts.</h2>
        <p>Got an idea, an occasion, or a color palette in mind? Message Mercy directly on WhatsApp or head to the contact page to send your details — every piece starts with a conversation.</p>
        <div class="connect-ctas">
          <a href="https://wa.me/260976425817" class="btn btn-primary" target="_blank" rel="noopener">
            Message on WhatsApp
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="contact.php" class="btn btn-ghost">Go to Contact Page</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
  <button class="lightbox-close" id="lightboxClose" aria-label="Close image">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
  <div class="lightbox-inner">
    <img id="lightboxImg" src="" alt="">
    <h4 id="lightboxTitle"></h4>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
// Scroll reveal — now watches the original .reveal class PLUS the
// new directional classes (.reveal-left/.reveal-right/.reveal-down/
// .reveal-scale/.reveal-meet-l/.reveal-meet-r). Same observer, just a
// wider selector, so nothing on other pages is affected.
  const revealEls = document.querySelectorAll(
    '.reveal, .reveal-left, .reveal-right, .reveal-down, .reveal-scale, .reveal-meet-l, .reveal-meet-r'
  );
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => io.observe(el));

  // Brief gallery filter
  const briefFilterBtns = document.querySelectorAll('#briefFilter .filter-btn');
  const briefPieces = document.querySelectorAll('.brief-piece');
  briefFilterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      briefFilterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.dataset.filter;
      briefPieces.forEach(p => {
        const show = filter === 'all' || p.dataset.cat === filter;
        p.style.display = show ? '' : 'none';
      });
    });
  });

  // Brief gallery lightbox
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxTitle = document.getElementById('lightboxTitle');
  const lightboxClose = document.getElementById('lightboxClose');

  briefPieces.forEach(piece => {
    piece.addEventListener('click', () => {
      const img = piece.querySelector('img');
      const title = piece.querySelector('.brief-cap').textContent;
      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt || title;
      lightboxTitle.textContent = title;
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeLightbox(){
    lightbox.classList.remove('open');
    document.body.style.overflow = '';
  }
  lightboxClose.addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeLightbox(); });

  // By The Numbers — count up each time the stats come into view
  const statNums = document.querySelectorAll('.home-stat .num');

  function animateCount(el) {
    const target = parseInt(el.dataset.count, 10);
    const suffix = el.dataset.suffix || '';
    const duration = 1400;
    let start = null;

    function step(timestamp) {
      if (!start) start = timestamp;
      const progress = Math.min((timestamp - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const current = Math.round(eased * target);
      el.textContent = current + suffix;
      if (progress < 1) {
        el._countFrame = requestAnimationFrame(step);
      } else {
        el.textContent = target + suffix;
      }
    }
    if (el._countFrame) cancelAnimationFrame(el._countFrame);
    el._countFrame = requestAnimationFrame(step);
  }

  if (statNums.length) {
    const statObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        const el = entry.target;
        if (entry.isIntersecting) {
          animateCount(el);
        } else {
          if (el._countFrame) cancelAnimationFrame(el._countFrame);
          el.textContent = '0' + (el.dataset.suffix || '');
        }
      });
    }, { threshold: 0.4 });
    statNums.forEach(el => statObserver.observe(el));
  }
</script>

</body>
</html>
