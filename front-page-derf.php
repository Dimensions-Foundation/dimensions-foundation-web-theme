
<section class="page-container">
  <div class="full-page-container derf-homepage">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; else : ?>
      <p>
        <?php _e( 'Sorry, There is nothing to display. '); ?>
      </p>
    <?php endif; ?>
  </div>
