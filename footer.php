
<footer>
  <?php dynamic_sidebar('school-closing-widget'); ?>
  <div class="footer-content">
    <?php $defaults = array(
      'theme_location' 	=> 'footer-menu-location',
      'container'			  => 'nav',
      'menu_id' 		    => 'footer-menu',
      'menu_class'			=> 'horizontal-menu line-break',
    );

    wp_nav_menu( $defaults );
    ?>
  </div>
  <?php echo do_shortcode('[google-translator]'); ?> </footer>
</section>
<div class="copyright">
  <p>
    <?php bloginfo('name'); ?>
    &copy;<?php echo date('Y'); ?> All rights reserved. <br />
    <?php bloginfo('name'); ?>
    is a division of Dimensions Educational Research Foundation, a 501(c)3 non-profit organization.</p>
</div>
<?php wp_footer(); ?>
</body></html>
