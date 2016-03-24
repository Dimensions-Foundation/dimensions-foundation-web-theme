<?php
if ( ! isset( $content_width ) ) $content_width = 1000;

/**
* Add in the Style Sheets
*/
function kracke_theme_styles() {
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'gallery_css', get_template_directory_uri() . '/css/gallery.css' );
	wp_enqueue_style( 'custom_plugin_style_css', get_template_directory_uri() . '/css/custom-plugin-style.css' );
	wp_enqueue_style( 'media_queries_css', get_template_directory_uri() . '/css/media-queries.css' );
	wp_enqueue_style( 'dimensions_foundation_css', get_template_directory_uri() . '/css/dimensions-foundation.css' );
	wp_enqueue_style( 'dimensions_education_programs_css', get_template_directory_uri() . '/css/dimensions-education-programs.css' );
	wp_enqueue_style( 'nature_explore_css', get_template_directory_uri() . '/css/nature-explore.css' );
}

add_action( 'wp_enqueue_scripts', 'kracke_theme_styles');

// Add Editor Style
add_editor_style();

/* Register our sidebars and widgetized areas. */
function kracke_add_widget_sidebar() {

	register_sidebar( array(
		'name'          => 'Home Sidebar',
		'id'            => 'home_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-header">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Forms Sidebar',
		'id'            => 'forms_sidebar',
		'before_widget' => '<div class="forms-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="forms-widget-header">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Community Sidebar',
		'id'            => 'community_sidebar',
		'before_widget' => '<div class="community-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="community-widget-header">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'School Closing',
		'id'            => 'school-closing-widget',
		'before_widget' => '<div class="school-closings">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'kracke_add_widget_sidebar' );


/**
* Add in Menus
*/

add_theme_support( 'menus' ) ;

function kracke_register_theme_menus() {
	register_nav_menus(
	array(
		'primary-menu-location'	=> __( 'Primary Menu' ),
		'top-menu-location'			=> __( 'Top Menu' ),
		'footer-menu-location'	=> __( 'Footer Menu' )
		)
	);
}
add_action( 'init', 'kracke_register_theme_menus' );


/**
*  Customize Settings
*/

// Custom Background
add_theme_support( 'custom-background' );


// Custom Background
add_theme_support( 'custom-header' );


// Custom Post Thumbnails
add_theme_support( 'post-thumbnails'  );
add_image_size( 'blog-thumbnail', 200, 200 );



// Add Page Exceprts
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

/* Add style to visual editor */
add_editor_style('style.css');

// Site LOGO
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











		?>
