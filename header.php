<!doctype html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/scss/vendor/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/scss/vendor/slick/slick-theme.css"/>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/slick.min.js"></script>

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

        <span class="hide-mobile"></span>

        <span class="special1">
            <a onclick="location.href='<?php echo site_url(); ?>/#brand-identity'">
                <?php echo get_field('madlib_special1', 'options'); ?>
            </a>
            <div class="special1-reveal">
                    <img src="<?php echo get_field('madlib_special1_reveal', 'options'); ?>" />
            </div>
        </span>

        <span class="hide-mobile">and</span>

        <span class="special2">
            <a onclick="location.href='/shop'">
                <?php echo get_field('madlib_special2', 'options'); ?>
            </a>
            <div class="special2-reveal">
                <img src="<?php echo get_field('madlib_special2_reveal', 'options'); ?>" />111
            </div>
        </span>

        <span class="hide-mobile">.</span>

      </div>

      <div class="main-menu-container">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'primary-menu'
        ));
        ?>

        <!-- <div class="dark-mode-button">
          <img src="<?php echo get_field('dark_mode_icon','options'); ?>" alt="darkmode-btn">
        </div> -->
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
      </div> <!-- /.mobile-menu-wrapper -->

    </div>
  </header>
