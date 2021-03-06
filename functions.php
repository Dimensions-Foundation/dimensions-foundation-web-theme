<?php
if ( ! isset( $content_width ) ) $content_width = 960;

	// Add in Custom Theme Options
require get_template_directory() . '/inc/derf-customizer.php';
	// Add in Custom Theme Options
require get_template_directory() . '/inc/derf-theme-options.php';
	// Add in Custom Meta Boxes
require get_template_directory() . '/inc/derf-meta-boxes.php';
	// Add in Support for WooCommerce
require get_template_directory() . '/inc/derf-woocommerce-support.php';
	// Add in Support for NinjaForms
require get_template_directory() . '/inc/derf-ninja-forms-custom.php';

/* -----------------------------------------------------------------------------
*  Enqueue Stylesheets
* ------------------------------------------------------------------------------
*/
function derf_theme_styles() {
	// Add in required style.css
	wp_enqueue_style( 'header_css', get_template_directory_uri() . '/style.css' );
	// First normalize all styles
	wp_enqueue_style( 'normal_css', get_template_directory_uri() . '/css/normalize.min.css' );
	// Add main style sheet
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.min.css' );
	// Add fonts style - seperate to add to Editor style
	wp_enqueue_style( 'fonts_css', get_template_directory_uri() . '/css/fonts.min.css' );
	// Add custom style changes to plugins
	wp_enqueue_style( 'custom_plugin_style_css', get_template_directory_uri() . '/css/custom.min.css' );
	// Add custom styles for dimensionsfoundation.org
	wp_enqueue_style( 'dimensions_foundation_css', get_template_directory_uri() . '/css/derf.min.css' );
	// Add custom styles for dimensionsed.org
	wp_enqueue_style( 'dimensions_education_programs_css', get_template_directory_uri() . '/css/dep.min.css' );
	// Add custom styles for natureexplore.org
	wp_enqueue_style( 'nature_explore_css', get_template_directory_uri() . '/css/nep.min.css' );
	/**
	 * Load our IE-only stylesheet for all versions of IE:
	 * <!--[if IE]> ... <![endif]-->
	 */
	wp_enqueue_style( 'derf-ie', get_template_directory_uri() . '/css/ie.min.css', array( 'derf') );
	wp_style_add_data( 'derf-ie', 'conditional', 'IE' );

}

add_action( 'wp_enqueue_scripts', 'derf_theme_styles');

/* -----------------------------------------------------------------------------
*  Add font styles to visual editor
* ------------------------------------------------------------------------------
*/
add_editor_style( get_template_directory_uri() . '/css/fonts.min.css' );





/* -----------------------------------------------------------------------------
* Register Widgets
*
* Description: This function adds widgets to the theme
*              There are 4 sections within this function.
*              1 for each of the three divisions of DERF,
*              and 1 section for generic widgets
* ------------------------------------------------------------------------------
*/
function derf_add_widget_sidebar() {
	/* Generic Widgets */
	register_sidebar( array(
		'name'          => 'Home Sidebar',
		'id'            => 'home_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-header">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Community Sidebar',
		'id'            => 'community_sidebar',
		'before_widget' => '<div class="community-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="community-widget-header">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Custom Sidebar',
		'id'            => 'custom_sidebar',
		'before_widget' => '<div class="custom-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="custom-sidebar-header">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Custom 2 Sidebar',
		'id'            => 'custom-2_sidebar',
		'before_widget' => '<div class="custom-2-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="custom-2-sidebar-header">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Custom 3 Sidebar',
		'id'            => 'custom-3_sidebar',
		'before_widget' => '<div class="custom-3-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="custom-3-sidebar-header">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Custom 4 Sidebar',
		'id'            => 'custom-4_sidebar',
		'before_widget' => '<div class="custom-4-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="custom-4-sidebar-header">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Custom 5 Sidebar',
		'id'            => 'custom-5_sidebar',
		'before_widget' => '<div class="custom-5-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="custom-5-sidebar-header">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Custom 6 Sidebar',
		'id'            => 'custom-6_sidebar',
		'before_widget' => '<div class="custom-6-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="custom-6-sidebar-header">',
		'after_title'   => '</h4>',
	) );
	/*----------------------------------------------------------------------------
	* Dimensions Foundation Widgets
	*-----------------------------------------------------------------------------
	*/
	/*----------------------------------------------------------------------------
	* Dimensions Education Programs Widgets
	*-----------------------------------------------------------------------------
	*/
	/* -----------------------------------------------------------------------------
	*  Nature Explore Widgets
	* ------------------------------------------------------------------------------
	*/
	register_sidebar( array(
		'name'          => 'Above Home Sidebar',
		'id'            => 'above_home_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-header">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Newsletter Sidebar',
		'id'            => 'newsletter_sidebar',
		'before_widget' => '<div class="newsletter-sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="newsletter-sidebar-header">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'derf_add_widget_sidebar' );


/* -----------------------------------------------------------------------------
*  Add Menus
* ------------------------------------------------------------------------------
*/

add_theme_support( 'menus' ) ;

function derf_register_theme_menus() {
	register_nav_menus(
	array(
		'primary-menu-location'	=> __( 'Primary Menu' ),
		'top-menu-location'			=> __( 'Top Menu' ),
		'footer-menu-location'	=> __( 'Footer Menu' ),
		'social-menu-location'	=> __( 'Social Menu' )
		)
	);
}
add_action( 'init', 'derf_register_theme_menus' );


/* -----------------------------------------------------------------------------
*  Custom Settings
* ------------------------------------------------------------------------------
*/

/* Custom Background */
add_theme_support( 'custom-background' );

/* Custom Post Thumbnails */
add_theme_support( 'post-thumbnails'  );
set_post_thumbnail_size( 150, 150, false); // 50 pixels wide by 50 pixels tall, crop mode
add_image_size( 'blog-thumbnail', 200, 200 );

/* Add Page Exceprts */
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

/* -----------------------------------------------------------------------------
*  Add site logo
* ------------------------------------------------------------------------------
*/
function themeslug_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'themeslug_logo_section' , array(
		'title' 				=> __( 'Logo', 'themeslug' ),
		'priority' 			=> 30,
		'description' 	=> 'Upload a logo to replace the default site name and description in the header',
		) );
		$wp_customize->add_setting( 'themeslug_logo' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
		'themeslug_logo', array(
			'label' 		=> __( 'Logo', 'themeslug' ),
			'section' 	=> 'themeslug_logo_section',
			'settings' 	=> 'themeslug_logo',
			)
			) );
		}
		add_action('customize_register', 'themeslug_theme_customizer');


		if(!function_exists('get_post_top_ancestor_id')){
			/**
			* Gets the id of the topmost ancestor of the current page. Returns the current
			* page's id if there is no parent.
			*
			* @uses object $post
			* @return int
			*/
			function get_post_top_ancestor_id(){
				global $post;

				if($post->post_parent){
					$ancestors = array_reverse(get_post_ancestors($post->ID));
					return $ancestors[0];
				}

				return $post->ID;
			}
		}

		/**
		* Filter the "read more" excerpt string link to the post.
		*
		* @param string $more "Read more" excerpt string.
		* @return string (Maybe) modified "read more" excerpt string.
		*/
		function wpdocs_excerpt_more( $more ) {
			if ( !is_search() ) {
				return sprintf( '...<br /> <a class="read-more" href="%1$s">%2$s</a>',
				get_permalink( get_the_ID() ),
				__( 'Read More', 'textdomain' )
			);
		} else {
			return sprintf( '...<br /> <a class="search-read-more " href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( ' ', 'textdomain' )
		);
	}
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




/* END FUNCTIONS.PHP */ ?>
