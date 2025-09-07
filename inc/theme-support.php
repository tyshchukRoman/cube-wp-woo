<?php

/*
 * Supports and Menus
 */
function cube_support(){
	load_theme_textdomain( 'cube-wp', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );

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

add_action( 'after_setup_theme', 'cube_support', 0 );


/*
 * Disable block styles
 */
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'classic-theme-styles' );
});

add_filter( 'should_load_separate_core_block_assets', '__return_true' );
