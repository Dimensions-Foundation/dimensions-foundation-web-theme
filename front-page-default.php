<?php get_header(); ?>

<section class="page-container background-white">
  <aside class="background-green-light">
    <?php dynamic_sidebar('home-sidebar'); ?>
  </aside>
  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p class="homepage-intro">
      <?php the_excerpt(); ?>
    </p>
    <div class="page-feature-img">
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail( 'feature-image' ); } ?>
    </div>
      <?php the_content(); ?>

    <?php endwhile;endif; ?>
  </main>
<?php get_footer(); ?>
