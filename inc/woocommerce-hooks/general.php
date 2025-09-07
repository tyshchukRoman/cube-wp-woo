<?php

/*
 * Disable default woocommerce CSS
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/*
 * Wrap archive + single product pages inside custom wrappers (ensure this runs after WooCommerce is loaded)
 */
add_action('after_setup_theme', function () {
    remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action('woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', function () {
      echo '<main class="main woocommerce" id="main"><section class="section"><div class="container">';
    }, 10);

    add_action('woocommerce_after_main_content',  function() {
      echo '</div></section></main>';
    }, 10);
});


/*
 * Wrap pages rendered via shortcodes (Cart/Checkout/My Account on classic pages) into custom wrapper
 */
add_filter('the_content', function ($content) {
    if (
        (function_exists('is_cart') && is_cart()) ||
        (function_exists('is_checkout') && is_checkout()) ||
        (function_exists('is_account_page') && is_account_page())
    ) {
        // Avoid double-wrapping if our <main id="main"> is already there
        if (strpos($content, 'id="main"') === false) {
            $open  = '<main class="main woocommerce" id="main"><section class="section"><div class="container">';
            $close = '</div></section></main>';
            return $open . $content . $close;
        }
    }
    return $content;
}, 9);
