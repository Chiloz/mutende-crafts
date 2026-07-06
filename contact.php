<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact &amp; Custom Orders — Mutende Crafts, Lusaka</title>
<link rel="icon" type="image/png" href="images/image_1.png">
<meta name="description" content="Start a custom beaded jewelry or handbag order with Mutende Crafts. Message us on WhatsApp or fill in the order form — Lusaka, Zambia.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php $activePage = 'contact'; include __DIR__ . '/header.php'; ?>

<main id="top">
 <!-- ============ MAP ============ -->
  <section class="map-section reveal">
    <div class="wrap section-pad">
      <div class="section-head reveal">
        <span class="eyebrow">Visit Us</span>
        <h2>Find our workshop.</h2>
        <p>Based in Kafue Estates, Lusaka — stop by or send a message first to arrange a time.</p>
      </div>
      <div class="map-embed">
        <iframe
          src="https://maps.google.com/maps?q=Kafue%20Estates%2C%20Lusaka%2C%20Zambia&z=14&output=embed"
          width="100%"
          height="350"
          style="border:0; border-radius: 12px;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

  <!-- ============ CONTACT ============ -->
  <section class="contact" id="contact" style="padding-top: 56px;">
    <div class="wrap section-pad">
      <div class="section-head reveal">
        <span class="eyebrow">Start Your Order</span>
        <h2>Tell us what you're picturing.</h2>
        <p>Message us directly on WhatsApp, or fill in the quick form below and we'll reply with next steps.</p>
      </div>

      <div class="contact-grid">

        <div class="contact-card reveal">
          <h3>Reach us directly</h3>
          <p>Fastest way to start: send a WhatsApp message with a rough idea, your colors, and when you need it by.</p>
          <div class="contact-list">
            <div class="contact-row">
              <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></span>
              <div>
                <span class="label">WhatsApp</span>
                <a href="https://wa.me/260976425817" target="_blank" rel="noopener">0976 425 817</a>
              </div>
            </div>
            <div class="contact-row">
              <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16v16H4V4z" stroke-linejoin="round"/><path d="M4 6l8 7 8-7" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
              <div>
                <span class="label">Email</span>
                <a href="mailto:mutendecrafts25@gmail.com">mutendecrafts25@gmail.com</a>
              </div>
            </div>
            <div class="contact-row">
              <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
              <div>
                <span class="label">Workshop</span>
                <span class="value">Kafue Estates C5, Lusaka</span>
              </div>
            </div>
            <div class="contact-row">
              <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2" stroke-linecap="round"/></svg></span>
              <div>
                <span class="label">Owner</span>
                <span class="value">Mercy Besa Chinunka</span>
              </div>
            </div>
          </div>
        </div>

        <form class="order-form reveal" id="orderForm">
          <h3>Or send us the details here</h3>
          <p class="intro">We'll save your request and email Mercy directly, and reply to the email address you provide.</p>

          <div class="field">
            <label for="f-name">Your name</label>
            <input type="text" id="f-name" name="name" placeholder="e.g. Chanda Mwale" required>
          </div>

          <div class="field">
            <label for="f-email">Your email</label>
            <input type="email" id="f-email" name="email" placeholder="e.g. chanda@email.com" required>
          </div>

          <div class="field-row">
            <div class="field">
              <label for="f-item">What are you after?</label>
              <select id="f-item" name="item" required>
                <option value="" disabled selected>Choose one</option>
                <option>Necklace</option>
                <option>Bracelet</option>
                <option>Earrings</option>
                <option>Headband</option>
                <option>Beaded handbag / clutch</option>
                <option>Something else</option>
              </select>
            </div>
            <div class="field">
              <label for="f-colors">Preferred colors</label>
              <input type="text" id="f-colors" name="colors" placeholder="e.g. black &amp; gold">
            </div>
          </div>

          <div class="field">
            <label for="f-details">Describe what you're picturing</label>
            <textarea id="f-details" name="details" placeholder="Design ideas, occasion, sizing, deadline — anything that helps us get it right."></textarea>
          </div>

          <button type="submit" class="submit-btn" id="submitBtn">
            <span class="btn-label">Send Order</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </button>
          <p class="form-note">Prefer email? Write to <a href="mailto:mutendecrafts25@gmail.com" style="color:var(--garnet); font-weight:600;">mutendecrafts25@gmail.com</a> instead.</p>
        </form>

      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/footer.php'; ?>

<div class="toast" id="toast">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
  <span id="toastMsg">Opening WhatsApp…</span>
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

  // Order form -> save to DB + email, then open WhatsApp
  const orderForm = document.getElementById('orderForm');
  const submitBtn = document.getElementById('submitBtn');
  const toast = document.getElementById('toast');
  const toastMsg = document.getElementById('toastMsg');

  function showToast(msg) {
    toastMsg.textContent = msg;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 3000);
  }

  orderForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const name = document.getElementById('f-name').value.trim();
    const email = document.getElementById('f-email').value.trim();
    const item = document.getElementById('f-item').value.trim();
    const colors = document.getElementById('f-colors').value.trim();
    const details = document.getElementById('f-details').value.trim();

    if (!name || !email || !item) {
      showToast("Please add your name, email, and what you're after.");
      return;
    }

    submitBtn.disabled = true;
    showToast('Sending your message…');

    try {
      const res = await fetch('process_order.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ name, email, item, colors, details })
      });
      const data = await res.json();

      if (!data.success) {
        showToast(data.message || 'Something went wrong. Please try again.');
        submitBtn.disabled = false;
        return;
      }

      showToast('Message sent successfully!');
      orderForm.reset();
    } catch (err) {
      showToast('Network error — please try again.');
    } finally {
      submitBtn.disabled = false;
    }
  });
</script>

</body>
</html>
