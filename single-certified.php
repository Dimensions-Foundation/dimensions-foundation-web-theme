<?php get_header();

/* Template Name: Certified Classroom Post Template */

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

<div class="container" >
  <div class="sidebar">
    <div class="widget-bar" >
      <?php dynamic_sidebar( 'custom_sidebar' ); ?>
    </div>
  </div>
  <div class="main-content">
  <h1 class='classroom-title'>The Nature Explore Classroom at</h1>
    <?php the_title('<h2 class="classroom-name">', '</h2>'); ?>
    <?php endwhile; endif; the_content(); ?>
  </div>
</div>
<?php get_footer(); ?>
