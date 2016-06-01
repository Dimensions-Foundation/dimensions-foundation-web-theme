<?php get_header(); ?>
<section class="page-container background-white">
<div id="full-page-container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1>
    <?php the_title(); ?>
  </h1>
  <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
