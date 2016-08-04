<?php get_header(); ?>
<?php /* Template Name: Sidebar - Custom 5 */ ?>

    <aside class="background-green-light">
      <div class=" fixed-position">
          <?php dynamic_sidebar( 'custom-5_sidebar' ); ?>
          <?php dynamic_sidebar( 'newsletter_sidebar' ); ?>
        </div>
      </aside>
      <main>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="page-feature-img">
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'feature-image' ); } ?>
            </div>
<h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endwhile; else : ?>
            <p>
              <?php _e( 'Sorry, There is nothing to display. '); ?>
            </p>
          <?php endif; ?>
        </main>
      <?php get_footer(); ?>
