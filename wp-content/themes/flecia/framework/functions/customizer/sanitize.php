<?php
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;


if ( ! function_exists( 'flexia_sanitize_integer' ) ) :
/**
 * Sanitize integers
 * @since 1.0.0
 */
function flexia_sanitize_integer( $input ) {
	return absint( $input );
}

endif;


if ( ! function_exists( 'flexia_sanitize_choices' ) ) :
/**
 * Sanitize choices
 * @since 1.0.0
 */
function flexia_sanitize_choices( $input, $setting ) {
	
	// Ensure input is a slug
	$input = sanitize_key( $input );
	
	// Get list of choices from the control
	// associated with the setting
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it;
	// otherwise, return the default
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
endif;

if ( ! function_exists( 'flexia_sanitize_checkbox' ) ) :
/**
 * Sanitize checkbox values
 * @since 1.0.0
 */
function flexia_sanitize_checkbox( $input ) {
	if ( $input ) {
		$output = '1';
	} else {
		$output = false;
	}
	return $output;
}
endif;


