<?php get_header(); ?>

<div class="full-page-container center-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1>
    <?php the_title(); ?>
  </h1>
  <?php the_content(); ?>
  <?php endwhile; else : ?>
  <p>
    <?php _e( 'Sorry, There is nothing to display. '); ?>
  </p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
