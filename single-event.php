<?php get_header(); ?>

<section class="page-container">
<div class="display-inline-block">
  <div class="sidebar-container background-green-light">
    <div class=" fixed-position">
    
      <ul class="sidebar-nav">
    <?php 
	$parent_page_id = 16;
	$parent_title = get_post($parent_page_id);
	wp_list_pages( array(
		'title_li' => 
		'<span class="event-sidebar-nav-title"><a href="/workshops-conferences/">Workshops & Conferences</a></span>',
    	'child_of' => $parent_page_id
	) ); ?>
    </ul>
      <?php dynamic_sidebar('events_sidebar'); ?>
      <?php dynamic_sidebar( 'newsletter_sidebar' ); ?>
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
    <?php /* Remove Comment Section 
    <div class="comment-container">
      <?php comments_template(); ?>
    </div> */ ?>
    <?php endwhile; else : ?>
    <p>
      <?php _e( 'There are currently no events. '); ?>
    </p>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
