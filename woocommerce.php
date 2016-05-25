<?php get_header(); ?>


<section class="page-container">
<div class="display-inline-block">
  <aside class="background-green-light">
    <div class=" fixed-position">
  <?php dynamic_sidebar('home-sidebar'); ?>
    </div>
  </aside>
  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php woocommerce_content(); ?>
    <?php endwhile; else : ?>
    <p>
      <?php _e( 'Sorry, There is nothing to display. '); ?>
    </p>
    <?php endif; ?>
  </main>
</div>
<?php get_footer(); ?>
