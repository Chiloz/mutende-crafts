# Mutende Crafts — Admin Dashboard

Lets Mercy view every message submitted through the website's order form, and
reply straight from the browser — no more going into the database.

## Where it lives
- Link: bottom of every page footer → **"Staff Login"** (or go straight to
  `yoursite.com/admin/login.php`)
- Default login:
  - Username: `mercy`
  - Password: `MutendeCrafts2026`

**Change the password before handing this over** — see the instructions at
the top of `admin/includes/auth-config.php`. It's a couple of copy-paste
steps, no coding needed.

## One-time setup: run the SQL migration
The dashboard tracks which messages have been replied to, which needs three
new columns on the existing `orders` table. Run `admin/schema_update.sql`
once against the live database (via phpMyAdmin's "SQL" tab, or the `mysql`
command line). It's safe — it only adds columns, doesn't touch existing data.

The dashboard still works even if this hasn't been run yet (it'll just show
everything as "New" and display a reminder banner), but replies won't be
saved until it's done.

## What it does
- Lists every order/message, newest first, with **New** / **Replied** status
  and a filter for each.
- Click a message to expand it and see the full details.
- **Send Reply** — emails the customer directly (via the same `mail()` setup
  `process_order.php` already uses) and marks the message as replied.
- **Mark as Replied (no email)** — for when Mercy replied over WhatsApp or
  phone instead, and just wants to log it.

## Notes
- Login is session-based with a 5-attempt lockout (60 seconds) to slow down
  guessing.
- The dashboard pages are marked `noindex` so search engines won't list them.
- Email sending depends on the server's mail configuration — same caveat as
  the existing order form (see the note already in `process_order.php`).
