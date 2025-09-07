<?php

/*
 * Theme Supports
 */
function cube_supports(){
	load_theme_textdomain( 'cube-wp', get_template_directory() . '/languages' );

  // WordPress Support
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );

  // Woocommerce Support
  add_theme_support( 'woocommerce' );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'cube_supports' );
