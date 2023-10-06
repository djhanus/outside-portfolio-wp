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
        <a href="<?php echo site_url(); ?>"<span class="logo"><?=bloginfo('name');?></span></a> is a design studio and graphic company sepcializing in <span class="special">design</span>.
      </div>

      <div class="main-menu-container">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'primary-menu'
        ));
        ?>

        <div class="dark-mode-button">
          <img src="<?php echo get_template_directory_uri(); ?>/img/temp/pill.png" alt="darkmode-btn">
        </div>
        
      </div>

    </div>
  </header>
