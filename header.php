<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.google.com/selection?preview.text=Home&categoryFilters=Feeling:%2FExpressive%2FCalm" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Cormorant:wght@500&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header" id="main-header">
  <div class="header-inner">
    
    <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">HORIZON PHOTOGRAPHY</a>
    </div>

    
    <nav class="main-menu">
      <ul class="menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li><a href="<?php echo esc_url( site_url( '/portfolio' ) ); ?>">PORTFOLIOS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#">PAGES</a></li>
      </ul>
    </nav>

    <div class="cta-button">
      <a href="#contact" class="btn">GET HORIZON</a>
    </div>

    <button id="burger-toggle" aria-label="Toggle menu">
      <span class="burger-bar"></span>
      <span class="burger-bar"></span>
      <span class="burger-bar"></span>
    </button>

    <div id="mobile-menu" class="mobile-menu">
      <button id="close-menu" aria-label="Close menu">&times;</button>
      <ul class="mobile-nav">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
        <li><a href="<?php echo esc_url( site_url( '/portfolio' ) ); ?>">PORTFOLIOS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#">PAGES</a></li>
        <li><a href="#contact" class="btn">GET HORIZON</a></li>
      </ul>
    </div>

  </div>
</header>
