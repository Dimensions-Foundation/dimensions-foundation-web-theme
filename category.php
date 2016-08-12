<?php get_header(); ?>

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
      <?php dynamic_sidebar( 'community_sidebar' ); ?>
    </div>
  </aside>
  <main>
    <h1>Posts by Category</h1><hr />
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="blog-post">
        <h3 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="blog-post-date-meta-container">
          <div class="blog-post-date-published">
            <strong>Published:</strong> <?php the_date(); ?>
          </div>
          <?php  the_meta(); ?>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="page-feature-img blog-post-thumb">
            <?php   the_post_thumbnail( 'feature-image' ); ?>
          </div>
        <?php endif;?>

        <?php the_excerpt(); ?>
      </article>
      <hr />
    <?php endwhile; else : ?>
      <p>
        <?php _e( 'Sorry, There is nothing to display. '); ?>
      </p>

    <?php endif; ?>
  </main>
  <?php get_footer(); ?>
