		<?php
		$site_url = get_home_url();
		$footer_background = null;
		$footer_copyright_text =  get_bloginfo('name');
		$footer_copyright_text .= ' 	&copy;' . date('Y') . ' All rights reserved. <br />';
		$footer_menu_css = 'horizontal-menu line-break';

		if ( strstr( $site_url, 'natureexplore.org' ) ) {
			$footer_background = "background-brown";
			$footer_copyright_text .= ' ' . get_bloginfo('name') . ' is a division of Dimensions Educational Research Foundation, a 501(c)3 non-profit organization.';
	$footer_menu_css .= ' nep-footer-menu';
		} else if ( strstr( $site_url, 'dimensionsed.org' ) ) {
			$footer_background = "background-blue";
			$footer_copyright_text .= ' ' . get_bloginfo('name') . ' is a division of Dimensions Educational Research Foundation, a 501(c)3 non-profit organization.';
	$footer_menu_css .= ' dep-footer-menu';
		} else {
			$footer_background = "background-green-medium";
	$footer_menu_css .= ' derf-footer-menu';
		}?>

		<footer class="<?php echo $footer_background; ?>">
			<?php dynamic_sidebar('footer-alert-widget'); ?>
			<div id="footer-content">
				<?php $defaults = array(
					'theme_location' 	=> 'footer-menu-location',
					'container'		=> 'nav',
'container_id' => 'footer-menu-container',
					'menu_id' 		    => 'footer-menu',
					'menu_class'		=> $footer_menu_css
				);

				wp_nav_menu( $defaults );
				?>
				<?php $defaults = array(
					'theme_location' 	=> 'social-menu-location',
					'container'		=> 'nav',
'container_id' => 'social-menu-container',
					'menu_id' 		    => 'social-menu',
					'menu_class'		=> $footer_menu_css
				);

				wp_nav_menu( $defaults );
				?>
			</div>

			<?php echo do_shortcode('[google-translator]'); ?>
		</footer>
	</section>
	<div id="copyright">
		<?php echo $footer_copyright_text; ?>
	</div>
	<?php wp_footer(); ?>
</body></html>
