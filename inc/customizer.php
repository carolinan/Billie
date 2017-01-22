<?php
/**
 * Billie Theme Customizer
 *
 * @package Billie
 */

function billie_customize_register( $wp_customize ) {
	/*Add sections and panels to the WordPress customizer*/

	$wp_customize->add_panel( 'billie_action_panel', array(
		'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'title' => __( 'Call to Action', 'billie' ),
		'description'    => __( 'The Call to Action is displayed below the site title in the header.', 'billie' ),
	) );

	$wp_customize->add_panel( 'billie_sections_panel', array(
		'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'title' => __( 'Front page sections', 'billie' ),
		'description'    => __( 'Display pages as different sections of the front page.', 'billie' ),
	) );

	$wp_customize->add_section('billie_section_advanced', array(
		'title' => __( 'Advanced settings', 'billie' ),
		'priority' => 100,
		)
	);

	$wp_customize->get_section( 'header_image' )->title = __( 'Header background', 'billie' );

	$wp_customize->add_setting( 'billie_header_bgcolor', array(
		'default'        => '#9cc9c7',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'billie_header_bgcolor', array(
		'label' => __( 'Header background color:', 'billie' ),
		'section' => 'header_image',
		'settings' => 'billie_header_bgcolor',
		'priority' => 1,
	) ) );

	$wp_customize->add_setting( 'billie_header_bgpos',		 array(
		'sanitize_callback' => 'billie_sanitize_bgpos',
		'default' => 'center bottom',
	) );

	$wp_customize->add_control( 'billie_header_bgpos',		array(
		'type' => 'select',
		'label'        => __( 'Header background image position:', 'billie' ),
		'choices' => array(
			'left top'		=> __( 'left top','billie' ),
			'left center'	=> __( 'left center','billie' ),
			'left bottom'	=> __( 'left bottom','billie' ),
			'right top'		=> __( 'right top','billie' ),
			'right center'	=> __( 'right center','billie' ),
			'right bottom'	=> __( 'right bottom','billie' ),
			'center top'	=> __( 'center top','billie' ),
			'center center'	=> __( 'center center','billie' ),
			'center bottom'	=> __( 'center bottom','billie' ),
		),
		'section' => 'header_image',
	) );

	$wp_customize->add_setting( 'billie_header_bgsize',		 array(
		'sanitize_callback' => 'billie_sanitize_bgsize',
	) );

	$wp_customize->add_control( 'billie_header_bgsize',		array(
		'type' => 'select',
		'label'        => __( 'Header background image size:', 'billie' ),
		'choices' => array(
			'cover'		=> __( 'cover','billie' ),
			'contain'	=> __( 'contain','billie' ),
			'auto'		=> __( 'auto','billie' ),
		),
		'section' => 'header_image',
	) );

	$wp_customize->add_setting( 'billie_header_bgrepeat',		 array(
		'sanitize_callback' => 'billie_sanitize_bgrepeat',
		'default' => 'no-repeat',
	) );

	$wp_customize->add_control( 'billie_header_bgrepeat',		array(
		'type' => 'select',
		'label' => __( 'Header background image repeat:', 'billie' ),
		'choices' => array(
		'repeat' => __( 'repeat','billie' ),
		'repeat-x' => __( 'repeated only horizontally','billie' ),
		'repeat-y' => __( 'repeated only vertically','billie' ),
		'no-repeat' => __( 'no repeat','billie' ),
		),
		'section' => 'header_image',
	) );

	// Hide meta.
	$wp_customize->add_setting( 'billie_hide_meta',		array(
		'sanitize_callback' => 'billie_sanitize_checkbox',
		)
	);
	$wp_customize->add_control('billie_hide_meta',		array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the meta information.', 'billie' ),
		'section' => 'billie_section_advanced',
		)
	);

	// Hide author.
	$wp_customize->add_setting( 'billie_hide_author',		array(
		'sanitize_callback' => 'billie_sanitize_checkbox',
		)
	);
	$wp_customize->add_control('billie_hide_author',		array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the author, post date and tag information.', 'billie' ),
		'section' => 'billie_section_advanced',
		)
	);

	/* Call to action text **/
	$wp_customize->add_section('billie_section_one',      array(
		'title' => __( 'Call to Action', 'billie' ),
		'priority' => 100,
		'panel'  => 'billie_action_panel',
		)
	);

	$wp_customize->add_setting( 'billie_action_text',		array(
		'sanitize_callback' => 'billie_sanitize_text',
		)
	);

	$wp_customize->add_control('billie_action_text',		array(
		'type' => 'text',
		'label' => __( 'Add this text to the Call to Action button on the front page:', 'billie' ),
		'section' => 'billie_section_one',
		)
	);

	/* Call to action link **/
	$wp_customize->add_setting( 'billie_action_link',		array(
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control('billie_action_link',		array(
		'type' => 'text',
		'label' => __( 'Add a link to the Call to action button:', 'billie' ),
		'section' => 'billie_section_one',
		)
	);

	$wp_customize->add_setting( 'billie_hide_action',		array(
		'sanitize_callback' => 'billie_sanitize_checkbox',
		)
	);
	$wp_customize->add_control('billie_hide_action',		array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the Call to Action button.', 'billie' ),
		'section' => 'billie_section_one',
		'priority' => 1,
		)
	);

	$wp_customize->add_setting( 'billie_action_color', array(
		'default'        => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'billie_action_color', array(
		'label'        => __( 'Call to Action text color:', 'billie' ),
		'section' => 'billie_section_one',
		'settings'  => 'billie_action_color',
	) ) );

	$wp_customize->add_setting( 'billie_action_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color_no_hash',

	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'billie_action_bgcolor', array(
	    'label'   => __( 'Call to Action background color:','billie' ),
	    'section' => 'billie_section_one',
	    'settings' => 'billie_action_bgcolor',
	) ) );

	/*Advanced settings*/
	$wp_customize->add_setting( 'billie_hide_search',		array(
			'sanitize_callback' => 'billie_sanitize_checkbox',
		)
	);

	$wp_customize->add_control('billie_hide_search',		array(
			'type' => 'checkbox',
			'label' => __( 'Check this box to hide the search form in the header.', 'billie' ),
			'section' => 'billie_section_advanced',
		)
	);

	$wp_customize->add_setting( 'billie_hide_title',		array(
			'sanitize_callback' => 'billie_sanitize_checkbox',
		)
	);
	$wp_customize->add_control('billie_hide_title',		array(
			'type' => 'checkbox',
			'label' => __( 'Check this box to hide the clickable site title in the header menu.', 'billie' ),
			'section' => 'billie_section_advanced',
		)
	);

	/*Frontpage sections*/

	/* Top Section */
	$wp_customize->add_section( 'billie_top_section', array(
			'title' => __( 'Top Section', 'billie' ),
			'panel'  => 'billie_sections_panel',
			'description' => __( 'Choose upto 3 pages that will be displayed above your blog content. Note: To combine the page sections with a page, you also need to select a page template.', 'billie' ),
	) );

	for ( $i = 1; $i < 4; $i++ ) {
		$wp_customize->add_setting( 'billie_top_section' . $i,	 array(
			'sanitize_callback' => 'billie_sanitize_page',
		) );

		$wp_customize->add_control( 'billie_top_section' . $i,		array(
			'default' => 0,
			'type' => 'dropdown-pages',
			'label' => __( 'Choose a page:','billie' ),
			'section' => 'billie_top_section',
			'allow_addition' => true,
		) );
	}

	$wp_customize->selective_refresh->add_partial( 'billie_top_section1', array(
		'selector' => '.frontpage-top',
		'container_inclusive' => true,
		'render_callback' => 'bille_top_sections',
	) );

	/* Bottom Section */
	$wp_customize->add_section( 'billie_bottom_section', array(
		'title' => __( 'Bottom Section', 'billie' ),
		'panel'  => 'billie_sections_panel',
		'description' => __( 'Choose upto 3 pages that will be displayed below your blog content, but above the footer. Note: To combine the page sections with a page, you also need to select a page template.', 'billie' ),
	) );

	for ( $i = 1; $i < 4; $i++ ) {
		$wp_customize->add_setting( 'billie_bottom_section' . $i,		 array(
			'sanitize_callback' => 'billie_sanitize_page',
		) );

		$wp_customize->add_control( 'billie_bottom_section' . $i,		array(
			'default' => 0,
			'type' => 'dropdown-pages',
		    'label' => __( 'Choose a page:','billie' ),
			'section' => 'billie_bottom_section',
			'allow_addition' => true,
		) );
	}

	$wp_customize->selective_refresh->add_partial( 'billie_bottom_section1', array(
		'selector' => '.frontpage-bottom',
		'container_inclusive' => true,
		'render_callback' => 'bille_bottom_sections',
	) );

	/* if jetpack is installed, add the featured heading to the customizer. */
	$wp_customize->add_setting( 'billie_featured_headline',		array(
		'sanitize_callback' => 'billie_sanitize_text',
		'default'        => __( 'Featured', 'billie' ),
		)
	);
	$wp_customize->add_control('billie_featured_headline',		array(
		'type' => 'text',
		'label' => __( 'Label your featured content:', 'billie' ),
		'section' => 'featured_content',
		)
	);

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'billie_hide_title' )->transport  = 'postMessage';

	if ( billie_has_featured_posts( 1 ) ) {
		$wp_customize->get_setting( 'billie_featured_headline' )->transport  = 'postMessage';
	}
}
add_action( 'customize_register', 'billie_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function billie_customize_preview_js() {
	wp_enqueue_script( 'billie_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'billie_customize_preview_js' );


function billie_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function billie_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

// Sanitize bg position.
function billie_sanitize_bgpos( $input ) {
	$valid = array(
		'left top'		=> __( 'left top','billie' ),
		'left center'	=> __( 'left center','billie' ),
		'left bottom'	=> __( 'left bottom','billie' ),
		'right top'		=> __( 'right top','billie' ),
		'right center'	=> __( 'right center','billie' ),
		'right bottom'	=> __( 'right bottom','billie' ),
		'center top'	=> __( 'center top','billie' ),
		'center center'	=> __( 'center center','billie' ),
		'center bottom'	=> __( 'center bottom','billie' ),
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

// Sanitize bg size.
function billie_sanitize_bgsize( $input ) {
	$valid = array(
		'cover'		=> __( 'cover','billie' ),
		'contain'	=> __( 'contain','billie' ),
		'auto'		=> __( 'auto','billie' ),
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

// Sanitize bg repeat.
function billie_sanitize_bgrepeat( $input ) {
	$valid = array(
		'repeat'		=> __( 'repeat','billie' ),
		'repeat-x'		=> __( 'repeated only horizontally','billie' ),
		'repeat-y'		=> __( 'repeated only vertically','billie' ),
		'no-repeat'		=> __( ' no repeat','billie' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

// Sanitize the page select lists.
function billie_sanitize_page( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}
