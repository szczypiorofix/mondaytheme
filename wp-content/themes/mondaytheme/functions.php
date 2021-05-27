<?php
/**
 * Monday Theme functions and definitions.
 * 
 * 
 * @package Monday Theme
 * @since 1.0
 */

if (! defined('ABSPATH')) { exit(); }



// ================ ENABLE WORDPRESS SUPPORT FOR SOME FEATURES ==============
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support(
    'html5',
    array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    )
);




register_nav_menus(
    array(
        'primary' => esc_html__( 'Menu w nagłówku', 'mondaytheme' ),
        'footer'  => __( 'Menu w stopce', 'mondaytheme' ),
    )
);




// ====================== INCLUDES (CSS & JS) ===============================
function monday_add_css_files() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style( "bootstrap_5_style", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), $version, 'all' );
    wp_enqueue_style( "main_monday_theme_style", get_template_directory_uri().'/css/style.css', array(), $version, 'all');    
}


function monday_add_js_files() {    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script( 'jquery_javascript', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
    wp_enqueue_script( 'bootstrap_5_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), '5.0.1', true );
    wp_enqueue_script( 'main_monday_javascript', get_template_directory_uri().'/js/main.js', array(), $version, true);
 }


 add_action( 'wp_enqueue_scripts', 'monday_add_css_files'); 
 add_action( 'wp_enqueue_scripts', 'monday_add_js_files' );


 function wpdocs_selectively_enqueue_admin_script( $hook ) {

    echo '<script> console.log("'.$hook.'"); </script>';

}
add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );






