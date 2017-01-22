<?php
/**
 * Template Name: Static and Sections
 *
 * Description: A Page Template that displays your chosen section pages and your static frontpage, without showing your blog content or sidebar.
 *
 * @package Billie
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			billie_top_sections();
			while ( have_posts() ) : the_post();
				get_template_part( 'content', 'page' );
			endwhile;
			billie_bottom_sections();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
