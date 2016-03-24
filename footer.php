<?php
$site_url = get_home_url();
$footer_background = null;
$footer_copyright_text =  get_bloginfo('name');
$footer_copyright_text .= ' 	&copy;' . date('Y') . ' All rights reserved. <br />';

if ( strstr( $site_url, 'natureexplore.org' ) ) {
		$footer_background = "background-brown";
		$footer_copyright_text .= ' ' . get_bloginfo('name') . ' is a division of Dimensions Educational Research Foundation, a 501(c)3 non-profit organization.';
	} else if ( strstr( $site_url, 'dimensionsed.org' ) ) {
		$footer_background = "background-blue";
		$footer_copyright_text .= ' ' . get_bloginfo('name') . ' is a division of Dimensions Educational Research Foundation, a 501(c)3 non-profit organization.';
	} else {
		$footer_background = "background-green-medium";
	}?>

<footer class="<?php echo $footer_background; ?>">
  <?php dynamic_sidebar('footer-alert-widget'); ?>
  <div class="footer-content">
    <?php $defaults = array(
      'theme_location' 	=> 'footer-menu-location',
      'container'		=> 'nav',
      'menu_id' 		    => 'footer-menu',
      'menu_class'		=> 'horizontal-menu line-break',
    );

    wp_nav_menu( $defaults );
    ?>
  </div>
  <?php echo do_shortcode('[google-translator]'); ?> </footer>
</section>
<div class="copyright">
  <p> <?php echo $footer_copyright_text; ?> </p>
</div>
<?php wp_footer(); ?>
</body></html>
