<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package billie
 */

?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Footer Content', 'billie' ); ?></h2>
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>
			<div class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- #secondary -->
		<?php
		}
		if ( has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu" role="navigation" aria-label="<?php esc_attr_e( 'Social Media', 'billie' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'fallback_cb' => false,
					'depth' => 1,
					'link_before' => '<span class="screen-reader-text">',
					'link_after' => '</span>',
				) );
				?>
			</nav><!-- #social-menu -->
		<?php } ?>

		<div class="site-info">
			<?php
			if ( is_active_sidebar( 'sidebar-copyright' ) ) {
				 dynamic_sidebar( 'sidebar-copyright' );
			}
			?>
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'billie' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'billie' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( 'http://wptema.se/billie' ); ?>" rel="nofollow"><?php printf( __( 'Theme: %1$s by Carolina', 'billie' ), 'Billie'); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
