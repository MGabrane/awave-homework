<?php
// Add stysheets
wp_enqueue_style( 'bootstrap-four-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0' );
wp_register_style( 'bootstrap-four-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), $bootstrap_four_version );
wp_enqueue_style( 'bootstrap-four-styles', get_stylesheet_uri(), array( 'bootstrap-four-bootstrap' ), '1' );
wp_enqueue_style('main-css', get_theme_file_uri() . '/assets/css/main.css');

// Add scripts
wp_enqueue_script( 'bootstrap-four-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), $bootstrap_four_version, true );