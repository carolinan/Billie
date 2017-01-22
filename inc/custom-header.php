<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package billie
 */

/**
 * Set up the WordPress core custom header feature.
 */
function billie_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'billie_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/flower.jpg',
		'default-text-color'     => '000000',
		'flex-height'            => true,
		'flex-width'             => true,
		'width'                  => 2000,
		'height'                 => 600,
		'wp-head-callback'       => 'billie_customize_css',
		'admin-head-callback'    => 'billie_admin_header_style',
		'admin-preview-callback' => 'billie_admin_header_image',
		)
	) );

	register_default_headers( array(
		'flower' => array(
			'url'           => '%s/images/flower.jpg',
			'thumbnail_url' => '%s/images/flower.jpg',
			'description'   => __( 'Flower', 'billie' ),
		),
	) );
}

add_action( 'after_setup_theme', 'billie_custom_header_setup' );
