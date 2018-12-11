<?php 
/**
 * Cloudy Blog functions
 */

function cloudyblog_setup(){


  // Custom logo
  add_theme_support( 'custom-logo', array(
    'height'      => 50,
    'width'       => 67,
    'flex-width'  => true,
    'flex-height' => false,
  ) );
  
  // Custom header
  add_theme_support( 'custom-header', array(
		'default-image'          => get_template_directory_uri() . '/includes/img/default-header-rain.jpg',
		'header-text'            => false,
		'width'                  => 2000,
		'height'                 => 280,
    'flex-height'            => true,
  ) );
  
  // Register default header
  register_default_headers( array(
		'rain' => array(
			'url'           => '%s/includes/img/default-header-rain.jpg',
      'thumbnail_url' => '%s/includes/img/default-header-rain.jpg',
      'description'   => 'Rain',
    ),
    'face' => array(
			'url'           => '%s/includes/img/default-header-face.jpg',
      'thumbnail_url' => '%s/includes/img/default-header-face.jpg',
      'description'   => 'Face',
		),
  ) );
  
}
add_action('after_setup_theme', 'cloudyblog_setup');


/**
 * Enqueue scripts and styles.
 */
function cloudyblog_scripts() {

  // Fonts
  wp_enqueue_style( 'cloudyblog-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400%7CPoppins:600,700' );

  // CSS
  wp_enqueue_style( 'cloudyblog-style', get_stylesheet_uri() );
  
  // JS
	wp_enqueue_script( 'cloudyblog-script', get_template_directory_uri() . '/js/cloudy-blog.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'cloudyblog_scripts' );
