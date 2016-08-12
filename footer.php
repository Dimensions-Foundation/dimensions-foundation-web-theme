<?php
$site_url = get_home_url();
$footer_options = get_option( 'derf-footer-settings');

$footer_menu_css = 'horizontal-menu line-break';
$social_menu_container_css = ' ';

if ( strstr( $site_url, 'natureexplore.org' ) ) {
	$footer_menu_css .= ' nep-footer-menu';
	$social_menu_container_css = 'nep-social-container';
} else if ( strstr( $site_url, 'dimensionsed.org' ) ) {
	$footer_menu_css .= ' dep-footer-menu';
	$footer_copyright_color = "dep-copyright-color";
} else {
	$footer_menu_css .= ' derf-footer-menu';

}
$footer_background_class = ' ' . $footer_options['bg_color'];
?>
<footer class="<?php echo $footer_background_class; ?>">
	<?

	if ( isset( $footer_options['show_alert'] ) && $footer_options['show_alert'] ) {
		$footer_alert_class ="footer-alert " .  $footer_options['alert_bg_color'];
		?>
		<div class="<?php echo $footer_alert_class; ?>">
			<p><?php echo $footer_options['alert_text']; ?></p>

		</div>
		<?php } ?>
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
				'container_class' => $social_menu_container_css,
				'menu_id' 		    => 'social-menu',
				'menu_class'		=> $footer_menu_css
			);

			wp_nav_menu( $defaults );
			?>
		</div>

		<?php echo do_shortcode('[google-translator]'); ?>
	</footer>
</section>
<div id="copyright" class="<?php echo $footer_copyright_color ;  ?>"  >
	<?php echo $footer_options['copyright_text'] ?>
</div>
<?php wp_footer(); ?>
</body></html>
