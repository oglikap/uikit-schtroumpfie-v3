<?php

// Add scripts and stylesheets
function schtroumpfie_scripts() {
  wp_enqueue_style( 'uikit_css', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/css/uikit.min.css' );
  wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/assets/css/custom.css' );

  wp_enqueue_script( 'uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/js/uikit.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'uk_icons_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/js/uikit-icons.min.js' );

}
add_action( 'wp_enqueue_scripts', 'schtroumpfie_scripts' );

add_image_size( 'square-small', 150, 150, true );
add_image_size( 'square', 250, 250, true );
add_image_size( 'square-medium', 400, 400, true );
add_image_size( 'square-big', 500, 500, true );
add_image_size( 'widescreen', 320, 180, true );
add_image_size( 'hvrbox', 250, 300, true );

// Custom menu
function wpb_schtroumpfie_menu() {
  register_nav_menu('schtroumpfie-menu',__('Schtroumpfie Menu'));
}
add_action( 'init', 'wpb_schtroumpfie_menu');

function wpb_schtroumpfie_menu_blog() {
  register_nav_menu('schtroumpfie-menu-blog', __('Schtroumpfies Menu-blog'));
}
add_action( 'init', 'wpb_schtroumpfie_menu_blog' );

// Create widgets
function schtroumpfie_create_widget( $description ) {

	register_sidebar(array(
		'name' => __( 'Page sidebar 1' ),
		'id' => 'sidebar-1',
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

  register_sidebar(array(
		'name' => __( 'Page sidebar 2' ),
		'id' => 'sidebar-2',
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

  register_sidebar(array(
		'name' => __( 'Page sidebar 3' ),
		'id' => 'sidebar-3',
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}
schtroumpfie_create_widget( 'Page Sidebar', 'page', 'Displays on the bottom of pages with a sidebar' );


/********************************************************************************
excerpt length
********************************************************************************/
function schtroumpfie_excerpt_length( $length ) {
  return 16;
}
add_filter( 'excerpt_length', 'schtroumpfie_excerpt_length', 999 );

/**********************************************************************************
schtroumpfie_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/
function schtroumpfie_theme_support() {

  /* post formats */
  add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

  /* post thumbnails */
  add_theme_support( 'post-thumbnails', array( 'post', 'page', 'websites', 'toneel' ) );

  /* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );

  // Wordpress titles
  add_theme_support( 'title-tag' );

  /* Logo support */
  add_theme_support( 'custom-logo', array(
  	'height'      => 240, // set to your dimensions
  	'width'       => 240,
  	'flex-height' => true,
  	'flex-width'  => true,
  ) );

}
add_action( 'after_setup_theme', 'schtroumpfie_theme_support' );
