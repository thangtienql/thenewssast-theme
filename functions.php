<?php
/**
 *
 * Child theme functions and definitions
 */
 add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles');
 function enqueue_child_theme_styles() {
   wp_enqueue_style( 'parent-style-cn', get_template_directory_uri().'/style.css' );
 }

  /**
  * Genesis Block Theme functions and definitions
  *
  * @package Genesis Block Theme
  */

  // Load package main
  require_once get_stylesheet_directory() . '/package-main/init-load.php';