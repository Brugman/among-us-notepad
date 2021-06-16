(function($) {

    function fixTableOrder( table ) {
        table.find('tr').sort( function ( a, b ) {
            return $( a ).attr( 'data-id' ).localeCompare( $( b ).attr( 'data-id' ) );
        }).appendTo( table );
    }

    $('.js-toggle[data-set-dead]').on( 'click', function ( event ) {
        // prevent default
        event.stopPropagation();
        event.preventDefault();
        // toggle class on row
        $(this).parents('.player').toggleClass('dead');
    });

    $('.js-toggle[data-set-status]').on( 'click', function ( event ) {
        // prevent default
        event.stopPropagation();
        event.preventDefault();
        // get current and new status
        let new_status = $(this).data('set-status');
        let cur_status = $(this).parents('.player').attr( 'data-status' );
        // if they differ, set new status, else remove status
        if ( cur_status != new_status ) {
            $(this).parents('.player').attr( 'data-status', new_status );
        } else {
            $(this).parents('.player').attr( 'data-status', '' );
        }
    });

    $('.js-toggle-unused').on( 'click', function ( event ) {
        // prevent default
        event.stopPropagation();
        event.preventDefault();
        // get player
        let player = $(this).parents('.player');
        // move between tables
        if ( $(this).parents('.active-players').length ) {
            player.attr( 'data-status', 'unused' ).appendTo('.unused-players').removeClass('dead');
            fixTableOrder( $('.unused-players') );
        } else {
            player.attr( 'data-status', 'neutral' ).appendTo('.active-players');
            fixTableOrder( $('.active-players') );
        }
    });

    $('.js-reset').on( 'click', function ( event ) {
        // prevent default
        event.stopPropagation();
        event.preventDefault();
        // reset status
        $('.active-players .player').attr( 'data-status', 'neutral' ).removeClass('dead');
    });

})( jQuery );