<?php


add_action( 'woocommerce_checkout_before_order_review_heading', function() {
  echo '<div class="order-details-column">';
});

add_action( 'woocommerce_checkout_after_order_review', function() {
  echo '</div>';
});
