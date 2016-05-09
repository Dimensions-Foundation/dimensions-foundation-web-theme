


<section class="page-container">
  <div class="display-inline-block">
    <aside class="background-green-light">
      <div class="fixed-position">
        <?php dynamic_sidebar('home-sidebar'); ?>
      </div>
    </aside>
    <main>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="homepage-intro">
          <?php the_excerpt(); ?>
        </p>
        <div class="page-feature-img">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'feature-image' ); } ?>
          </div>
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
