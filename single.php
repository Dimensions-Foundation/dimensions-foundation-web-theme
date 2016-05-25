<?php get_header();

$post = $wp_query->post;
if ( in_category('Certified') ) {
include(TEMPLATEPATH . '/single-certified.php');
} else if ( in_category('Re-Certified') ) {
include(TEMPLATEPATH . '/single-recertified.php');
} else if ( in_category('Blog Post') ) {
include(TEMPLATEPATH . '/single-blog.php');
} else {
include(TEMPLATEPATH . '/single-default.php');
}

get_footer(); ?>
