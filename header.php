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
          <div class="site-custom-header-media"><?php the_custom_header_markup(); ?></div>
          <div class="site-branding">
            <?php the_custom_logo(); ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif;
            $cloudyblog_description = get_bloginfo( 'description', 'display' );
            if ( $cloudyblog_description ) :
            ?>
            <p class="site-description"><?php echo $cloudyblog_description; ?></p>
            <?php endif; ?>
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