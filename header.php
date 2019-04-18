<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>

<header id="header" class="container">
  <div class="nav">
    <div id="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/Logo.png" alt="Logo LifeLens" title="LifeLens Financial">
      </a>
    </div>
    <div id="nav-menu-header">
      <?php wp_nav_menu( array(
        'theme_location'  => 'primary',
        'container'       => false,
        'menu_class'      => 'menu-header'
      )); ?>
    </div>
  </div>

</header>

<main>
  <div class="container">





