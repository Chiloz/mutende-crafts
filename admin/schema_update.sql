-- Run this once against the mutende_crafts database (phpMyAdmin, or the
-- mysql command line) before using the admin dashboard.
--
-- It adds three columns to the existing "orders" table so the dashboard
-- can track which messages have been replied to.
--
-- If a column already exists you'll get a harmless "Duplicate column" error
-- for that line only — just run the remaining lines.

ALTER TABLE orders ADD COLUMN status VARCHAR(20) NOT NULL DEFAULT 'new';
ALTER TABLE orders ADD COLUMN reply_message TEXT NULL;
ALTER TABLE orders ADD COLUMN replied_at DATETIME NULL;
