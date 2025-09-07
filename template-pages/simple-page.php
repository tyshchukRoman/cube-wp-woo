<?php
/*
 * Template Name: Simple Page
 */
get_header(); ?>

<main class="page simple-page" id="main">

<section class="content | section">
  <div class="content__container | container">
    <h1 class="content__title"><?php the_title() ?></h1>

    <div class="prose">
      <?php the_content() ?>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
