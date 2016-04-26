<?php get_header(); ?>

<section class="page-container">
<div class="display-inline-block">
  <div class="sidebar-container background-green-light">
    <?php dynamic_sidebar('home-sidebar'); ?>
  </div>
  <div class="content-container">
     <p>
      <?php woocommerce_content(); ?>
    </p>
  
  </div>
</div>
<?php get_footer(); ?>
