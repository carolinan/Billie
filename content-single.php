<?php
/**
 * @package Billie
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'billie-border' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php billie_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'billie' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
	<?php billie_entry_footer(); ?>
</article><!-- #post-## -->
