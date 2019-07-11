<?php
/**
 * The template for displaying the header
 *
 *
 */?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Call the wordpress header to get meta tags and enqueue styles -->
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  </head>

  <body>

  <nav class="nav">
    <div class="nav-container">
      <div class="links">
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="<?php echo site_url(); ?>">Home</a>
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="<?php echo site_url(); ?>/about">Me</a>
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="https://github.com/BonzaOwl" target="_blank"><i class="fab fa-github"></i></a>
      <a class="link" style="padding-left:10px; padding-right: 10px;font-weight:bold;font-size:18px;text-decoration:none;color: #ffd17e" href="https://twitter.com/BonzaOwl" target="_blank"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </nav>