<?php get_header(); ?>
	<aside class="background-green-light">
		<div class=" fixed-position">
			<?php $children = get_pages('child_of='.get_post_top_ancestor_id()); ?>
			<?php if( count( $children ) != 0 ) { ?>
				<ul class="sidebar-nav">
					<span class="sidebar-nav-title" >
						<?php wp_list_pages( array('title_li'=>'','include'=>get_post_top_ancestor_id()) ); ?>
					</span>
					<?php wp_list_pages( array('title_li'=>'','depth'=>1,'child_of'=>get_post_top_ancestor_id()) ); ?>
				</ul>
				<?php } ?>
				<?php dynamic_sidebar( 'custom_sidebar' ); ?>
				<?php dynamic_sidebar( 'newsletter_sidebar' ); ?>
			</div>
		</aside>
		<main>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_title('<h1 class="classroom-title">', '</h1>');
				the_excerpt();
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();}
					?>
					<?php the_content(); ?>
				</p>
			<?php endwhile;  endif; ?>
		</main>

		<?php get_footer(); ?>
