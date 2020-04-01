<?php
/**
 * The Template for displaying all single projects.
 *
 * @package Billie
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', 'portfolio-single' );
			the_post_navigation();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}// end of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
