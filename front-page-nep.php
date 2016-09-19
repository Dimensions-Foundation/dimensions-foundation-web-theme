<?php get_header(); ?>
<?php  $hero_photo_meta = get_option( 'derf_theme_options' ); ?>

<aside class="nep-homepage-sidebar">
  <?php dynamic_sidebar( 'above_home_sidebar' ); ?>
  <div  class="background-green-light" >
    <?php dynamic_sidebar('home-sidebar'); ?>
  </div>
</aside>
<main id="nep-homepage">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p class="nep-homepage-intro">
      <?php the_excerpt(); ?>
    </p>
    <div id="nep-homepage-hero-photo">
      <a href='<?php echo $hero_photo_meta['homepage_hero_url' ] ; ?>'>
        <?php echo "<img src=' " . $hero_photo_meta['homepage_hero_photo' ] ." ' />"; ?>
        <div id="nep-homepage-hero-caption-container">
          <div id="nep-homepage-hero-caption-content">
            <?php echo $hero_photo_meta['homepage_hero_caption' ] ; ?>
          </div>
          <div id="nep-homepage-hero-caption-graphic" >
        </div>
      </div>
    </a>
  </div>
  <div class="page-feature-img">
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail( 'feature-image' ); } ?>
    </div>
      <?php the_content(); ?>
  <?php endwhile; else : ?>
    <p>
      <?php _e( 'Sorry, There is nothing to display. '); ?>
    </p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
