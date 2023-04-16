<?php
/**
 * Theme Functions.
 * 
 * @package testasmode
 */

 function testasmode_enqueue_scripts() {
    // one way to enqueue stylesheet and scripts directly 
    // wp_enqueue_style( 'stylesheeet', get_stylesheet_uri(), [], filemtime( get_template_directory().'/style.css' ), 'all' );
    // wp_enqueue_script( 'main-js', get_template_directory_uri().'/assets.main.js' , [], filemtime( get_template_directory().'/assets/main.js' ), true );
    
    // another way to register and then do a conditional enqueue of stylesheet for specific pages
    wp_register_style( 'style-css', get_stylesheet_uri(), filemtime( get_template_directory().'/style.css'), 'all' );
    wp_register_script( 'main-js', get_template_directory_uri().'/assets.main.js' , [], filemtime( get_template_directory().'/assets/main.js' ), true );
    wp_enqueue_style( 'style-css');
    wp_enqueue_script( 'main-js' );
    
 }

 add_action( 'wp_enqueue_scripts', 'testasmode_enqueue_scripts');

?>
