<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="page-feature-img">
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail( 'feature-image' ); } ?>
    </div>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
    <p>
      <?php _e( 'Sorry, There is nothing to display. '); ?>
    </p>
  <?php endif; ?>
