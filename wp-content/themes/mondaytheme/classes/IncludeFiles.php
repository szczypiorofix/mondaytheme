<?php


final class IncludeFiles {


    public function __construct() {

        add_action( 'wp_enqueue_scripts', array( $this, 'monday_add_css_files' ) ); 
        add_action( 'wp_enqueue_scripts', array( $this, 'monday_add_js_files') );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_monday_add_js_files') );

    }

    public function monday_add_css_files() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style( "bootstrap_5_style", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), $version, 'all' );
        wp_enqueue_style( "main_monday_theme_style", get_template_directory_uri().'/assets/css/style.css', array(), $version, 'all');    
    }
    
    
    public function monday_add_js_files() {    
        $version = wp_get_theme()->get('Version');
        wp_enqueue_script( 'jquery_javascript', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
        wp_enqueue_script( 'bootstrap_5_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), '5.0.1', true );
        wp_enqueue_script( 'main_monday_javascript', get_template_directory_uri().'/assets/js/main.js', array(), $version, true);
     }
    
    public function admin_monday_add_js_files( $hook ) {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_script( 'admin_monday_javascript', get_template_directory_uri().'/assets/js/admin.js', array(), $version, true);
    }
    
}
