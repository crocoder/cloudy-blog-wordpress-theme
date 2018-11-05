<?php
/**
 * The header for Cloudy Blog theme
 */
?>

<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div class="site">

      <header class="site-header">

        <div class="site-custom-header">
          <div class="site-branding">
            <a href="/" rel="home" class="custom-logo-link"><img src="<?php echo get_template_directory_uri(). '/includes/img/cloudy-blog.png'; ?>" width="67" height="50" alt="Cloudy Blog"></a>
            <h1 class="site-title"><a href="/" rel="home">Cloudy</a></h1>
            <p class="site-description">Short site description</p>
          </div>
        </div>
          
        <nav class="navigation navigation--main">
          <button class="menu-toggler" aria-controls="main-menu" aria-expanded="false">
            <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
            </svg>
          </button>
          <ul class="menu" id="main-menu">
            <li class="menu-item current-menu-item menu-item-has-children">
              <a href="/">Home</a>
              <ul class="sub-menu">
                <li class="menu-item"><a href="">Example Item</a></li>
                <li class="menu-item"><a href="">Example Item</a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="/">About Me</a></li>
            <li class="menu-item"><a href="/">Contact</a></li>        
          </ul>
        </nav>

      </header><!-- .site-header -->

      <div class="site-content container">