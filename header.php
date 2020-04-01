<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Billie
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'billie' ); ?></a>
	<?php
	if ( has_nav_menu( 'header' ) ) {
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false">
				<span class="screen-reader-text"><?php esc_html_e( 'Main Menu', 'billie' ); ?></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'fallback_cb'    => false,
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php
	}
	?>
	<header id="masthead" class="site-header" role="banner">
	<div class="site-branding">
		<?php
		the_custom_logo();

		if ( display_header_text() ) {
			if ( get_bloginfo( 'description' ) ) {
				?>
				<div class="site-description"><?php bloginfo( 'description' ); ?></div>
				<?php
			}
			if ( is_singular() ) {
				/**
				 * If singular, the post or page title will be the H1, and the site title will be a paragraph.
				*/
				?>
				<p class="site-title"><?php bloginfo( 'name' ); ?></p>
				<?php

			} else {
				?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php
			}
		} else {
			/* If there is no visible site title, make sure there is still a h1 for screen readers. */
			?>
			<h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
			<?php
		}

		billie_call_to_action();

		if ( ! get_theme_mod( 'billie_hide_search' ) ) {
			get_search_form();
		}
		?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
