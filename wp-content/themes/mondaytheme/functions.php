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
require_once 'classes/IncludeFiles.php';
new IncludeFiles();





add_filter( 'login_error', function( $message ) {
    return 'Niepoprawna nazwa użytkownika lub hasło.';
});

add_filter( 'the_generator', '__return_null' );


