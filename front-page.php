<?php

get_header();
$blog_url = get_home_url();
if ( strstr( $blog_url, 'dimensionsfoundation.org' ) ) {
  get_template_part( 'front-page', 'derf' );
} else  if ( strstr( $blog_url, 'natureexplore.org' ) ) {
  if ( strstr( $blog_url, 'certified.' ) ) {
    get_template_part( 'sidebar-left', 'custom' );
  } else {
    get_template_part( 'front-page', 'nep' );
  }
} else  if ( strstr( $blog_url, 'ach.dimensionsed.org' ) ) {
  get_template_part( 'sidebar-left', 'custom' );
} else  if ( strstr( $blog_url, 'community.dimensionsed.org' ) ) {
  get_template_part( 'sidebar-left', 'community' );
} else {
  get_template_part( 'front-page', 'default' );
}

get_footer();

?>
