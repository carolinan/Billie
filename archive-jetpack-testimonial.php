<?php
/**
 * The template for displaying the Jetpack testimonial archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Billie
 */

get_header();
$billie_jetpack_options = get_theme_mod( 'jetpack_testimonials' );
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) {
			?>
			<header class="page-header">
				<h1 class="page-title">
					<?php
					if ( isset( $billie_jetpack_options['page-title'] ) && '' !== $billie_jetpack_options['page-title'] ) {
						echo esc_html( $billie_jetpack_options['page-title'] );
					} else {
						esc_html_e( 'Testimonials', 'billie' );
					}
					?>
				</h1>
				<?php
				if ( isset( $billie_jetpack_options['featured-image'] ) && '' !== $billie_jetpack_options['featured-image'] ) {
					echo wp_get_attachment_image( (int) $billie_jetpack_options['featured-image'], 'billie-jetpack-logo' );
				}

				if ( isset( $billie_jetpack_options['page-content'] ) && '' !== $billie_jetpack_options['page-content'] ) {
					echo convert_chars( convert_smilies( wptexturize( stripslashes( wp_filter_post_kses( addslashes( $billie_jetpack_options['page-content'] ) ) ) ) ) );
				}
				?>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content', 'testimonial-single' );
			}
		}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

