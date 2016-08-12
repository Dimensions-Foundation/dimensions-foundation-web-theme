<?php get_header(); ?>


    <main id="full-page-container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>
        <?php endwhile; else : ?>
          <p>
            <?php _e( 'Sorry, There is nothing to display. '); ?>
          </p>
        <?php endif; ?>
      </main>
      <?php get_footer(); ?>
