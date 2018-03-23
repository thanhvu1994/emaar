<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Festive
 */

if ( ! function_exists( 'customizer_library_festive_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_festive_build_styles() {
	
	// Primary Color
	$setting = 'festive-primary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#comments .form-submit #submit,
				.search-block .search-submit,
				.no-results-btn,
				.search-block .search-submit,
				.festive-navigation-style-blocks a:hover span,
				.festive-navigation-style-blocks li.current_page_item > a span,
				.festive-navigation-style-blocks li.current_page_ancestor > a span,
				.festive-navigation-style-blocks li.current_page_parent > a span,
				.festive-navigation-style-blocks li.current-menu-item > a span,
				.festive-navigation-style-blocks li.current-menu-parent > a span,
				.main-navigation ul ul li a:hover,
				.main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_item > a,
				.main-navigation ul ul li.current-menu-parent > a,
				.main-navigation ul ul li.current_page_parent > a,
				.main-navigation ul ul li.current-menu-ancestor > a,
				.main-navigation ul ul li.current_page_ancestor > a,
				button,
				input[type="button"],
				input[type="reset"],
				input[type="submit"],
				.widget-title-style-underline-short .widget-area .widget-title:after,
				.woocommerce ul.products li.product a.add_to_cart_button, .woocommerce-page ul.products li.product a.add_to_cart_button,
				.woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale,
				.woocommerce button.button.alt,
				.woocommerce-page button.button.alt,
				.woocommerce input.button.alt:hover,
				.woocommerce-page #content input.button.alt:hover,
				.woocommerce .cart-collaterals .shipping_calculator .button,
				.woocommerce-page .cart-collaterals .shipping_calculator .button,
				.woocommerce a.button,
				.woocommerce-page a.button,
				.woocommerce input.button,
				.woocommerce-page #content input.button,
				.woocommerce-page input.button,
				.woocommerce #review_form #respond .form-submit input,
				.woocommerce-page #review_form #respond .form-submit input,
				.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
				.single-product span.onsale,
				.woocommerce nav.woocommerce-pagination ul li span.current,
				.wpcf7-submit'
			),
			'declarations' => array(
				'background' => 'inherit',
                'background-color' => $color
			)
		) );
	}
	
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a,
				.festive-navigation-style-plain a:hover,
				.festive-navigation-style-plain li.current-menu-item > a,
				.festive-navigation-style-plain li.current_page_item > a,
				.festive-navigation-style-plain li.current-menu-parent > a,
				.festive-navigation-style-plain li.current_page_parent > a,
				.festive-navigation-style-plain li.current-menu-ancestor > a,
				.festive-navigation-style-plain li.current_page_ancestor > a,
				.content-area .entry-content a,
				#comments a,
				.post-edit-link,
				.site-title a,
				.entry-content a,
				.festive-blog-standard-block a,
				.widget ul li a,
				#comments .logged-in-as a,
				.entry-footer a,
				.error-404.not-found .page-header .page-title span,
				.header-cart-checkout.cart-has-items i.fa'
			),
			'declarations' => array(
                'color' => $color . ''
			)
		) );
	}
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.festive-navigation-style-underline a:hover,
				.festive-navigation-style-underline li.current-menu-item > a,
				.festive-navigation-style-underline li.current_page_item > a,
				.festive-navigation-style-underline li.current-menu-parent > a,
				.festive-navigation-style-underline li.current_page_parent > a,
				.festive-navigation-style-underline li.current-menu-ancestor > a,
				.festive-navigation-style-underline li.current_page_ancestor > a'
			),
			'declarations' => array(
                'box-shadow' => '0 -4px ' . $color . ' inset'
			)
		) );
	}
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header,
				.site-footer-widgets .widgettitle,
				.festive-navigation-style-underline ul ul'
			),
			'declarations' => array(
                'border-color' => $color
			)
		) );
	}
	/* ---------------------------------------- Primary Color -------- */
	

	// Secondary Color
	$setting = 'festive-secondary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation button:hover,
				#comments .form-submit #submit:hover,
				.search-block .search-submit:hover,
				.no-results-btn:hover,
				button,
				input[type="button"],
				input[type="reset"],
				input[type="submit"],
				.woocommerce input.button.alt,
				.woocommerce-page #content input.button.alt,
				.woocommerce .cart-collaterals .shipping_calculator .button,
				.woocommerce-page .cart-collaterals .shipping_calculator .button,
				.woocommerce a.button:hover,
				.woocommerce-page a.button:hover,
				.woocommerce input.button:hover,
				.woocommerce-page #content input.button:hover,
				.woocommerce-page input.button:hover,
				.woocommerce ul.products li.product a.add_to_cart_button:hover, .woocommerce-page ul.products li.product a.add_to_cart_button:hover,
				.woocommerce button.button.alt:hover,
				.woocommerce-page button.button.alt:hover,
				.woocommerce #review_form #respond .form-submit input:hover,
				.woocommerce-page #review_form #respond .form-submit input:hover,
				.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
				.wpcf7-submit:hover'
			),
			'declarations' => array(
				'background' => 'inherit',
                'background-color' => $color
			)
		) );
	}
	
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover,
				.header-top-bar-left .header-social-icon:hover,
				.widget-area .widget a:hover,
				.site-footer-widgets .widget a:hover,
				.site-footer .widget a:hover,
				.search-btn:hover,
				.search-button .fa-search:hover,
				.woocommerce #content div.product p.price,
				.woocommerce-page #content div.product p.price,
				.woocommerce-page div.product p.price,
				.woocommerce #content div.product span.price,
				.woocommerce div.product span.price,
				.woocommerce-page #content div.product span.price,
				.woocommerce-page div.product span.price,
				.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Body Font
	$setting = 'festive-body-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body,
				.main-navigation ul li a,
				.widget-area .widget a'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	
	// Body Font Color
	$setting = 'festive-body-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body,
                .widget-area .widget a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Heading Font
	$setting = 'festive-heading-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
                .widget-area .widget-title,
                .woocommerce table.cart th,
                .woocommerce-page #content table.cart th,
                .woocommerce-page table.cart th,
                .woocommerce input.button.alt,
                .woocommerce-page #content input.button.alt,
                .woocommerce table.cart input,
                .woocommerce-page #content table.cart input,
                .woocommerce-page table.cart input,
                button, input[type="button"],
                input[type="reset"],
                input[type="submit"]',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	
	// Heading Font Color
	$setting = 'festive-heading-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
                .widget-area .widget-title'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Site Title Font
	$setting = 'festive-title-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title a'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	// Site Logo Max Width
	$setting = 'festive-logo-max-width';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$logo_max_width = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-branding a.custom-logo-link'
			),
			'declarations' => array(
				'max-width' => $logo_max_width . 'px'
			)
		) );
	}
	// Site Logo Max Width
	$setting = 'festive-set-logo-padding-top';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$logo_padding_top = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-branding'
			),
			'declarations' => array(
				'padding-top' => $logo_padding_top . 'px'
			)
		) );
	}
	// Site Logo Max Width
	$setting = 'festive-set-logo-padding-bottom';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$logo_padding_bottom = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-branding'
			),
			'declarations' => array(
				'padding-bottom' => $logo_padding_bottom . 'px'
			)
		) );
	}
	// Site Title Font Size
	$setting = 'festive-title-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$title_font_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title'
			),
			'declarations' => array(
				'font-size' => $title_font_size . 'px'
			)
		) );
	}
	// Site Title Font
	$setting = 'festive-tagline-font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-description'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	// Site Title Font Size
	$setting = 'festive-tagline-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$title_font_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-description'
			),
			'declarations' => array(
				'font-size' => $title_font_size . 'px'
			)
		) );
	}
	// Site Title Bottom Margin
	$setting = 'festive-title-bottom-margin';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$title_bottom_margin = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title'
			),
			'declarations' => array(
				'margin-bottom' => $title_bottom_margin . 'px'
			)
		) );
	}
	
	// Titlebar Background Color
	$setting = 'festive-page-titlebar-bgcolor';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.title-bar.page-header'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	// Titlebar Background Color
	$setting = 'festive-page-titlebar-fontcolor';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.title-bar.page-header h1,
				.page-header .festive-breadcrumbs,
				.page-header .festive-breadcrumbs a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	// Widgets Heading Color
	$setting = 'festive-page-widgets-title-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widgettitle,
				.widget-area .widget-title'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widgettitle,
				.widget-area .widget-title'
			),
			'declarations' => array(
				'border-bottom' => '1px dotted rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.2);'
			)
		) );
	}
	
	// Site Content Padding Top Over ride
	$setting = 'festive-set-content-padding-top';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$content_padding = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.woocommerce #container #content,
				.woocommerce-page #container #content,
				body.page-template-default .content-area .site-main,
				body.page-template-template-left-sidebar .content-area .site-main,
				.error404 .content-area .site-main,
				.content-area-full .site-main,
				.page-template-template-full-width-php .content-area .site-main,
				.woocommerce .content-no-sidebar #container #content,
				.woocommerce-page .content-no-sidebar #container #content,
				.content-no-sidebar .content-area .site-main,
				body .content-area .site-main,
				.widget-area'
			),
			'declarations' => array(
				'padding-top' => $content_padding . 'px !important'
			)
		) );
	}
	// Site Content Padding Top Over ride
	$setting = 'festive-set-content-padding-bottom';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$content_padding = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.woocommerce #container #content,
				.woocommerce-page #container #content,
				body.page-template-default .content-area .site-main,
				body.page-template-template-left-sidebar .content-area .site-main,
				.error404 .content-area .site-main,
				.content-area-full .site-main,
				.page-template-template-full-width-php .content-area .site-main,
				.woocommerce .content-no-sidebar #container #content,
				.woocommerce-page .content-no-sidebar #container #content,
				.content-no-sidebar .content-area .site-main,
				body .content-area .site-main,
				.widget-area'
			),
			'declarations' => array(
				'padding-bottom' => $content_padding . 'px !important'
			)
		) );
	}
	
	// Sidebar Widget Title Size
	$setting = 'festive-blog-widget-title-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$widget_title_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget-title'
			),
			'declarations' => array(
				'font-size' => $widget_title_size . 'px'
			)
		) );
	}
	// Blog Block Spacing
	$setting = 'festive-blog-column-spacing';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$blog_blocks_space = esc_attr( $mod );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.blog-grid-layout-wrap-inner'
			),
			'declarations' => array(
				'margin' => '0 -' . $blog_blocks_space . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.blog-grid-layout .blog-grid-layout-inner'
			),
			'declarations' => array(
				'padding' => '0 ' . $blog_blocks_space . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.blog-grid-layout'
			),
			'declarations' => array(
				'margin' => '0 0 ' . ($blog_blocks_space * 2) . 'px'
			)
		) );
	}
	
	// Slider Spacing
	$setting = 'festive-slider-style-spacing';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$slider_padding = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home-slider-wrap'
			),
			'declarations' => array(
				'padding-top' => $slider_padding . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home-slider-wrap'
			),
			'declarations' => array(
				'padding-bottom' => $slider_padding . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home-slider-wrap.slider-full-width'
			),
			'declarations' => array(
				'padding' => $slider_padding . 'px'
			)
		) );
	}
	
	if ( get_theme_mod( 'festive-footer-customize' ) ) :
		
		// Site Footer Column Widths
		$setting = 'festive-footer-customize-col-1';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$logo_max_width = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-one'
				),
				'declarations' => array(
					'width' => $logo_max_width . '%'
				)
			) );
		}
		$setting = 'festive-footer-customize-col-2';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$logo_max_width = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-two'
				),
				'declarations' => array(
					'width' => $logo_max_width . '%'
				)
			) );
		}
		$setting = 'festive-footer-customize-col-3';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$logo_max_width = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-three'
				),
				'declarations' => array(
					'width' => $logo_max_width . '%'
				)
			) );
		}
		$setting = 'festive-footer-customize-col-4';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$logo_max_width = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-four'
				),
				'declarations' => array(
					'width' => $logo_max_width . '%'
				)
			) );
		}
		$setting = 'festive-footer-customize-col-5';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$logo_max_width = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-five'
				),
				'declarations' => array(
					'width' => $logo_max_width . '%'
				)
			) );
		}
	
	endif;
	
	// Site Boxed Background Color
	$setting = 'festive-boxed-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-boxed'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	
	// Layout Colors Header
	$setting = 'festive-header-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-one,
				.site-header-one .header-bar-inner,
				.site-header-one .search-block,
				.site-header-two,
				.site-header-two .header-bar-inner,
				.site-header-two .site-header-main,
				.site-header-two .search-block,
				.site-header-three,
				.site-header-three .header-bar-inner,
				.site-header-three .site-header-main,
				.site-header-three .search-block,
				.site-header-four,
				.site-header-four .header-bar-inner,
				.site-header-four .site-header-main,
				.site-header-four .search-block,
				.site-header-five,
				.site-header-five .header-bar-inner,
				.site-header-five .site-header-main,
				.site-header-five .search-block,
				.site-header-six .header-top-bar,
				.site-header-six .header-top-bar-left,
				.site-header-six .header-top-bar-right,
				.site-header-six .search-block'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	$setting = 'festive-header-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-one .site-header,
				.site-header-one .header-top-bar,
				.site-header-one .header-bar,
				.site-header-one .main-navigation,
				.site-header-one .header-cart,
				.site-header-two .site-header,
				.site-header-two .header-top-bar,
				.site-header-two .header-bar,
				.site-header-two .main-navigation,
				.site-header-two .header-cart,
				.site-header-three .site-header,
				.site-header-three .header-top-bar,
				.site-header-three .header-bar,
				.site-header-three .main-navigation,
				.site-header-three .header-cart,
				.site-header-four .site-header,
				.site-header-four .header-top-bar,
				.site-header-four .header-bar,
				.site-header-four .site-header-main,
				.site-header-four .main-navigation,
				.site-header-four .header-cart,
				.site-header-five .site-header,
				.site-header-five .header-top-bar,
				.site-header-five .header-bar,
				.site-header-five .site-header-main,
				.site-header-five .main-navigation,
				.site-header-five .header-cart,
				.site-header-six .header-top-bar,
				.site-header-six .header-cart'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	
	$setting = 'festive-topbar-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .header-top-bar,
				.site-header-default .search-block,
				.site-header-six .header-top-bar-left,
				.site-header-six .header-top-bar-right,
				.site-header-six .search-block'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	$setting = 'festive-topbar-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .header-top-bar,
				.site-header-five .header-cart'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Layout Colors Navigation
	$setting = 'festive-nav-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-default .main-navigation,
				.site-header-one .main-navigation,
				.site-header-four .main-navigation,
				.site-header-five .main-navigation,
				.site-header-six .main-navigation'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.festive-navigation-style-blocks .nav-arrow'
			),
			'declarations' => array(
				'border-bottom' => '15px solid rgba(0, 0, 0, 0.1);'
			)
		) );
	}
	$setting = 'festive-nav-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-default .main-navigation a,
				.site-header-one .main-navigation a,
				.site-header-one .header-cart a,
				.site-header-four .main-navigation a,
				.site-header-five .main-navigation a,
				.site-header-six .main-navigation a,
				.site-header-six .header-cart a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	$setting = 'festive-nav-drop-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .main-navigation ul ul'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	$setting = 'festive-nav-drop-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .main-navigation ul ul a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	$setting = 'festive-nav-font-hover-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul li a:hover,
				.main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_item > a,
				.festive-navigation-style-blocks a:hover span,
				.festive-navigation-style-blocks li.current_page_item > a span,
				.festive-navigation-style-blocks li.current_page_ancestor > a span,
				.festive-navigation-style-blocks li.current_page_parent > a span,
				.festive-navigation-style-blocks li.current-menu-item > a span,
				.festive-navigation-style-blocks li.current-menu-parent > a span'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.header-cart-checkout.cart-has-items i.fa,
				.festive-navigation-style-underline a:hover,
				.festive-navigation-style-plain a:hover,
				.festive-navigation-style-plain li.current-menu-item > a,
				.festive-navigation-style-plain li.current_page_item > a,
				.festive-navigation-style-plain li.current-menu-parent > a,
				.festive-navigation-style-plain li.current_page_parent > a,
				.festive-navigation-style-plain li.current-menu-ancestor > a,
				.festive-navigation-style-plain li.current_page_ancestor > a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.festive-navigation-style-underline a:hover,
				.festive-navigation-style-underline li.current-menu-item > a,
				.festive-navigation-style-underline li.current_page_item > a,
				.festive-navigation-style-underline li.current-menu-parent > a,
				.festive-navigation-style-underline li.current_page_parent > a,
				.festive-navigation-style-underline li.current-menu-ancestor > a,
				.festive-navigation-style-underline li.current_page_ancestor > a'
			),
			'declarations' => array(
				'box-shadow' => '0 -4px ' . $color . ' inset'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.festive-navigation-style-underline ul ul'
			),
			'declarations' => array(
				'border-color' => $color
			)
		) );
	}
	$setting = 'festive-nav-font-hover-selected-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul li a:hover,
				.main-navigation ul ul li.current_page_item > a,
				.main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_ancestor > a,
				.festive-navigation-style-blocks a:hover span,
				.festive-navigation-style-blocks li.current_page_item > a span,
				.festive-navigation-style-blocks li.current_page_ancestor > a span,
				.festive-navigation-style-blocks li.current_page_parent > a span,
				.festive-navigation-style-blocks li.current-menu-item > a span,
				.festive-navigation-style-blocks li.current-menu-parent > a span'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Layout Colors Slider
	$setting = 'festive-slider-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home-slider-wrap'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	
	// Slider Block Background Color
	$setting = 'festive-slider-block-bg-color';
	$setting_opacity = 'festive-slider-block-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home-slider-block-bg'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.' . $opacity . ');'
			)
		) );
	}
	$setting = 'festive-slider-block-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.home-slider-block-bg'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Layout Colors Footer
	$setting = 'festive-footer-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	// Footer Heading Font Color
	$setting = 'festive-footer-heading-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widgettitle,
				.site-footer .widget-title'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widgettitle,
				.site-footer .widget-title'
			),
			'declarations' => array(
				'border-bottom' => '1px dotted rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', 0.2);'
			)
		) );
	}
	$setting = 'festive-footer-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Layout Colors Footer Bottom Bar
	$setting = 'festive-bottombar-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-bottom-bar'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	$setting = 'festive-bottombar-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-bottom-bar'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Snow Setting
	if ( get_theme_mod( 'festive-turn-on-snow' ) ) :
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body.festive-background-snow'
			),
			'declarations' => array(
				'background-size' => 'auto',
				'background-repeat' => 'repeat',
				'-webkit-animation' => 'snow 20s linear infinite',
				'-moz-animation' => 'snow 20s linear infinite',
				'-ms-animation' => 'snow 20s linear infinite',
				'animation' => 'snow 20s linear infinite'
			)
		) );
		
	endif;
	
	// Remove Background Image Setting
	if ( get_theme_mod( 'festive-remove-body-bg-image' ) ) :
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body'
			),
			'declarations' => array(
				'background-image' => 'none !important'
			)
		) );
		
	endif;
	
}
endif;

add_action( 'customizer_library_styles', 'customizer_library_festive_build_styles' );

if ( ! function_exists( 'customizer_library_festive_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_festive_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"festive-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;

add_action( 'wp_head', 'customizer_library_festive_styles', 11 );