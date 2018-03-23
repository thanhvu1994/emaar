<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Flexia
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function flexia_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if( get_theme_mod('content_layout') == 'content_layout1' ) {
		$classes[] = 'sidebar-left-right';
	}


	if( get_theme_mod('flexia_navbar_position') == 'flexia-navbar-transparent-top' ) {
		$classes[] = 'transparent-top-navbar';
	}


	return $classes;
}
add_filter( 'body_class', 'flexia_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function flexia_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'flexia_pingback_header' );
