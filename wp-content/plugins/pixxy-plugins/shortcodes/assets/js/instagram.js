jQuery( function( $ ) {

    if($('.insta-wrapper').length) {
        $('.insta-wrapper').lightGallery({
            selector: '.insta-item',
            mode: 'lg-slide',
            closable: false,
            iframeMaxWidth: '80%',
            download: false,
            thumbnail: true
        });
    }

    function makeSquareImages( $imagesSelector ) {
        var $imagesWidth = $imagesSelector.innerWidth();
        $imagesSelector.each( function() {
            $(this).innerHeight( $imagesWidth );
        });
    }

    $(window).on('load resize orientationchange', function() {
        // make square images for inline team
        if($('.insta-wrapper .insta-item').length){
            $('.insta-wrapper .insta-item').each(function() {
                makeSquareImages( $(this) );
            });

        }
    });

});