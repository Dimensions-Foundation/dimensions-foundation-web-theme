<?php get_header();

/* Template Name:  Recertified Classroom Post Template */

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

<div class="container" >
  <div class="sidebar">
    <div class="widget-bar" >
      <?php dynamic_sidebar( 'custom_sidebar' ); ?>
    </div>
  </div>
  <div class="main-content">
    <?php the_title('<h1 class="classroom-title">', '</h1>');
	the_excerpt();
if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'feature-image' );}
?>
    <?php endwhile; endif; the_content(); ?>
  </div>
</div>
<?php get_footer(); ?>
