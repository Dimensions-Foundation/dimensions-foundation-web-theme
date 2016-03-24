<?php get_header(); ?>

<section class="page-container">
<div class="display-inline-block">
  <div class="sidebar-container background-green-light"> 
   <div class=" fixed-position">
 <?php dynamic_sidebar('community-sidebar'); ?>
 </div>
  </div>
  <div class="content-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="page-feature-img">
      <?php if ( has_post_thumbnail() ) { 
	the_post_thumbnail( 'feature-image' ); } ?>
    </div>
    <h1>
      <?php the_title(); ?>
    </h1>
    <p>
      <?php the_content(); ?>
    </p>
    <div class="comment-container">
    <?php comments_template(); ?>
    </div>
    <?php endwhile; else : ?>
    <p>
      <?php _e( 'Sorry, There is nothing to display. '); ?>
    </p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
