<?php
/**
 * Monday Theme functions and definitions.
 * 
 * 
 * @package Monday Theme
 * @since 1.0
 */

if (! defined('ABSPATH')) {
    exit();
}


// update_option( 'mondaytheme_installed', '0' );


if ( ! function_exists( 'mondaytheme_setup' ) ) {

    function mondaytheme_setup() {
             
        add_theme_support( 'post-thumbnails', array('post', 'szkolenia') );
        add_theme_support( 'menus' );
        add_theme_support( 'widgets' );
        add_theme_support( 'automatic-feed-links' );
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

    }
}

add_action( 'after_setup_theme', 'mondaytheme_setup' );





function mondaytheme_insert_predefided_pages() {
    if ( !get_option( 'mondaytheme_installed' ) || get_option( 'mondaytheme_installed' ) == '0' ) {

        $postArgs = array(
            'post_title'        => 'Kontakt',
            'post_type'         => 'page',
            'post_status'       => 'publish',
            'page_template'     => 'Strona kontaktowa',
            'post_content'      => 'Domyślna strona kontaktowa'
        );
        var_dump( wp_insert_post( $postArgs ) );

        update_option( 'mondaytheme_installed', '1' );
    }
}

add_action( 'after_setup_theme', 'mondaytheme_insert_predefided_pages');







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


// Recommend plugins.
add_theme_support(
    'recommend-plugins',
    array(
        'wpforms-lite'        => array(
            'name'            => esc_html__( 'Contact Form by WPForms', 'onepress' ),
            'active_filename' => 'wpforms-lite/wpforms.php',
        ),
        'famethemes-demo-importer' => array(
            'name'            => esc_html__( 'Famethemes Demo Importer', 'onepress' ),
            'active_filename' => 'famethemes-demo-importer/famethemes-demo-importer.php',
        ),
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


