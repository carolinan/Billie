<?php
/**
 * The sidebar containing the main widget area for the frontpage
 *
 * @package billie
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area" role="complementary">
	<h2 class="screen-reader-text"><?php esc_html_e( 'Sidebar', 'billie' ); ?></h2>
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</div><!-- #secondary -->
