<?php 

get_header();
 $blog_url = get_home_url(); 
		 if ( strstr( $blog_url, 'dimensionsfoundation.org' ) ) {
			get_template_part( 'front-page', 'derf' );
		} else  if ( strstr( $blog_url, 'natureexplore.org' ) ) {
			get_template_part( 'front-page', 'nep' );
		} else {
			get_template_part( 'front-page', 'default' );
		}

get_footer();

?>