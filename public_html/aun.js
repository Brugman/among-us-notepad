(function($) {

    $('.js-toggle[data-set-dead]').on( 'click', function ( event ) {
        // prevent default
        event.stopPropagation();
        event.preventDefault();
        //
        $(this).parent('.player').toggleClass('dead');
    });

    $('.js-toggle[data-set-status]').on( 'click', function ( event ) {
        // prevent default
        event.stopPropagation();
        event.preventDefault();
        //
        var new_status = $(this).data('set-status');
        var cur_status = $(this).parent('.player').attr( 'data-status' );
        if ( cur_status != new_status ) {
            $(this).parent('.player').attr( 'data-status', new_status );
        } else {
            $(this).parent('.player').attr( 'data-status', '' );
        }
    });

    $('.js-reset').on( 'click', function ( event ) {
        // prevent default
        event.stopPropagation();
        event.preventDefault();
        //
        $('.player').removeClass('dead');
        $('.player:not([data-status="unused"])').attr( 'data-status', 'neutral' );
    });

})( jQuery );