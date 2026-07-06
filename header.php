<?php
// $activePage should be set by the including page before this include,
// e.g. $activePage = 'home'; (one of: home, about, blog, gallery, contact)
if (!isset($activePage)) {
    $activePage = '';
}
?>
<header class="site header-v2">
  <div class="nav-inner">
    <a href="home.php#top" class="brand-mark">
      <img src="images/image_1.png" alt="Mutende Crafts logo" class="logo-img">
      Mutende Crafts
    </a>
    <nav class="links">
      <a href="index.php" class="<?php echo $activePage === 'home' ? 'active-link' : ''; ?>">Home</a>
      <a href="about.php" class="<?php echo $activePage === 'about' ? 'active-link' : ''; ?>">About</a>
      <a href="blog.php" class="<?php echo $activePage === 'blog' ? 'active-link' : ''; ?>">Blog</a>
      <div class="nav-dropdown" id="galleryDropdown">
        <a href="gallery.php" class="nav-dropdown-trigger<?php echo $activePage === 'gallery' ? ' active-link' : ''; ?>" id="galleryDropdownTrigger" aria-haspopup="true" aria-expanded="false">
          Gallery
          <svg class="nav-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </a>
        <div class="nav-megamenu" id="galleryMegaMenu">
          <div class="nav-megamenu-list">
            <button class="nav-megamenu-item nav-megamenu-allitem active" data-jump="all" data-img="images/image_1.png" data-desc="Browse every handmade piece in one place — jewelry and bags side by side.">All Pieces</button>
            <button class="nav-megamenu-item" data-jump="piece-1" data-img="images/image_3.jpg" data-desc="A draped beaded shoulder cape, fringed and finished by hand.">Beaded Shoulder Cape</button>
            <button class="nav-megamenu-item" data-jump="piece-2" data-img="images/collar-black-bodychain-front.jpg" data-desc="A statement bead collar with cascading body-chain fringe.">Statement Bead Collar</button>
            <button class="nav-megamenu-item" data-jump="piece-3" data-img="images/image_5.jpg" data-desc="A crystal-beaded flap clutch, compact and eye-catching.">Crystal Flap Clutch</button>
            <button class="nav-megamenu-item" data-jump="piece-5" data-img="images/image_7.jpg" data-desc="A jewel-tone round bag, beaded edge to edge.">Jewel-Tone Round Bag</button>
            <button class="nav-megamenu-item" data-jump="piece-6" data-img="images/image_8.jpg" data-desc="A teal top-handle bag finished with a beaded bow.">Teal Bow Top-Handle Bag</button>
            <button class="nav-megamenu-item" data-jump="piece-7" data-img="images/image_9.jpg" data-desc="A beaded handbag with a sculpted ring handle.">Ring-Handle Beaded Bag</button>
            <button class="nav-megamenu-item" data-jump="piece-8" data-img="images/image_10.jpg" data-desc="An ombré pearl handbag, shading from light to deep tone.">Ombré Pearl Handbag</button>
            <button class="nav-megamenu-item" data-jump="piece-9" data-img="images/image_11.jpg" data-desc="A ruby crystal bag with a rich, faceted shimmer.">Ruby Crystal Bag</button>
            <button class="nav-megamenu-item" data-jump="piece-10" data-img="images/image_12.jpg" data-desc="An emerald bow clutch, beaded in deep jewel tones.">Emerald Bow Clutch</button>
            <button class="nav-megamenu-item" data-jump="piece-11" data-img="images/earring-black-faceted.jpg" data-desc="Bold faceted onyx-bead hoop earrings with a geometric cut.">Faceted Onyx Hoop Earrings</button>
            <button class="nav-megamenu-item" data-jump="piece-12" data-img="images/earring-marble-brown.jpg" data-desc="Warm cocoa marble bead hoop earrings, swirled in cream and brown.">Cocoa Marble Hoop Earrings</button>
            <button class="nav-megamenu-item" data-jump="piece-13" data-img="images/earring-marble-grey.jpg" data-desc="Storm-grey marbled bead hoop earrings with a smoky finish.">Storm Marble Hoop Earrings</button>
            <button class="nav-megamenu-item" data-jump="piece-14" data-img="images/earring-stripe-blackwhite.jpg" data-desc="Crisp black and white pinstripe bead hoop earrings.">Pinstripe Hoop Earrings</button>
            <button class="nav-megamenu-item" data-jump="piece-15" data-img="images/necklace-rainbow-fringe.jpg" data-desc="A cascading multicolor seed-bead fringe statement necklace.">Carnival Fringe Necklace</button>
            <button class="nav-megamenu-item" data-jump="piece-16" data-img="images/necklace-mustard-wood.jpg" data-desc="Mustard wood beads strung with black seed beads.">Mustard Wood Bead Necklace</button>
            <button class="nav-megamenu-item" data-jump="piece-17" data-img="images/necklace-pearl-multistrand-1.jpg" data-desc="A layered white pearl necklace, multiple strands deep.">Pearl Multi-Strand Necklace</button>
            <button class="nav-megamenu-item" data-jump="piece-18" data-img="images/necklace-pearl-multistrand-2.jpg" data-desc="A full-cascade white pearl necklace, many strands long.">Cascade Pearl Necklace</button>
            <button class="nav-megamenu-item" data-jump="piece-19" data-img="images/bag-ruby-beaded-1.jpg" data-desc="A garnet-red beaded handbag with wooden ring handles.">Garnet Bead Handbag</button>
            <button class="nav-megamenu-item" data-jump="piece-20" data-img="images/bracelet-pearl-cuff.jpg" data-desc="A wide pearl beaded cuff bracelet with silver spacers.">Pearl Beaded Cuff Bracelet</button>
            <button class="nav-megamenu-item" data-jump="piece-21" data-img="images/bag-teal-bow-tote.jpg" data-desc="A teal beaded tote with a black satin bow and beaded handle.">Teal Beaded Bow Tote</button>
            <button class="nav-megamenu-item" data-jump="piece-22" data-img="images/necklace-fringe-multicolor-short.jpg" data-desc="A short multicolor seed-bead fringe necklace.">Confetti Fringe Necklace</button>
            <button class="nav-megamenu-item" data-jump="piece-23" data-img="images/cape-gold-mesh.jpg" data-desc="A golden netted beaded shoulder cape.">Golden Mesh Shoulder Cape</button>
          </div>
          <div class="nav-megamenu-preview">
            <div class="nav-megamenu-preview-photo">
              <img id="megaMenuPreviewImg" src="images/image_1.png" alt="">
            </div>
            <p id="megaMenuPreviewDesc">Browse every handmade piece in one place — jewelry and bags side by side.</p>
          </div>
        </div>
      </div>
      <a href="contact.php" class="<?php echo $activePage === 'contact' ? 'active-link' : ''; ?>">Contact</a>
    </nav>
    <div class="nav-ctas">
      <a href="https://wa.me/260976425817" class="nav-cta-ghost" target="_blank" rel="noopener">Order on WhatsApp</a>
      <a href="contact.php" class="nav-cta">Contact Us</a>
    </div>
    <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
    </button>
  </div>
  <div class="mobile-menu" id="mobileMenu">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="blog.php">Blog</a>
    <a href="gallery.php" class="mobile-menu-gallery-link">Gallery
      <svg class="nav-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
    </a>
    <a href="contact.php">Contact</a>
    <a href="https://wa.me/260976425817" class="nav-cta-ghost" target="_blank" rel="noopener">Order on WhatsApp</a>
    <a href="contact.php" class="nav-cta">Contact Us</a>
  </div>
</header>

<script>
  // Mobile menu toggle (shared across all pages)
  const navToggle = document.getElementById('navToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  navToggle.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', isOpen);
  });
  mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    navToggle.setAttribute('aria-expanded', 'false');
  }));

  // Gallery nav dropdown (mega-menu) — shared across all pages
  const galleryDropdown = document.getElementById('galleryDropdown');
  const galleryTrigger = document.getElementById('galleryDropdownTrigger');
  const megaMenuItems = document.querySelectorAll('.nav-megamenu-item');
  const megaMenuImg = document.getElementById('megaMenuPreviewImg');
  const megaMenuDesc = document.getElementById('megaMenuPreviewDesc');

  function setMegaMenuOpen(open) {
    galleryDropdown.classList.toggle('open', open);
    galleryTrigger.setAttribute('aria-expanded', open);
  }

  galleryDropdown.addEventListener('mouseenter', () => setMegaMenuOpen(true));
  galleryDropdown.addEventListener('mouseleave', () => setMegaMenuOpen(false));

  document.addEventListener('click', (e) => {
    if (!galleryDropdown.contains(e.target)) setMegaMenuOpen(false);
  });

  megaMenuItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      megaMenuImg.src = item.dataset.img;
      megaMenuDesc.textContent = item.dataset.desc;
    });
    item.addEventListener('click', () => {
      const jump = item.dataset.jump;
      megaMenuItems.forEach(i => i.classList.toggle('active', i === item));
      setMegaMenuOpen(false);

      // On the gallery page itself, filter in place and scroll to the piece.
      // On every other page, jump to the gallery page and let it pick up from there.
      if (typeof applyFilter === 'function' && document.getElementById('gallerySpread')) {
        applyFilter('all');

        if (jump === 'all') {
          document.getElementById('gallerySpread').scrollIntoView({ behavior: 'smooth', block: 'start' });
          return;
        }

        const target = document.getElementById(jump);
        if (!target) return;
        target.scrollIntoView({ behavior: 'smooth', block: 'center' });
        target.classList.add('piece-highlight');
        setTimeout(() => target.classList.remove('piece-highlight'), 1800);
      } else {
        window.location.href = jump === 'all' ? 'gallery.php' : 'gallery.php#' + jump;
      }
    });
  });
</script>
