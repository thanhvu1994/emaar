<?php
/**
 * Functions used to implement options
 *
 * @package Customizer Library Festive
 */

/**
 * Enqueue Google Fonts Example
 */
function customizer_festive_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'festive-title-font', customizer_library_get_default( 'festive-title-font' ) ),
		get_theme_mod( 'festive-tagline-font', customizer_library_get_default( 'festive-tagline-font' ) ),
		get_theme_mod( 'festive-body-font', customizer_library_get_default( 'festive-body-font' ) ),
		get_theme_mod( 'festive-heading-font', customizer_library_get_default( 'festive-heading-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'customizer_festive_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'customizer_festive_fonts' );
