<?php 
/**
 * Cloudy Blog functions
 */

/**
 * Enqueue scripts and styles.
 */
function cloudyblog_scripts() {
	wp_enqueue_style( 'cloudyblog-style', get_stylesheet_uri() );
	wp_enqueue_script( 'cloudyblog-script', get_template_directory_uri() . '/js/cloudy-blog.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'cloudyblog_scripts' );