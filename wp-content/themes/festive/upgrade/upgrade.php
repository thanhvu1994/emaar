<?php
/**
 * Functions for users wanting to upgrade to premium
 *
 * @package Festive
 */

/**
 * Display the upgrade to Premium page & load styles.
 */
function festive_premium_admin_menu() {
    global $festive_upgrade_page;
    $festive_upgrade_page = add_theme_page( __( 'About Festive', 'festive' ), '<span class="premium-link">' . __( 'About Festive', 'festive' ) . '</span>', 'edit_theme_options', 'theme_info', 'festive_render_upgrade_page' );
}
add_action( 'admin_menu', 'festive_premium_admin_menu' );

/**
 * Enqueue admin stylesheet only on upgrade page.
 */
function festive_load_upgrade_page_scripts() {
    global $pagenow;
	if ( $pagenow == 'themes.php' ) {
		wp_enqueue_style( 'festive-upgrade-css', get_template_directory_uri() . '/upgrade/css/upgrade-admin.css' );
	    wp_enqueue_script( 'caroufredsel', get_template_directory_uri() . '/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), FESTIVE_THEME_VERSION, true );
	    wp_enqueue_script( 'festive-upgrade-js', get_template_directory_uri() . '/upgrade/js/upgrade-custom.js', array( 'jquery' ), FESTIVE_THEME_VERSION, true );
	}
}
add_action( 'admin_enqueue_scripts', 'festive_load_upgrade_page_scripts' );

/**
 * Render the premium page to download premium upgrade plugin
 */
function festive_render_upgrade_page() {
	get_template_part( 'upgrade/tpl/upgrade-page' );
}
