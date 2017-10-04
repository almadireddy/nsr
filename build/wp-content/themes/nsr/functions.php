<?php
/**
 * Created by PhpStorm.
 * User: aahladmadireddy
 * Date: 10/4/17
 * Time: 3:02 PM
 */

// Add scripts and stylesheets
function startwordpress_scripts() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '3.3.6' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'nsr_scripts' );