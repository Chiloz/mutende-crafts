<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery — Mutende Crafts, Lusaka</title>
<link rel="icon" type="image/png" href="images/image_1.png">
<meta name="description" content="Browse handmade beaded jewelry, handbags, and clutches by Mutende Crafts in Lusaka, Zambia. Every piece custom built — yours can be too.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php $activePage = 'gallery'; include __DIR__ . '/header.php'; ?>

<main id="top">

  <!-- ============ GALLERY ============ -->
  <section class="gallery" id="gallery" style="padding-top: 56px;">
    <div class="wrap section-pad">
      <div class="section-head reveal">
        <span class="eyebrow">Handmade Gallery</span>
        <h2>Recent pieces, straight off the worktable.</h2>
        <p>A look at what's left Mercy's hands lately. Every piece below was custom built — yours can be too, in whatever colors you bring us.</p>
      </div>

      <div class="gallery-filter reveal" id="galleryFilter">
        <button class="filter-btn active" data-filter="all">All Pieces</button>
        <button class="filter-btn" data-filter="bracelets">Bracelets</button>
        <button class="filter-btn" data-filter="earrings">Earrings</button>
        <button class="filter-btn" data-filter="necklaces">Necklaces</button>
        <button class="filter-btn" data-filter="jewelry">Capes &amp; Collars</button>
        <button class="filter-btn" data-filter="bags">Handbags &amp; Clutches</button>
      </div>

      <div class="spread" id="gallerySpread">

        <div class="piece reveal" id="piece-1" data-cat="jewelry">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_3.jpg" alt="Black and gold beaded shoulder cape with fringe, draped over the back" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Beaded Shoulder Cape</h4>
              <div class="piece-meta">
                <span class="tag">Jewelry</span>
                <span class="price">K200</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-2" data-cat="jewelry">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/collar-black-bodychain-front.jpg" alt="Black and gold beaded statement collar with draped body-chain fringe, front view" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Statement Bead Collar</h4>
              <div class="piece-meta">
                <span class="tag">Jewelry</span>
                <span class="price">K200</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-3" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_5.jpg" alt="Black and clear crystal beaded flap clutch handbag" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Crystal Flap Clutch</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K400</span>
              </div>
            </div>
          </div>
        </div>



        <div class="piece reveal" id="piece-5" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_7.jpg" alt="Multicolor jewel-toned beaded round handbag with chain strap" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Jewel-Tone Round Bag</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K400</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-6" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_8.jpg" alt="Teal beaded handbag with satin bow detail and top handle" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Teal Bow Top-Handle Bag</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-7" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_9.jpg" alt="Black and silver beaded handbag with round wooden ring handle and organza ribbon" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Ring-Handle Beaded Bag</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K400</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-8" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_10.jpg" alt="Ombre pearl beaded handbag fading from clear to pink to purple" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Ombré Pearl Handbag</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K350</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-9" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_11.jpg" alt="Red crystal beaded handbag with silver chain strap" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Ruby Crystal Bag</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K400</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-10" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/image_12.jpg" alt="Teal and black beaded clutch with satin bow and chain strap" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Emerald Bow Clutch</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K400</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-11" data-cat="earrings">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/earring-black-faceted.jpg" alt="Black faceted bead hoop earrings" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Faceted Onyx Hoop Earrings</h4>
              <div class="piece-meta">
                <span class="tag">Earrings</span>
                <span class="price">K35</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-12" data-cat="earrings">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/earring-marble-brown.jpg" alt="Brown and white marbled bead hoop earrings" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Cocoa Marble Hoop Earrings</h4>
              <div class="piece-meta">
                <span class="tag">Earrings</span>
                <span class="price">K35</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-13" data-cat="earrings">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/earring-marble-grey.jpg" alt="Grey and black marbled bead hoop earrings" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Storm Marble Hoop Earrings</h4>
              <div class="piece-meta">
                <span class="tag">Earrings</span>
                <span class="price">K35</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-14" data-cat="earrings">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/earring-stripe-blackwhite.jpg" alt="Black and white striped bead hoop earrings" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Pinstripe Hoop Earrings</h4>
              <div class="piece-meta">
                <span class="tag">Earrings</span>
                <span class="price">K35</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-15" data-cat="necklaces">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/necklace-rainbow-fringe.jpg" alt="Multicolor seed bead fringe statement necklace worn on model" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Carnival Fringe Necklace</h4>
              <div class="piece-meta">
                <span class="tag">Necklace</span>
                <span class="price">K350</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-16" data-cat="necklaces">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/necklace-mustard-wood.jpg" alt="Mustard wood bead and black seed bead necklace worn on model" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Mustard Wood Bead Necklace</h4>
              <div class="piece-meta">
                <span class="tag">Necklace</span>
                <span class="price">K400</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-17" data-cat="necklaces">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/necklace-pearl-multistrand-1.jpg" alt="White pearl multi-strand layered necklace on display bust" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Pearl Multi-Strand Necklace</h4>
              <div class="piece-meta">
                <span class="tag">Necklace</span>
                <span class="price">K20</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-18" data-cat="necklaces">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/necklace-pearl-multistrand-2.jpg" alt="White pearl multi-strand layered necklace, full cascade view" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Cascade Pearl Necklace</h4>
              <div class="piece-meta">
                <span class="tag">Necklace</span>
                <span class="price">K500</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-19" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/bag-ruby-beaded-1.jpg" alt="Red beaded handbag with wooden ring handles and black organza lining" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Garnet Bead Handbag</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K400</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-20" data-cat="bracelets">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/bracelet-pearl-cuff.jpg" alt="White pearl beaded cuff bracelet with silver spacer beads, two angles" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Pearl Beaded Cuff Bracelet</h4>
              <div class="piece-meta">
                <span class="tag">Bracelet</span>
                <span class="price">K350</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-21" data-cat="bags">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/bag-teal-bow-tote.jpg" alt="Teal beaded tote bag with black satin bow and beaded top handle" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Teal Beaded Bow Tote</h4>
              <div class="piece-meta">
                <span class="tag">Handbag</span>
                <span class="price">K300</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-22" data-cat="necklaces">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/necklace-fringe-multicolor-short.jpg" alt="Multicolor seed bead fringe necklace, short single-strand drop" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Confetti Fringe Necklace</h4>
              <div class="piece-meta">
                <span class="tag">Necklace</span>
                <span class="price">K300</span>
              </div>
            </div>
          </div>
        </div>

        <div class="piece reveal" id="piece-23" data-cat="jewelry">
          <div class="piece-frame">
            <div class="piece-photo">
              <img src="images/cape-gold-mesh.jpg" alt="Golden beaded mesh shoulder cape, draped netted diamond pattern" loading="lazy">
              <div class="piece-overlay">
                <span class="piece-view-btn">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.6" y2="16.6"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                  Quick View
                </span>
              </div>
            </div>
            <div class="piece-caption">
              <h4>Golden Mesh Shoulder Cape</h4>
              <div class="piece-meta">
                <span class="tag">Jewelry</span>
                <span class="price">K130</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ PROCESS ============ -->
  <section class="process" id="process">
    <div class="wrap section-pad">
      <div class="section-head reveal">
        <span class="eyebrow">How A Custom Order Works</span>
        <h2>You bring the idea. We bring the beads.</h2>
        <p>Every piece starts as a conversation, not a catalog number. Here's what happens after you message us.</p>
      </div>
      <div class="process-grid">
        <div class="process-step reveal">
          <span class="step-mark">i.</span>
          <h3>Tell us what you want</h3>
          <p>Message us on WhatsApp or fill in the order form with your colors, the occasion, and the kind of piece you're after.</p>
        </div>
        <div class="process-step reveal">
          <span class="step-mark">ii.</span>
          <h3>We confirm the design</h3>
          <p>Mercy talks it through with you — bead types, sizing, finish — until the design matches what's in your head.</p>
        </div>
        <div class="process-step reveal">
          <span class="step-mark">iii.</span>
          <h3>It's built, by hand</h3>
          <p>Every strand is strung, knotted, and finished individually. No two pieces, even of the same design, come out identical.</p>
        </div>
        <div class="process-step reveal">
          <span class="step-mark">iv.</span>
          <h3>You receive it</h3>
          <p>Pickup in Lusaka or delivery arranged on confirmation — your piece, made exactly to brief.</p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
  <button class="lightbox-close" id="lightboxClose" aria-label="Close image">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>
  <div class="lightbox-inner">
    <img id="lightboxImg" src="" alt="">
    <h4 id="lightboxTitle"></h4>
    <p id="lightboxTag"></p>
  </div>
</div>

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

  // Gallery filter
  const filterBtns = document.querySelectorAll('.filter-btn');
  const pieces = document.querySelectorAll('.piece');

  function applyFilter(filter) {
    filterBtns.forEach(b => b.classList.toggle('active', b.dataset.filter === filter));
    pieces.forEach(p => {
      const show = filter === 'all' || p.dataset.cat === filter;
      p.style.display = show ? '' : 'none';
    });
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => applyFilter(btn.dataset.filter));
  });

  // Apply filter from URL on load, e.g. gallery.html?filter=jewelry
  const initialFilter = new URLSearchParams(window.location.search).get('filter');
  if (initialFilter) applyFilter(initialFilter);

  // Note: the gallery mega-menu dropdown (open/close, hover preview, item
  // click navigation) now lives in header.php since it's shared on every page.

  // Jump straight to a piece if arriving via a #piece-N link from another page
  if (window.location.hash) {
    const hashTarget = document.getElementById(window.location.hash.slice(1));
    if (hashTarget) {
      setTimeout(() => {
        hashTarget.scrollIntoView({ behavior: 'smooth', block: 'center' });
        hashTarget.classList.add('piece-highlight');
        setTimeout(() => hashTarget.classList.remove('piece-highlight'), 1800);
      }, 100);
    }
  }

  // Lightbox
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxTitle = document.getElementById('lightboxTitle');
  const lightboxTag = document.getElementById('lightboxTag');
  const lightboxClose = document.getElementById('lightboxClose');

  pieces.forEach(piece => {
    piece.addEventListener('click', () => {
      const img = piece.querySelector('img');
      const title = piece.querySelector('h4').textContent;
      const tag = piece.querySelector('.tag').textContent;
      lightboxImg.src = img.src;
      lightboxImg.alt = img.alt;
      lightboxTitle.textContent = title;
      lightboxTag.textContent = tag;
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
</script>

</body>
</html>
