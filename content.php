<?php
/**
 * The template part for displaying content.
 *
 * @package Billie
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'billie-border' ); ?>>
	<header class="entry-header">
		<?php
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		if ( 'post' === get_post_type() ) {
			?>
			<div class="entry-meta">
				<?php billie_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( has_post_thumbnail() ) {
			?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php
		}
		/* Translators: %s: Name of current post */
		the_content( sprintf( __( 'Continue reading %s', 'billie' ), get_the_title() ) );

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'billie' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<?php billie_entry_footer(); ?>
</article><!-- #post-## -->
