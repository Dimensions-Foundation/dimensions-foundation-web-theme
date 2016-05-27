<?php get_header(); ?>


<section class="page-container background-white">
  <aside class="background-green-light">
    <div class=" fixed-position">
      <?php dynamic_sidebar('home-sidebar'); ?>
    </div>
  </aside>
  <main>
    <?php woocommerce_content(); ?>
  </main>

  <?php get_footer(); ?>
