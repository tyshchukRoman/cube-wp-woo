<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'cube_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'cube_wrapper_end', 10);

function cube_wrapper_start() { ?>
  <main class="main woocommerce" id="main">
    <section class="section">
      <div class="container">
<?php }

function cube_wrapper_end() { ?>
      </div>
    </section>
  </main>
<?php }
