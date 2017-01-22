<?php
/**
 * The template for displaying the portfolio archive.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Billie
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Portfolio','billie' ); ?></h1>
			</header><!-- .page-header -->

			<section class="featured-wrap">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="featured-post">
					<?php
					if ( has_post_thumbnail() ) {
						$background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'billie-featured-posts-thumb' );

						echo '<div class="featured-inner" style="background: url(' . esc_url( $background[0] ) . ');">';
					} else {
						echo '<div class="featured-inner" style="background: ' . esc_attr( get_theme_mod( 'billie_header_bgcolor', '#9cc9c7' ) ) . ';">';
					}
						echo '<div class="post-header">';
						the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						echo '</div>

							<span class="featured-text">';

							echo the_terms( $post->ID, 'jetpack-portfolio-type', '' . __( 'Project Type: ','billie' ) ,', ', '' );

							echo '	<span class="tag-list">';
									$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
									$time_string = sprintf( $time_string,
										esc_attr( get_the_date( 'c' ) ),
										esc_html( get_the_date() )
									);

									$posted_on = $time_string;
									echo $posted_on;
									echo '</span>
								</span>
							</div></div>';
			?>
		<?php endwhile; ?>
		</section>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

