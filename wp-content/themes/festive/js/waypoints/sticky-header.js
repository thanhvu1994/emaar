/**
 * Custom Functionality
 */
( function( $ ) {
    
    jQuery( document ).ready( function() {
        
        var offset = -80;
        
        var sticky = new Waypoint.Sticky({
            element: $( '.stick-header' )[0],
            handler: function( direction ) {
                if( direction == 'up' ) {
                    $( '.stick-header' ).removeClass( 'animate-sticky-header' );
                } else {
                    $( '.stick-header' ).addClass( 'animate-sticky-header' );
                }
            },
            offset: offset
        })
        
    });
    
} )( jQuery );