/**
 * Custom Functionality
 */
( function( $ ) {
    
    jQuery( document ).ready( function() {
        
        // Add button to sub-menu item to show nested pages / Only used on mobile
        $( '.main-navigation li.page_item_has_children, .main-navigation li.menu-item-has-children' ).prepend( '<span class="menu-dropdown-btn"><i class="fa fa-angle-down"></i></span>' );
        // Insert up arrow for navigation
        $( '.main-navigation ul > li a' ).wrapInner( '<span class="nav-span"></span>' );
        $( '.main-navigation ul ul' ).prepend( '<span class="nav-arrow"></span>' );
        
        // Mobile nav button functionality
        $( '.menu-dropdown-btn' ).bind( 'click', function() {
            $(this).parent().toggleClass( 'open-page-item' );
        });
        // The menu button
        $( '.header-menu-button' ).click( function(e) {
            $( 'body' ).toggleClass( 'show-main-menu' );
        });
        $( '.main-menu-close' ).click( function(e){
            $( '.header-menu-button' ).click();
        });
        
        // Search Show / Hide
        $( '.search-button' ).click( function(e) {
            $( 'body' ).toggleClass( 'show-site-search' );
            $( '.search-block .search-field' ).focus();
        });
        
        // Scroll To Top Button Functionality
        $( '.scroll-to-top' ).bind( 'click', function() {
            $( 'html, body' ).animate( { scrollTop: 0 }, 800 );
        });
        $( window ).scroll( function(){
            if ( $( this ).scrollTop() > 400 ) {
                $( '.scroll-to-top' ).fadeIn();
            } else {
                $( '.scroll-to-top' ).fadeOut();
            }
        });
		
    });
    
    $(window).resize(function () {
        
        $( '.home-slider-block-inner').height( $( '.home-slider-block-bg' ).outerHeight() );
        
    }).resize();
    
    $(window).load(function() {
        
        festive_home_slider();
        
    });
    
    function festive_home_slider() {
        $( '.home-slider' ).carouFredSel({
            responsive: true,
            circular: true,
            infinite: false,
            direction: 'left',
            width: 1200,
            height: 'variable',
            items: {
                visible: 1,
                width: 1200,
                height: 'variable'
            },
            onCreate: function(items) {
                $( '.home-slider-wrap' ).removeClass( 'home-slider-remove' );
                $( '.home-slider-block-inner').height( $( '.home-slider-block-bg' ).outerHeight() );
            },
            scroll: {
                fx: 'uncover-fade',
                duration: 450
            },
            auto: 6500,
            pagination: '.home-slider-pager',
            prev: '.home-slider-prev',
            next: '.home-slider-next'
        });
    }
    
} )( jQuery );