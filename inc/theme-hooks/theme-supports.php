<?php

/*
 * Theme Supports
 */
function cube_supports(){
	load_theme_textdomain( 'cube-wp', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
  add_theme_support( 'woocommerce' );

  register_nav_menus(
    array(
      'header-menu' => __('Header Menu', 'cube-wp'),
      'mobile-menu' => __('Mobile Menu', 'cube-wp'),
      'footer-menu-1' => __('Footer Col 1', 'cube-wp'),
      'footer-menu-2' => __('Footer Col 2', 'cube-wp'),
      'footer-menu-3' => __('Footer Col 3', 'cube-wp'),
    )
  );
}

add_action( 'after_setup_theme', 'cube_supports' );
