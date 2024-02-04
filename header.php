<!doctype html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width">
  <!-- <link rel="stylesheet" href="https://use.typekit.net/xal0igt.css"> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">

      <div class="logo-container">
        <a href="<?php echo site_url(); ?>">
          <span class="logo">Outside</span>
        </a>
        <span class="hide-mobile">is a</span>

        <span class="hide-mobile">
        <?php echo get_field('madlib_noun', 'options'); ?>
        <?php echo get_field('madlib_verb', 'options'); ?>
        </span>

        <span class="hide-mobile">in</span>

        <span class="special1"><?php echo get_field('madlib_special1', 'options'); ?><div class="special1-reveal"><img src="<?php echo get_field('madlib_special1_reveal', 'options'); ?>" /></div></span>

        <span class="hide-mobile">and</span>

        <span class="special2"><?php echo get_field('madlib_special2', 'options'); ?><div class="special2-reveal"><img src="<?php echo get_field('madlib_special2_reveal', 'options'); ?>" /></div></span>

        <span class="hide-mobile">.</span>

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
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'primary-menu'
        ));
        ?>
        <div class="logo-container">
          <!-- copied from footer -->
          <div class="year">
            <?php echo get_field('year', 'options'); ?>
          </div>
          <div class="location">
            <?php echo get_field('location', 'options'); ?>
          </div>
        </div>
      </div> <!-- /.mobile-menu-wrapper -->

    </div>
  </header>
