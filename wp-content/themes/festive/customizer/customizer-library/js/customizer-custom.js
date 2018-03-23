/**
 * Customizer Custom Functionality
 *
 */
( function( $ ) {
    
    $( window ).load( function() {
        
        // Show / Hide Color selector for slider setting
        var festive_slider_select_value = $( '#customize-control-festive-slider-type select' ).val();
        festive_customizer_slider_check( festive_slider_select_value );
        
        $( '#customize-control-festive-slider-type select' ).on( 'change', function() {
            var slider_select_value = $( this ).val();
            festive_customizer_slider_check( slider_select_value );
        } );
        
        function festive_customizer_slider_check( slider_select_value ) {
            if ( slider_select_value == 'festive-slider-default' ) {
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-shortcode' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-cats' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-size' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-style' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-style-spacing' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-direction' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-remove-title' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-auto-scroll' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-duration' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-upsell-slider' ).show();
            } else if ( slider_select_value == 'festive-shortcode-slider' ) {
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-cats' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-size' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-style' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-style-spacing' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-direction' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-remove-title' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-auto-scroll' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-duration' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-shortcode' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-upsell-slider' ).hide();
            } else {
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-cats' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-size' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-style' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-style-spacing' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-direction' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-remove-title' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-auto-scroll' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-shortcode' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-slider-duration' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-slider #customize-control-festive-upsell-slider' ).hide();
            }
        }
        
        // Show / Hide Center Navigation
        var festive_center_nav_valign_select_value = $( '#customize-control-festive-set-header-layout select' ).val();
        festive_center_nav_valign_check( festive_center_nav_valign_select_value );
        
        $( '#customize-control-festive-set-header-layout select' ).on( 'change', function() {
            var festive_center_nav_valign_select_value = $( this ).val();
            festive_center_nav_valign_check( festive_center_nav_valign_select_value );
        });
        
        function festive_center_nav_valign_check( festive_center_nav_valign_select_value ) {
            if ( festive_center_nav_valign_select_value == 'festive-header-layout-six' ) {
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-header-split-six' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-bg-color' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-font-color' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-v-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-align-right' ).hide();
            } else if ( festive_center_nav_valign_select_value == 'festive-header-layout-five' ) {
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-nav-center-align' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-bg-color' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-font-color' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-v-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-header-split-six' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-align-right' ).show();
            } else if ( festive_center_nav_valign_select_value == 'festive-header-layout-four' ) {
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-nav-center-align' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-bg-color' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-font-color' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-v-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-header-split-six' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-align-right' ).show();
            } else if ( ( festive_center_nav_valign_select_value == 'festive-header-layout-two' ) || ( festive_center_nav_valign_select_value == 'festive-header-layout-three' ) ) {
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-v-align' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-bg-color' ).hide();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-font-color' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-header-split-six' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-align-right' ).show();
            } else if ( festive_center_nav_valign_select_value == 'festive-header-layout-one' ) {
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-bg-color' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-font-color' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-align-right' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-v-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-header-split-six' ).hide();
            } else {
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-align-right' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-bg-color' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-nav #customize-control-festive-nav-font-color' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-header-split-six' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-v-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-nav-center-align' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-header #customize-control-festive-set-header-align-right' ).hide();
            }
        }
        
        // Show / Hide Color selector for Site Boxed layout
        var festive_blog_value = $( '#customize-control-festive-set-blog-layout select' ).val();
        festive_blog_type_check( festive_blog_value );
        
        $( '#customize-control-festive-set-blog-layout select' ).on( 'change', function() {
            var festive_blog_select_value = $( this ).val();
            festive_blog_type_check( festive_blog_select_value );
        });
        
        function festive_blog_type_check( festive_blog_select_value ) {
            if ( festive_blog_select_value == 'blog-grid-layout' ) {
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-blog-column-spacing' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-blog-top-center' ).hide();
            } else if ( festive_blog_select_value == 'blog-top-layout' ) {
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-blog-top-center' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-blog-column-spacing' ).hide();
            } else {
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-blog-top-center' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-blog-column-spacing' ).hide();
            }
        }
        
        // Show / Hide Blog Summary Settings
        var festive_blg_value = $( '#customize-control-festive-article-content-display select' ).val();
        festive_blg_type_check( festive_blg_value );
        
        $( '#customize-control-festive-article-content-display select' ).on( 'change', function() {
            var festive_blg_select_value = $( this ).val();
            festive_blg_type_check( festive_blg_select_value );
        });
        
        function festive_blg_type_check( festive_blg_select_value ) {
            if ( festive_blg_select_value == 'blog-display-summary' ) {
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-article-content-word-count' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-article-content-readmore' ).show();
            } else {
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-article-content-word-count' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-blog-list #customize-control-festive-article-content-readmore' ).hide();
            }
        }
        
        // Show / Hide Page Featured Image Layout
        var festive_page_layout_value = $( '#customize-control-festive-page-fimage-layout select' ).val();
        festive_page_layout_type_check( festive_page_layout_value );
        
        $( '#customize-control-festive-page-fimage-layout select' ).on( 'change', function() {
            var festive_page_select_value = $( this ).val();
            festive_page_layout_type_check( festive_page_select_value );
        });
        
        function festive_page_layout_type_check( festive_page_select_value ) {
            if ( festive_page_select_value == 'festive-page-fimage-layout-banner' ) {
                $( '#sub-accordion-section-festive-panel-website-section-single-page #customize-control-festive-page-fimage-size' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-single-page #customize-control-festive-page-fimage-fullwidth' ).show();
            } else {
                $( '#sub-accordion-section-festive-panel-website-section-single-page #customize-control-festive-page-fimage-size' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-single-page #customize-control-festive-page-fimage-fullwidth' ).hide();
            }
        }
        
        // Show / Hide Single Post Featured Image Layout
        var festive_single_page_layout_value = $( '#customize-control-festive-single-page-fimage-layout select' ).val();
        festive_single_page_layout_type_check( festive_single_page_layout_value );
        
        $( '#customize-control-festive-single-page-fimage-layout select' ).on( 'change', function() {
            var festive_single_page_select_value = $( this ).val();
            festive_single_page_layout_type_check( festive_single_page_select_value );
        });
        
        function festive_single_page_layout_type_check( festive_single_page_select_value ) {
            if ( festive_single_page_select_value == 'festive-single-page-fimage-layout-banner' ) {
                $( '#sub-accordion-section-festive-panel-website-section-blog-single #customize-control-festive-single-page-fimage-size' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-blog-single #customize-control-festive-single-page-fimage-fullwidth' ).show();
            } else {
                $( '#sub-accordion-section-festive-panel-website-section-blog-single #customize-control-festive-single-page-fimage-size' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-blog-single #customize-control-festive-single-page-fimage-fullwidth' ).hide();
            }
        }
        
        // Show / Hide footer layout settings
        var festive_foot_select_value = $( '#customize-control-festive-footer-layout select' ).val();
        festive_foot_value_check( festive_foot_select_value );
        
        $( '#customize-control-festive-footer-layout select' ).on( 'change', function() {
            var foot_select_value = $( this ).val();
            festive_foot_value_check( foot_select_value );
        } );
        
        function festive_foot_value_check( foot_select_value ) {
            if ( foot_select_value == 'festive-footer-layout-custom' ) {
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-custom-note' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-footer #customize-control-festive-footer-heading-font-color' ).show();
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-icon' ).hide();
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-add' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-standard-note' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-social-note' ).hide();
            } else if ( foot_select_value == 'festive-footer-layout-standard' ) {
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-standard-note' ).show();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-footer #customize-control-festive-footer-heading-font-color' ).show();
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-icon' ).hide();
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-add' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-social-note' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-custom-note' ).hide();
            } else if ( foot_select_value == 'festive-footer-layout-social' ) {
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-icon' ).show();
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-add' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-social-note' ).show();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-standard-note' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-custom-note' ).hide();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-footer #customize-control-festive-footer-heading-font-color' ).hide();
            } else {
                $( '#customize-control-festive-footer-customize input[type=checkbox]' ).attr( 'checked', false );
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-icon' ).hide();
                $( '#sub-accordion-section-festive-panel-text-section-footer #customize-control-festive-website-footer-add' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-standard-note' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-social-note' ).hide();
                $( '#sub-accordion-section-festive-panel-website-section-footer #customize-control-festive-footer-custom-note' ).hide();
                $( '#sub-accordion-section-festive-panel-layout-colors-section-footer #customize-control-festive-footer-heading-font-color' ).hide();
            }
        }
        
    } );
    
} )( jQuery );