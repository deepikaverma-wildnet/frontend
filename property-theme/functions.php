<?php
/**
 * Theme setup and resource enqueuing.
 *
 * @package PropertyTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function property_theme_setup() {
    // Add dynamic title tag support for SEO
    add_theme_support( 'title-tag' );

    // Enable featured images
    add_theme_support( 'post-thumbnails' );

    // Register primary nav menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'property-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'property_theme_setup' );

function property_theme_enqueue_assets() {
    // Google Fonts: Open Sans
    wp_enqueue_style( 'google-font-open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap', array(), null );
    
    // Bootstrap 5 CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );
    
    // Font Awesome 6
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );
    
    // Theme Main Stylesheet
    wp_enqueue_style( 'property-theme-style', get_stylesheet_uri(), array( 'bootstrap-css' ), '1.0' );
    
    // Bootstrap 5 JS Bundle
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );
}
add_action( 'wp_enqueue_scripts', 'property_theme_enqueue_assets' );

/* Bootstrap 5 Nav Walker for WP Menus */
function property_theme_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'property_theme_nav_menu_link_attributes', 10, 3 );
