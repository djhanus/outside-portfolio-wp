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

      <div class="logo-container">
        <a href="<?php echo site_url(); ?>">
          <span class="logo">Outside</span>
        </a>
        is a
        <?php echo get_field('madlib_noun', 'options'); ?>
        <?php echo get_field('madlib_verb', 'options'); ?>
        in
        <span class="special1"><?php echo get_field('madlib_special1', 'options'); ?></span>
        and
        <span class="special2"><?php echo get_field('madlib_special2', 'options'); ?></span>.

        <div class="special1-reveal">
          <img src="<?php echo get_field('madlib_special1_reveal', 'options'); ?>">
        </div>
        <div class="special1-reveal">
          <img src="<?php echo get_field('madlib_special1_reveal', 'options'); ?>">
        </div>
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

    </div>
  </header>
