<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Festive
 */
?><!DOCTYPE html><!-- Festive Premium -->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0, user-scalable=0" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page">
<div class="site-boxed <?php echo ( get_theme_mod( 'festive-remove-round-corners' ) ) ? sanitize_html_class( 'festive-nocorners' ) : ''; ?> <?php echo ( get_theme_mod( 'festive-footer-bottom-space' ) ) ? sanitize_html_class( 'festive-no-footer-space' ) : ''; ?>">

	<?php get_template_part( '/templates/header/header' ); ?>

<?php if ( is_front_page() ) : ?>

    <?php get_template_part( '/templates/slider/homepage-slider' ); ?>

<?php endif; ?>

<?php get_template_part( '/templates/title-bar' ); ?>

<?php if ( !is_front_page() && is_page() && get_theme_mod( 'festive-page-fimage-layout' ) == 'festive-page-fimage-layout-banner' ) : ?>

	<?php get_template_part( '/templates/page/page-banner' ); ?>

<?php elseif ( is_single() && get_theme_mod( 'festive-single-page-fimage-layout' ) == 'festive-single-page-fimage-layout-banner' ) : ?>

	<?php get_template_part( '/templates/page/page-banner-single' ); ?>

<?php endif; ?>

<div class="site-content site-container <?php echo ( ! is_active_sidebar( 'sidebar-1' ) ) ? sanitize_html_class( 'content-no-sidebar' ) : sanitize_html_class( 'content-has-sidebar' ); ?> <?php echo ( get_theme_mod( 'festive-set-blog-layout' ) == 'blog-top-layout' && get_theme_mod( 'festive-blog-top-center' ) == 1 ) ? sanitize_html_class( 'festive-blog-top-layout-center' ) : ''; ?> <?php echo ( get_theme_mod( 'festive-shop-remove-border' ) ) ? sanitize_html_class( 'festive-remove-product-borders' ) : ''; ?> <?php echo ( get_theme_mod( 'festive-blog-widget-title-centeralign' ) ) ? sanitize_html_class( 'festive-centeralign-widget-title' ) : ''; ?> <?php echo ( get_theme_mod( 'festive-blog-widget-title-style' ) ) ? sanitize_html_class( get_theme_mod( 'festive-blog-widget-title-style' ) ) : sanitize_html_class( 'widget-title-style-plain' ); ?>">