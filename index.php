<?php get_header(); ?>
<section class="page-container">
<div class="full-page-container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1>
    <?php the_title(); ?>
  </h1>
  <?php the_content(); ?>
  <?php endwhile; else : ?>
  <p>
    <?php _e( 'Sorry, There is nothing to display.'); ?>
  </p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
