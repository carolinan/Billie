<?php
/**
 * Template Name: Page with sidebar
 *
 * Description: A Page Template that displays your content, and sidebar, suitable for static front pages.
 *
 * @package Billie
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
if ( is_front_page() or is_home() ) {
	get_sidebar( 'front' );
} else {
	get_sidebar();
}
get_footer();
