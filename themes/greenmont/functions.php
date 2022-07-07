<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


// Load in our CSS
function greenmont_enqueue_styles() {

  wp_enqueue_style( 'font_awesome_css', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css' );
  wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
  wp_enqueue_style( 'playfair-display', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap' );
    wp_enqueue_style( 'barlow', 'https://fonts.googleapis.com/css2?family=Barlow:wght@200;400&display=swap' );
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/css/style.css', [], time(), 'all' );
  wp_enqueue_style( 'lightbox-css', get_stylesheet_directory_uri() . '/css/lightbox.css', [], time(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'greenmont_enqueue_styles' );

// Load in our JavaScript
function greenmont_enqueue_js() {
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), true);
  wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
  wp_enqueue_script( 'popper_js_2', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' );
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js' );


  wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/js/lightbox.js' );

	//wp_enqueue_script( 'dropdown_js', get_template_directory_uri() . '/js/example.js' );
}



add_action( 'wp_enqueue_scripts', 'greenmont_enqueue_js');





/**
 * Register Custom Navigation Walker

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

 */

// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'main-menu', 'greenmont' ),
    'mobile-menu' => esc_html__( 'mobile-menu', 'greenmont' ),
    'subnav' => esc_html__( 'subnav', 'greenmont' ),
]);

?>
