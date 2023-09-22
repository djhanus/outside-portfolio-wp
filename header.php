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
        <a href="<?=home_url()?>">
          <span class="brand"><?=bloginfo('name');?></span>
        </a>
      </div>
      <a href="#" class="header-navigation-button"><span></span></a>

      <div class="main-menu-container">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'primary-menu'
        ));
        ?>
      </div>

    </div>
  </header>
