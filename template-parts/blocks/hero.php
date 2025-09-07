<?php
/*
 * Block: Hero
 */

$title = carbon_get_post_meta(get_the_ID(), 'main-hero__title');
$image = carbon_get_post_meta(get_the_ID(), 'main-hero__image');
$description = carbon_get_post_meta(get_the_ID(), 'main-hero__description');

$button_1__url = carbon_get_post_meta(get_the_ID(), 'main-hero__button-1-url');
$button_1__text = carbon_get_post_meta(get_the_ID(), 'main-hero__button-1-text');

$button_2__url = carbon_get_post_meta(get_the_ID(), 'main-hero__button-2-url');
$button_2__text = carbon_get_post_meta(get_the_ID(), 'main-hero__button-2-text');

if(!$title) {
  return;
}

?>

<section class="hero | section">
  <div class="container">
    <div class="grid" data-layout="50-50">
      <div class="hero__content | prose">
        <?php if($title): ?>
          <h1><?php echo $title ?></h1>
        <?php endif; ?>

        <?php if($description): ?>
          <p><?php echo $description ?></p>
        <?php endif; ?>
      </div>

      <?php if($image): ?>
        <div class="hero__image">
          <?php echo wp_get_attachment_image($image, 'large', false, [
            'loading' => false,
            'decoding' => 'sync',
            'fetchpriority' => 'high'
          ]) ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
