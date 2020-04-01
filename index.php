<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Billie
 */

get_header();

billie_featured_sections();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		billie_top_sections();

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content', get_post_format() );
			}
			the_posts_navigation();
		} else {
			get_template_part( 'content', 'none' );
		}

		billie_bottom_sections();
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
if ( is_front_page() || is_home() ) {
	get_sidebar( 'front' );
} else {
	get_sidebar();
}
get_footer();
