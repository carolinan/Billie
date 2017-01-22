<?php
/**
 * @package Billie
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
	<?php
	the_title( '<h2 class="entry-title">-', '</h2>' );

	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'billie-jetpack-testimonial' );
	}
	?>
	<br>
</article><!-- #post-## -->
