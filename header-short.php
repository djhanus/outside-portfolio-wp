<!doctype html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://use.typekit.net/xal0igt.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">

      <div class="logo-container short">
        <a href="<?php echo site_url(); ?>">
          <span class="logo">Outside</span>
        </a>
      </div>

      <div class="main-menu-container">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'primary-menu'
        ));
        ?>

        <div class="dark-mode-button">
          <img src="<?php echo get_field('dark_mode_icon','options'); ?>" alt="darkmode-btn">
        </div>
      </div>

      <!-- HAMBURGER MENU ICON -->
      <div class="hamburger-wrapper">
        <div class="hamburger-menu"></div>
      </div>

      <!-- MOBILE MENU WRAPPER -->
      <div class="mobile-menu-wrapper">
        frjtfjygyjgf<br />
        frjtfjygyjgf<br />
        frjtfjygyjgf<br />
        frjtfjygyjgf<br />
        fmtfyfk
      </div> <!-- /.mobile-menu-wrapper -->

    </div>
  </header>
