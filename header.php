<?php $blog_id = get_current_blog_id();
$blog_url = get_home_url();
if ( ( $blog_id != 1 ) &&
( !is_user_logged_in() ) &&
( !is_front_page() ) ) {
  header( 'Location: ' . $blog_url  );
}
$blog_url = get_home_url();
$site_logo_class = '';
$site_top_container_class = 'background-blue';
$site_primary_menu_class = 'horizontal-menu';
$section_class = 'page-container  background-white';

if ( strstr( $blog_url, 'dimensionsfoundation.org' ) ) {
  $site_logo_class = 'derf-logo';
  $site_top_container_class .= ' derf-top-menu';
  $site_primary_menu_class .= " derf-primary-menu";
} else  if ( strstr( $blog_url, 'dimensionsed.org' ) ) {
  $site_logo_class = 'dep-logo';
  $site_top_container_class .= ' dep-top-menu';
  $site_primary_menu_class .= " dep-primary-menu";
} else  if ( strstr( $blog_url, 'natureexplore.org' ) ) {
  $site_logo_class = 'nep-logo';
  $site_top_container_class .= ' nep-top-menu';
  $site_primary_menu_class .= " nep-primary-menu";
  if  (is_front_page() ) {
    $section_class = 'page-container  background-green-medium-light';
  }
}

?>


<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
  <script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=f4rxne7flxexs3bcjhzrrg';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>
</head>
<?php $defaults = array(
  'theme_location' 		=> 'top-menu-location',
  'container'				=> 'nav',
  'container_class' =>$site_top_container_class ,
  'container_id' => 'top-menu-container',
  'menu_id' 				=> 'top-menu',
  'menu_class'				=> 	'horizontal-menu line-break',
);

wp_nav_menu( $defaults );	?>

<header>

  <?php $defaults = array(
    'theme_location' 		=> 'primary-menu-location',
    'container'				=> 'nav',
    'container_id' => 'primary-menu-container',
    'menu_id' 				=> 'primary-menu',
    'menu_class'				=> $site_primary_menu_class,
  );

  wp_nav_menu( $defaults );		?>

</header>

<body <?php body_class(); ?>>

  <section class="<?php echo $section_class; ?>">
    <div class="<?php echo 'site-logo ' . $site_logo_class; ?>"><a href='<?php echo get_site_url( 1 ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></div>
