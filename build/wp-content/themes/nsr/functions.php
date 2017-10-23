<?php
/**
 * Created by PhpStorm.
 * User: aahladmadireddy
 * Date: 10/4/17
 * Time: 3:02 PM
 */

// Add scripts and stylesheets
function nsr_scripts() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '3.3.6' );
  wp_enqueue_style('google_fonts', "https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Open+Sans");
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

function register_my_menus() {
  register_nav_menus(
    array(
      'main_nav' => __( 'Main Navigation' )
    )
  );
}

add_action( 'wp_enqueue_scripts', 'nsr_scripts' );
add_action( 'init', 'register_my_menus' );

// WordPress Titles
add_theme_support( 'title-tag' );