<?php get_header(); ?>
<section class="page-container background-green-medium-light">
<div class="display-inline-block">
  <div class="sidebar-container background-green-light">
    <?php dynamic_sidebar('home-sidebar'); ?>
  </div>
  <div class="content-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <p class="homepage-intro">
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
    </div>
  </div>
  <?php get_footer(); ?>
