// Requires jQuery and custom.js

var scrollPos = -1,
    $window = $(window),
    windowWidth = $window.width(),
    intervalID;

var stickyEle = function(id, type){
    // JS for making sticky elements.
    // id is the id of the wrapping element.
    // type is the type of sticky element:
    //      banner (full width)
    //      panel (not full-width)
    //      track (any width, has a start and stop point)

    var $wrap = $('#'+id),
        $element = $wrap.find('.sticky-element'),
        $ghost = $wrap.find('.ghost'),
        topPos = $wrap.attr('data-top'),
        topPosNum = parseInt(topPos);

    // Clone element html into the ghost element
    $ghost.html( $element.html() );

    if (type === 'banner') {
        // Used for sticky navigation
        $ghost.css({
            'top': topPos,
            'left': 0,
            'width': '100%'
        });
        $events.on('custom:scroll', function(event) {
            if ( $wrap[0].getBoundingClientRect().top <= topPosNum ){
                if ( $ghost.css('display') === 'none' ){
                    $ghost.css('display', 'block');
                    $wrap.trigger('sticky:stuck')
                } else {
                    $ghost.css('display', 'block');
                }
            }
            else{
                if ( $ghost.css('display') === 'block' ){
                    $ghost.css('display', 'none');
                    $wrap.trigger('sticky:unstuck');
                } else {
                    $ghost.css('display', 'none');
                }
            }
        });
    }
    else if ( type === 'panel' ){
        // Used for sticky sidebars that don't become un-sticky
        $ghost.css({
            'top': topPos,
            'left': parseInt( $element.offset().left )+'px',
            'width': parseInt( $element.width() )
        });
        $events.on('custom:resize', function(event) {
            windowWidth = $window.width();
            $ghost.css({
                'top': topPos,
                'left': parseInt( $element.offset().left )+'px',
                'width': parseInt( $element.width() )
            });
        });
        $events.on('custom:scroll', function(event) {
            if ( $wrap[0].getBoundingClientRect().top <= topPosNum ){
                if ( $ghost.css('display') === 'none' ){
                    $element.css('visibility', 'hidden');
                    $ghost.css('display', 'block');
                    $wrap.trigger('sticky:stuck');
                } else {
                    $element.css('visibility', 'hidden');
                    $ghost.css('display', 'block');
                }
            }
            else{
                if ( $ghost.css('display') === 'block' ){
                    $element.css('visibility', 'visible');
                    $ghost.css('display', 'none');
                    $wrap.trigger('sticky:unstuck');
                } else {
                    $element.css('visibility', 'visible');
                    $ghost.css('display', 'none');
                }
            }
        });

    }
    else if ( type === 'track' ){
        // Used for sticky elements that become stuck again.
        $ghost.css({
            'top': topPos,
            'left': parseInt( $element.offset().left )+'px',
            'width': parseInt( $element.width() )
        });

        $events.on('custom:resize', function(event) {
            windowWidth = $window.width();
            $ghost.css({
                'top': topPos,
                'left': parseInt( $element.offset().left )+'px',
                'width': parseInt( $element.width() )
            });
        });

        $events.on('custom:scroll', function(event) {
            var wrapBound = $wrap[0].getBoundingClientRect();
            var windowHeight = $window.height();
            if ( wrapBound.top <= topPos && wrapBound.bottom > windowHeight){
                if ( $ghost.css('display') === 'none' ){
                    $element.css('visibility', 'hidden');
                    $ghost.css('display', 'block');
                    $wrap.trigger('sticky:stuck');
                } else{
                    $element.css('visibility', 'hidden');
                    $ghost.css('display', 'block');
                }
            }
            else if ( wrapBound.bottom < windowHeight ){
                if ( $ghost.css('display') === 'block' ){
                    $element.css({
                        'top': 'auto',
                        'bottom':'0px',
                        'visibility': 'visible'
                    });
                    $ghost.css('display', 'none');
                    $wrap.trigger('sticky:bottom');
                } else {
                    $element.css({
                        'top': 'auto',
                        'bottom':'0px',
                        'visibility': 'visible'
                    });
                    $ghost.css('display', 'none');
                };
            }
            else{
                if ( $ghost.css('display') === 'block' ){
                    $element.css({
                        'top': '0px',
                        'bottom':'auto',
                        'visibility': 'visible'
                    });
                    $ghost.css('display', 'none');
                    $wrap.trigger('sticky:top');
                } else{
                    $element.css({
                        'top': '0px',
                        'bottom':'auto',
                        'visibility': 'visible'
                    });
                    $ghost.css('display', 'none');
                }
            }
        });
    }
    else {
        console.log('under development');
    }
}

jQuery(document).ready(function($) {
    var stickyElements = $('.sticky');
    for (var i = 0; i < stickyElements.length; i++) {
        stickyEle( $(stickyElements[i]).attr('id'), $(stickyElements[i]).attr('data-sticky-type'));
    };

    // $('#sticky3').on({
    //     'sticky:stuck': function(){
    //         console.log('stuck');
    //     },
    //     'sticky:top': function(){
    //         console.log('top');
    //     },
    //     'sticky:bottom': function(){
    //         console.log('bottom');
    //     }
    // });

});
