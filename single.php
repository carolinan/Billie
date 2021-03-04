<?php
/**
 * The template for displaying all single posts.
 *
 * @package Billie
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', 'single' );
			$navigation_args = array(
				'prev_text' => '<span class="screen-reader-text">Previous post: %title</span>',
				'next_text' => '<span class="screen-reader-text">Next post: %title</span>'
			);
			the_post_navigation( $navigation_args );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		} // end of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
