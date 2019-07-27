<?php
/**
 * The Template for displaying Jetpack testimonials
 *
 * @package Billie
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'content', 'testimonial-single' );
		endwhile;
		// end of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
