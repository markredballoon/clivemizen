// Requires custom.js and jQuery to be loaded.
var popInOut = function( elements, direction, speed, delay, easing, listener ){
    // Pops elements in and out when the function is called. The element they are being used upon will have their transform and opacity values over-written.
    // listener is the css selector of the element that receives the 'popping' and 'popped' events. by default it is the $events element. For speed this should be an element with an ID. If you don't want any event to be triggerd set listener == false.
    var $elements = elements,
        noElements = $elements.length,
        compoundTiming = 0,
        easingType = typeof(easing) === 'string'? easing : 'linear',
        transitionSpeed = typeof(speed) === 'number' && speed > 0 ? speed : 300,
        transitionDelay = typeof(delay) === 'number' && delay > 0 ? delay : 200;

    $elements.css({
        'transform-origin': 'center',
        'transition-timing-function': easingType
    });
    if (listener === 'none'){
        $listener = false;
    } else{
        var $listener = $(listener).length > 0 ? $(listener) : $events;
    }

    if (direction === 'in') {
        if ( $elements.eq(0).attr('data-pop-state') !== 'in' ){
            $listener.trigger('popIn:popping');
            for (var i = 0; i < noElements; i++) {

                (function ( element ){
                    setTimeout( function() {
                        $(element).css({
                            'transform': 'scale(1)',
                            'opacity': '1',
                            'transition-duration': transitionSpeed+'ms'
                        });
                        $(element).attr('data-pop-state', 'in');
                    }, compoundTiming)

                })( $elements[i] );

                compoundTiming += transitionDelay;

                if (i === noElements - 1 && $listener !== false) {
                    (function(element){
                        setTimeout(function(){
                            $(element).trigger('popIn:popped');;
                        },(compoundTiming + transitionSpeed) )
                    })($listener[0]);
                }
            }
        }
    }
    else{
        if ( $elements.eq(0).attr('data-pop-state') !== 'out' ){
            $listener.trigger('popIn:popping');
            for (var i = 0; i < noElements; i++) {
                (function (element){
                    setTimeout( function() {
                        $(element).css({
                            'transform': 'scale(0.3)',
                            'opacity': '0',
                            'transition-duration': transitionSpeed+'ms'
                        });
                        $(element).attr('data-pop-state', 'out');
                    }, compoundTiming)
                })( $elements[i] );
                compoundTiming += transitionDelay;

                if (i === noElements - 1 && $listener !== false)  {
                    (function(element){
                        setTimeout(function(){
                            $(element).trigger('popIn:hidden');;
                        },(compoundTiming + transitionSpeed) )
                    })($listener[0]);
                }

            }
        }
    }
}
// Pulse function for demo page. Will need a way of turning on and off with a throttle to prevent "weirdness" occuring if being used on site.
var pulse = function(target){
    popInOut( $(target), 'out', 300, 200 );
    setTimeout(function() {
        popInOut( $(target), 'in', 300, 200 );
        setTimeout(function() {
            pulse(target);
        }, 900);
    } , 201)
}
if ($('.pop-in-on-scroll').length > 0) {
    // Pop in elements when they appear on the screen (based off of class on ancesstor).
    // This will not work with an offset. That work differently.
    var $popOnScroll = $('.pop-in-on-scroll');
    $events.on('custom:scroll', function(event) {
        for (var i = 0; i < $popOnScroll.length; i++) {
            // Sets the values of the speed, delay and easing. Sets defaults if none are set.
            var iSpeed = parseInt($popOnScroll.eq(i).attr('data-pop-speed')),
                iDelay = parseInt($popOnScroll.eq(i).attr('data-pop-delay')),
                iEasing = $popOnScroll.eq(i).attr('data-pop-easing');
            // Defaults:
            iSpeed = iSpeed > 0 ? iSpeed : 300;
            iDelay = iDelay > 0 ? iDelay : 200;
            iEasing = typeof( iEasing ) === 'undefined' ? 'linear' : iEasing;
            // Checks if the elements should be popped in or out.
            if ( checkVisible( $popOnScroll[i] ) ){
                popInOut( $popOnScroll.eq(i).find('.pop'), 'in', iSpeed, iDelay, iEasing ,'.pop-in-on-scroll:eq('+i+')' );
            }
            else{
                popInOut( $popOnScroll.eq(i).find('.pop'), 'out', 1, 1, iEasing ,'.pop-in-on-scroll:eq('+i+')' );
            };
        };
    });
};
