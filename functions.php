<?php
/**
 * Billie functions and definitions
 *
 * @package Billie
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'billie_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function billie_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on billie, use a find and replace
		 * to change 'billie' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'billie' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'woocommerce' );

		add_theme_support( 'jetpack-responsive-videos' );

		add_theme_support( 'jetpack-testimonial' );

		add_theme_support( 'jetpack-portfolio' );

		add_editor_style();

		add_theme_support( 'custom-logo', array(
			'height'      => 200,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'billie-featured-posts-thumb', 360, 300 );

		add_theme_support( 'title-tag' );

		register_nav_menus( array(
			'header' => __( 'Primary Menu', 'billie' ),
			'social' => __( 'Social Menu', 'billie' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		add_theme_support( 'customize-selective-refresh-widgets' );
	}
} // End if().
add_action( 'after_setup_theme', 'billie_setup' );


/**
* Billie_hide_title
*
* Unless the option is hidden in the customizer, display the site title (with link) in the primary menu.
*/

if ( ! get_theme_mod( 'billie_hide_title') ) {
	function billie_menu_title( $items, $args ) {
	    if ( $args->theme_location == 'header' ) {
	    	$new_item       = array( '<li class="toptitle"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></li>' );
	        $items          = preg_replace( '/<\/li>\s<li/', '</li>,<li',  $items );
	        $array_items    = explode( ',', $items );
	        array_splice( $array_items, 0, 0, $new_item ); // splice in at position 1.
	        $items          = implode( '', $array_items );
	    }
	    return $items;
	}
	add_filter( 'wp_nav_menu_items','billie_menu_title', 10, 2 );
}


/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function billie_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar for posts', 'billie' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Front page Sidebar', 'billie' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar for archives and search results', 'billie' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer widget area', 'billie' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer copyright area', 'billie' ),
		'id'            => 'sidebar-copyright',
		'description'   => __( 'Place a text widget in this area and add your copyright text', 'billie' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'billie_widgets_init' );


if ( ! function_exists( 'billie_fonts_url' ) ) :
	function billie_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
		if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'billie' ) ) {
			$fonts[] = 'Montserrat';
		}

		/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'billie' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' == $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'devanagari' == $subset ) {
			$subsets .= ',devanagari';
		} elseif ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), '//fonts.googleapis.com/css' );
		}

		return $fonts_url;
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function billie_scripts() {
	wp_enqueue_style( 'billie-style', get_stylesheet_uri(), array( 'dashicons' ) );
	wp_enqueue_style( 'billie-fonts', billie_fonts_url(), array(), null );
	wp_enqueue_style( 'open-sans' );

	wp_enqueue_script( 'billie-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'billie-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'billie_scripts' );

/**
 * Enqueue styles for the setup help page.
 */
function billie_admin_scripts( $hook ) {
	if ( 'appearance_page_billie-theme' !== $hook ) {
		return;
	}
	wp_enqueue_style( 'billie-admin-style', get_template_directory_uri() . '/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'billie_admin_scripts' );


/**
 * Custom header for this theme.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Add a title to posts that are missing titles */
add_filter( 'the_title', 'billie_post_title' );
function billie_post_title( $title ) {
	if ( $title == '' ) {
		return __( '(Untitled)', 'billie' );
	} else {
		return $title;
	}
}

function billie_no_sidebars( $classes ) {
	/** Are sidebars hidden on the frontpage?
	 *		Is the sidebar activated?
	 *		Add 'no-sidebar' to the $classes array
	*/
	if ( is_front_page() && ! is_active_sidebar( 'sidebar-3' ) || is_home() && ! is_active_sidebar( 'sidebar-3' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'billie_no_sidebars' );


function billie_customize_css() {
	echo '<style type="text/css">';
	if ( is_admin_bar_showing() ) {
	 	?>
	 	.main-navigation{top:32px;}

	 	@media screen and ( max-width: 782px ) {
			.main-navigation{top:46px;}
		}

		@media screen and ( max-width: 600px ) {
			.main-navigation{top:0px;}
		}
	<?php
	}

	echo '.site-title, .site-description{color:#' . esc_attr( get_header_textcolor() ) . ';} ';

	$header_image = get_header_image();
	if ( ! empty( $header_image ) ) {
	?>
		.site-header {
		background: <?php echo esc_attr( get_theme_mod( 'billie_header_bgcolor', '#9cc9c7' ) ) ?> url(<?php header_image(); ?>)
		<?php echo esc_attr( get_theme_mod( 'billie_header_bgrepeat', 'no-repeat' ) ); ?> 
		<?php echo esc_attr( get_theme_mod( 'billie_header_bgpos', 'center top' ) ); ?>;
		background-size: <?php echo esc_attr( get_theme_mod( 'billie_header_bgsize', 'cover' ) ); ?>;
		}

	<?php
	/* No header image has been chosen, check for background color: */
	} else {
		if ( get_theme_mod( 'billie_header_bgcolor' ) ) {
			echo '.site-header { background:' . esc_attr( get_theme_mod( 'billie_header_bgcolor', '#9cc9c7' ) ) . ';}';
			echo '#action:hover, #action:focus{text-shadow:none;}';
		}
	}

	// Call to Action text color.
	if ( get_theme_mod( 'billie_action_color' ) <> ' ' ) {
		echo '#action, #action a{ color:' . esc_attr( get_theme_mod( 'billie_action_color', '#000000' ) ) . ';}';
	}

	// Call to Action background color.
	if ( get_theme_mod( 'billie_action_bgcolor' ) <> '' ) {
		echo '#action, #action a{background:#' . esc_attr( get_theme_mod( 'billie_action_bgcolor', 'none' ) ) . ';}';
	}

	// If avatars are enabled, alter the css.
	if ( get_option( 'show_avatars' ) ) {
		echo '.comment-metadata{
			margin-left:70px;
			display:block;
			margin-top:-25px;
		}';
	}
	echo '</style>' . "\n";
}
add_action( 'wp_head', 'billie_customize_css' );

if ( ! function_exists( 'billie_top_sections' ) ) {
	function billie_top_sections() {
		/*The front page sections should not display on the blog listing page*/
		if ( is_front_page() && is_home() ) {
			if ( get_theme_mod( 'billie_top_section1' ) or get_theme_mod( 'billie_top_section2' ) or get_theme_mod( 'billie_top_section3' ) ) {
				$args = array(
					'post_type' => 'page',
					'orderby' => 'post__in',
					'post__in' => array(
						get_theme_mod( 'billie_top_section1' ),
						get_theme_mod( 'billie_top_section2' ),
						get_theme_mod( 'billie_top_section3' ),
					),
					);
	     		$top_section_query = new WP_Query( $args );
				if ( $top_section_query->have_posts() ) {
					echo '<div class="frontpage-top">';
		     		while ( $top_section_query->have_posts() ) : $top_section_query->the_post();
						get_template_part( 'content', 'page' );
					endwhile;
					wp_reset_postdata();
					echo '</div>';
				}
			}
		}
	}
}

if ( ! function_exists( 'billie_bottom_sections' ) ) {
	function billie_bottom_sections() {
		/*The front page sections should not display on the blog listing page*/
		if ( is_front_page() && is_home() ) {
			if ( get_theme_mod( 'billie_bottom_section1' ) or get_theme_mod( 'billie_bottom_section2' ) or get_theme_mod( 'billie_bottom_section3' ) ) {

				$bottomargs = array(
					'post_type' => 'page',
					'orderby' => 'post__in',
					'post__in' => array(
						get_theme_mod( 'billie_bottom_section1' ),
						get_theme_mod( 'billie_bottom_section2' ),
						get_theme_mod( 'billie_bottom_section3' ),
					),
				);
	     		$bottom_section_query = new WP_Query( $bottomargs );
				if ( $bottom_section_query->have_posts() ) {
					echo '<div class="frontpage-bottom">';
		     		while ( $bottom_section_query->have_posts() ) : $bottom_section_query->the_post();
						get_template_part( 'content', 'page' );
					 endwhile;
					wp_reset_postdata();
					echo '</div>';
				}
			}
		}
	}
}


if ( ! function_exists( 'billie_featured_sections' ) ) {
	function billie_featured_sections() {
		if ( billie_has_featured_posts( 1 ) ) {
			echo '<section class="featured-wrap">';
			$featured_posts = billie_get_featured_posts();
			foreach ( (array) $featured_posts as $order => $post ) :
				setup_postdata( $post );
				echo '<div class="featured-post">';
				if ( has_post_thumbnail() ) {
					$background = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'billie-featured-posts-thumb' );
					echo '<div class="featured-inner" style="background: url(' . $background[0] . ');">';
				} else {
					echo '<div class="featured-inner" style="background: ' . esc_attr( get_theme_mod( 'billie_header_bgcolor', '#9cc9c7' ) ) . ';">';
				}
				echo '<div class="post-header">';
				the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				echo '</div>
				<span class="featured-text">';
					echo esc_html( get_theme_mod( 'billie_featured_headline', esc_html__( 'Featured','billie' ) ) );

					echo '<span class="tag-list">';
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

			endforeach;
			wp_reset_postdata();
			echo '</section>';
		}
	}
}