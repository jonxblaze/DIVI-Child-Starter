<?php 
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* Function dynamically including all PHP files from inc folder
*/
add_action( 'init', 'dynamically_include_files' );

function dynamically_include_files() {
  // Get the path to the inc directory
  $directory = get_stylesheet_directory() . '/inc/';

  // Check if the directory exists
  if ( is_dir( $directory ) ) {
    // Get all PHP files in the directory
    $files = glob( $directory . '*.php' );
    
    // Include each PHP file
    foreach ( $files as $file ) {
      require_once $file;
    }
  }
}