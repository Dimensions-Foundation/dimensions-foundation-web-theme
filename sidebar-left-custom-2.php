<?php get_header(); ?>
<?php /* Template Name: Sidebar - Custom 2 */ ?>

<section class="page-container">
<div class="display-inline-block">
  <aside class="background-green-light">
    <div class=" fixed-position">
      <?php $children = get_pages('child_of='.get_post_top_ancestor_id()); ?>
      <?php if( count( $children ) != 0 ) { ?>
      <ul class="sidebar-nav">
        <span class="sidebar-nav-title" >
        <?php wp_list_pages( array('title_li'=>'','include'=>get_post_top_ancestor_id()) ); ?>
        </span>
        <?php wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
      </ul>
      <?php } ?>
      <?php dynamic_sidebar( 'custom-2_sidebar' ); ?>
      <?php dynamic_sidebar( 'newsletter_sidebar' ); ?>
    </div>
  </aside>
  <main>
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
    <?php endwhile; else : ?>
    <p>
      <?php _e( 'Sorry, There is nothing to display. '); ?>
    </p>
    <?php endif; ?>
  </main>
</div>
<?php get_footer(); ?>