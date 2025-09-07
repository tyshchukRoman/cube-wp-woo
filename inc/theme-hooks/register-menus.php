<?php

/*
 * Register Menus
 */
function cube_register_menus(){
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

add_action( 'after_setup_theme', 'cube_register_menus' );
