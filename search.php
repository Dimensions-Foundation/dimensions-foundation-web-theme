<?php get_header(); ?>

<main id="full-page-container">
  <?php
  global $wp_query;
  $total_results = $wp_query->found_posts;

  ?>

  <h1>Search Results</h1>
  <p><strong>Total Results Found:</strong> <?php echo $total_results; ?> </p>
  <?php get_search_form(); ?>
  <hr />

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="blog-post">
      <h3 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


      <?php
      /* If the result is a post from the blog */
      if ($post->post_type == 'post') { ?>

        <h4>Nature Explore Community Blog Post</h4>
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

        <?php }
        /* Else If the result is an event */
        else if ($post->post_type == 'event') { ?>
          <h4>Nature Explore Program Event</h4>

          <?php }
          /* Else the result is a normal web page */
          else { ?>
            <h4>Web Page</h4>
            <?php } ?>

            <?php the_excerpt(); ?>
          </article>
          <hr />

        <?php endwhile; else : ?>

          <p>
            <?php _e( 'Sorry, There is nothing to display. '); ?>
          </p>
        <?php endif; ?>
        <?php the_posts_pagination(
        array(
          'screen_reader_text' => __( 'More Results ' ),
          )
        ); ?>


      </main>

      <?php get_footer(); ?>
