<?php
// ============================================================
//  Mutende Crafts — Admin login settings
// ============================================================
//
//  HOW TO CHANGE THE PASSWORD
//  --------------------------
//  1. On any computer with PHP installed, open a terminal and run
//     (swap in the password you actually want):
//
//       php -r "echo password_hash('YourNewPassword', PASSWORD_DEFAULT);"
//
//  2. It will print a long string starting with $2y$ or $2b$.
//     Copy that whole string.
//  3. Paste it below, replacing the text between the quotes for
//     ADMIN_PASSWORD_HASH. Save the file.
//
//  Never put your plain password in this file — only the hash.
//  Keep this file private; don't send it to anyone outside your team.
// ============================================================

define('ADMIN_USERNAME', 'mercy');

// Default password: MutendeCrafts2026
// Please change this before sharing the dashboard link with your team.
define('ADMIN_PASSWORD_HASH', '$2b$10$HLNi.5tsqr383B8YPegkquKADhdG4Alz/aYLKL0RqcPnhOUN3ay8e');
