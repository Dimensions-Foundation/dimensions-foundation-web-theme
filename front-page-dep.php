<?php get_header(); ?>
<?php  $hero_photo_meta = get_option( 'derf_theme_options' ); ?>

<aside class="background-green-light">
  <div class=" fixed-position">
    <?php dynamic_sidebar('home-sidebar'); ?>
  </div>
</aside>
<main id="dep-homepage">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p class="dep-homepage-intro">
      <?php the_excerpt(); ?>
    </p>
    <div class="page-feature-img">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'feature-image' ); } ?>
      </div>
      <?php the_content(); ?>
    <?php endwhile; else : ?>
      <p>
        <?php _e( 'Sorry, There is nothing to display. '); ?>
      </p>
    <?php endif; ?>
  </main>

  <?php get_footer(); ?>
