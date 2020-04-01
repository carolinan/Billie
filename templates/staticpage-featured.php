<?php
/**
 * Template Name: Static and Featured
 *
 * Description: A Page Template that displays your static frontpage and Jetpack featured content, but no sidebar
 *
 * @package Billie
 */

get_header();
billie_featured_sections();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) {
				the_post();

				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			} // end of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
