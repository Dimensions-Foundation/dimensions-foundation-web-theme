<?php $blog_id = get_current_blog_id(); ?>
<?php $blog_url = get_home_url(); ?>
<?php if ( ( $blog_id != 1 ) && ( !is_user_logged_in() ) && ( !is_front_page() ) ) {
	header( 'Location: ' . $blog_url  ); } ?>

	<!doctype html>
	<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>
			<?php wp_title(); ?>
		</title>
		<?php wp_head(); ?>
	</head>
	<?php $defaults = array(
		'theme_location' 	=> 'top-menu-location',
		'container'				=> 'nav',
		'menu_id' 				=> 'top-menu',
		'menu_class'			=> 'horizontal-menu line-break',
	);

	wp_nav_menu( $defaults );	?>
	<header>
		<?php $defaults = array(
			'theme_location' 	=> 'primary-menu-location',
			'container'				=> 'nav',
			'menu_id' 				=> 'primary-menu',
			'menu_class'			=> 'horizontal-menu',
		);

		wp_nav_menu( $defaults );		?>
		<div class="site-logo"><a href='<?php echo get_site_url( 1 ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></div>
	</header>

	<body <?php body_class(); ?>>
		<section class="page-container">
