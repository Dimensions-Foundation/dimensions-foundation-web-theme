<?php get_header(); ?>


  <div id="full-page-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php if (wp_attachment_is_image($post->id)) {
        $att_image = wp_get_attachment_image_src( $post->id, "medium");
        ?>
        <span class="attachment">
          <img src="<?php echo $att_image[0];?>"
          width="<?php echo $att_image[1];?>"
          height="<?php echo $att_image[2];?>"
          class="attachment-medium"
          alt="<?php $post->post_excerpt; ?>" />
        </span>
        <?php } ?>
        <div class="attachment-content">
          <h1 class="attachment-title">
            <?php the_title(); ?>
          </h1>
          <?php the_content(); ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
    <?php get_footer(); ?>
