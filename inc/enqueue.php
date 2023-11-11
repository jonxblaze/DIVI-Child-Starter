<?php
/**
 * Enqueue scripts and stylesheets
 *
 * @package Divi Child Starter
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


if ( ! function_exists( 'update_divi_stylesheet' ) ) {
  function update_divi_stylesheet() {

    // Removing default style
    wp_dequeue_style( 'divi-style' );

    // Adding default style back with cache busting using time() function to auto-generate a version number
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('divi-style-parent'), time(), 'all' );
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/style.min.css', array(), time(), 'all' );
 
  }
}
add_action( 'wp_enqueue_scripts', 'update_divi_stylesheet', PHP_INT_MAX );


if ( ! function_exists( 'js_scripts' ) ) {
  function js_scripts() {

    wp_register_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array('jquery'), time(), TRUE );
    wp_enqueue_script( 'main-js' );
 
  }
}
add_action( 'wp_enqueue_scripts', 'js_scripts', PHP_INT_MAX );
