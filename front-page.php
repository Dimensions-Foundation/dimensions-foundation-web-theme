<?php get_header();

$blog_url = get_home_url();


if ( strstr( $blog_url, 'dimensionsfoundation.org' ) ) {
  get_template_part( 'front-page', 'derf' );
} else  if ( strstr( $blog_url, 'natureexplore.org' ) ) {
  if ( strstr( $blog_url, 'certified.' ) ) {
    get_template_part( 'page', 'sidebar' );
  } else {
    get_template_part( 'front-page', 'nep' );
  }
}  else if ( strstr( $blog_url, 'dimensionsed.org' ) ) {
  get_template_part( 'front-page', 'dep' );
} else {
  get_template_part( 'page', 'sidebar' );
}

get_footer();

?>
