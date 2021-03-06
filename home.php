<?php get_header();
$blog_options = get_option( 'derf-blog-settings');
$blog_name = $blog_options['blog_name_text'];
$blog_post_count = $blog_options['blog_count'];

?>

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
    <h1><?php echo $blog_name ?></h1>
    <?php if ( have_posts() ) : while ( have_posts() && ($blog_post_count > 0) ) : the_post(); ?>
<br />
      <article class="blog-post">
        <h3 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="blog-post-date-meta-container">
          <div class="blog-post-date-published">
            <strong>Author:</strong> <?php the_author(); echo ", " ; the_author_meta('title_position'); ?>
            <br />
            <strong>Published:</strong> <?php the_date(); ?>
          </div>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="page-feature-img blog-post-thumb">
          <a href="<?php the_permalink(); ?>">  <?php   the_post_thumbnail( 'feature-image' ); ?></a>
          </div>
        <?php endif;?>

        <?php the_excerpt(); ?>
      </article>
      <hr />
    <?php $blog_post_count--; endwhile; else : ?>
      <p>
        <?php _e( 'Sorry, There is nothing to display. '); ?>
      </p>

    <?php endif; ?>
  </main>
  <?php get_footer(); ?>
