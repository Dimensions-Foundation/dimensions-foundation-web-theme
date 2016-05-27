<?php get_header(); ?>

<section class="page-container background-green-medium-light">
  <aside class="nep-homepage-sidebar">
    <?php dynamic_sidebar( 'above_home_sidebar' ); ?>
    <div  class="background-green-light" >
      <?php dynamic_sidebar('home-sidebar'); ?>
    </div>
  </aside>
  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <p class="nep-homepage-intro">
        <?php the_excerpt(); ?>
      </p>
      <div class="page-feature-img">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'feature-image' ); } ?>
        </div>
        <p>
          <?php the_content(); ?>
        </p>
      <?php endwhile; else : ?>
        <p>
          <?php _e( 'Sorry, There is nothing to display. '); ?>
        </p>
      <?php endif; ?>
    </main>

    <?php get_footer(); ?>
