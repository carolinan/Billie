<?php
function billie_docs_menu() {
	add_theme_page( __( 'Billie Setup Help', 'billie' ), __( 'Billie Setup Help', 'billie' ), 'edit_theme_options', 'billie-theme', 'billie_docs' );
}
add_action( 'admin_menu', 'billie_docs_menu' );

function billie_docs() {
?>

<h1 class="doc-title"><?php esc_html_e( 'Billie Setup Help', 'billie' ); ?></h1>
<div class="doc-thanks">
<b><?php esc_html_e( 'Thank you for downloading and trying out Billie!', 'billie' ); ?></b><br><br>
<?php printf( __( 'If you like the theme, please review it on <a href="%s">WordPress.org</a>', 'billie' ), esc_url( 'https://wordpress.org/support/view/theme-reviews/billie') );?><br>

<b><?php printf( __( 'If you have any questions, accessibility issues or feature requests for this theme, please visit <a href="%s">http://wptema.se/Billie</a>.', 'billie' ), esc_url( 'http://wptema.se/Billie' ) ); ?></b><br>
<?php esc_html_e( 'Thank you to everyone who has contributed with ideas and bug reports so far! Your feedback is essential for the future developement of the theme.', 'billie' ); ?>
</div>

	<ul class="doc-menu">
		<li><a href="#billie-menus"><?php esc_html_e( 'Menus','billie' ); ?></a></li>
		<li><a href="#billie-widget"><?php esc_html_e( 'Widget areas','billie' ); ?></a></li>
		<li><a href="#billie-front"><?php esc_html_e( 'Front page','billie' ); ?></a></li>
		<li><a href="#billie-advanced"><?php esc_html_e( 'Advanced settings','billie' ); ?></a></li>
		<li><a href="#billie-plugins"><?php esc_html_e( 'Plugins','billie' ); ?></a></li>
	</ul>

	<div class="doc-box" id="billie-menus">
		<h3><?php esc_html_e( 'Menus','billie' ); ?></h3>
		<?php esc_html_e( 'This theme has two optional menu locations, the Primary menu and the Social menu.','billie' ); ?><br><br>

		<b><?php esc_html_e( 'The Primary menu','billie' ); ?></b> <?php esc_html_e( 'is fixed at the top of the website and shows two menu levels.','billie' );
		echo '<br>';
		esc_html_e( 'This menu will collapse on smaller screens, and can then be opened and closed by a menu button. It can also be closed with the Esc key.','billie' ); ?><br>
		<?php esc_html_e( 'A one line menu is recommended, or the menu will overlap your content. Use submenus instead.','billie' ); ?><br><br>

		<b><?php esc_html_e( 'The social menu', 'billie' ); ?></b> <?php esc_html_e( 'is at the bottom of the page and shows logos of the social networks of your choice. It does not display any text, but has additional information for screen readers.','billie' ); ?>
		<?php esc_html_e( 'The icon will be added automatically, all you need to do is add a link to your menu.','billie' ); ?><br><br>

		<b><?php esc_html_e( 'Advanced','billie' ); ?></b><br>
		<?php esc_html_e( 'By default, the primary meny also shows the site title. You can hide this feature under the Advanced settings tab in the Customizer.','billie' ); ?>
	</div>

	<div class="doc-box" id="billie-widgets">
		<h3><?php esc_html_e( 'Widget areas','billie' ); ?></h3>
		<?php esc_html_e( 'The theme has several sidebars that can hold any number of widgets. The footer widget area is shown on all pages.','billie' ); ?><br>
		<?php esc_html_e( 'There is also an additional widget area in the footer below the social menu, where you can place a text widget and add your copyright text.','billie' );?>
	</div>

	<div class="doc-box" id="billie-front">
			<h3><?php esc_html_e( 'Frontpage','billie' ); ?></h3>
			<?php esc_html_e( 'The standard front page has the following features:','billie' ); ?><br>
			<?php esc_html_e( 'Site title and tagline: -You will find an option to hide or change the color of your header text in the customizer.','billie' ); ?><br>
			<?php esc_html_e( 'Call to action: -The Call to Action is a great way to get your visitors attention. In the customizer you can:','billie' ); ?>
			<ul>
				<li><?php esc_html_e( 'Add your own text','billie' ); ?></li>
				<li><?php esc_html_e( 'Add a link','billie' )?></li>
				<li><?php esc_html_e( 'Change colors','billie' )?></li>
				<li><?php esc_html_e( 'Hide the button','billie' ); ?></li>
			</ul>
			<?php esc_html_e( 'Header Background: -You can change the background image or background color in the customizer.','billie' )?> <br>
			<?php esc_html_e( 'Search form: -You can hide the search form under the Advanced setting in the customizer.','billie' )?> <br>
			<h3><?php esc_html_e( 'Custom Frontpage','billie' )?></h3>
			<?php esc_html_e( 'Page sections: Page sections are a great way to display your shortcodes, testimonials, pricing tables, contact information and similar.', 'billie' ); ?><br>
			<?php esc_html_e( 'The two page sections can display up to 3 pages each. Pages in the top section are displayed above the blog content, and pages in the bottom section are displayed below.','billie' )?><br>
			<?php esc_html_e( 'You can also show your page sections together with a static front page, using the Static and Sections page template.','billie' )?><br>
			<?php esc_html_e( 'By using the Page with sidebar page template, you can combine your static front page with your front page sidebar.','billie' )?><br>

	</div>

	<div class="doc-box" id="billie-advanced">
		<h3><?php esc_html_e( 'Advanced settings','billie' ); ?></h3>
		<?php esc_html_e( 'Under the Advanced settings tab in the customizer you will find the following options:','billie' )?>
		<ul>
			<li><?php esc_html_e( 'Hide the meta information. -This will hide the categories.','billie' )?></li>
			<li><?php esc_html_e( 'Hide the author, post date and tag information.','billie' )?></li>
			<li><?php esc_html_e( 'Hide the search form in the header.','billie' )?></li>
			<li><?php esc_html_e( 'Hide the Site title in the header menu.','billie' )?></li>
		</ul>
	</div>

	<div class="doc-box" id="billie-plugins">
		<h3><?php esc_html_e( 'Plugins','billie' ); ?></h3>
		<?php esc_html_e( 'Billie has been tested with and style has been added for the following plugins:', 'billie' ); ?>
		<ul>
			<li><b><?php esc_html_e( 'Woocommerce','billie' )?></b></li>
			<li><b><?php esc_html_e( 'bbPress','billie' )?></b></li>
			<li><b><?php esc_html_e( 'Jetpack','billie' )?></b><br>
			<?php esc_html_e( 'Note: Not all of Jetpacks modules are accessibe, and some uses iframes. I have increased the contrast of some of the modules.','billie' )?></li>
			<?php esc_html_e( 'Recommended modules:','billie' )?><br>
			<ul>
				<li><b><?php esc_html_e( 'Featured content','billie' )?></b><br>
					<?php esc_html_e( '-Once Jetpack has been activated, you can select up to six posts or pages as a front page feature. Chose a tag and add it to your posts to seperate them from the rest.<br>
					You can also choose a label for the posts in your featured section. Featured images are optional and the recommended image size is 360x300 pixels.','billie' )?><br>
				</li>
				<li><b><?php esc_html_e( 'Custom Content Type: Portfolio','billie' )?></b><br>
					<?php esc_html_e( 'Billie also supports Jetpack','billie' )?>
					<b><?php esc_html_e( 'Portfolios','billie' )?></b>. <a href="<?php echo 'http://en.support.wordpress.com/portfolios/'; ?>"><i>
					<?php esc_html_e( 'Read more about how to setup your Portfolio on Jetpacks support site.','billie' )?></i></a><br><br>
				</li>

				<li><b><?php esc_html_e( 'Custom Content Type: Testimonials','billie' )?></b><br>
					<?php esc_html_e( 'Billie also supports Jetpack','billie' )?> <b><?php esc_html_e( 'Testimonials','billie' )?></b>. <br>
					<?php esc_html_e( '-I recommend creating a page and adding this shortcode, and then including the page as a front page section.','billie' )?> <br> &nbsp; [testimonials columns=3 showposts=3]<br>
					<a href="<?php echo 'https://en.support.wordpress.com/testimonials-shortcode/'; ?>"><i><?php esc_html_e( 'Read more about how to setup your Testimonials on Jetpacks support site.','billie' )?></i></a><br><br>
				</li>

				<li><b><?php esc_html_e( 'Sharing','billie' )?></b><br>
					<?php esc_html_e( '-If you activate Jetpack sharing, your buttons will be displayed below the meta information.','billie' )?><br>
				</li>
				<li><b><?php esc_html_e( 'Contact Form','billie' )?></b></li>
			</ul>
		</ul>
		</ul>
	</div>
<?php
}
