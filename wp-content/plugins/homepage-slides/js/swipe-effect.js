var $swipeCarousels;
jQuery(document).ready(function($) {
    $swipeCarousels = $('.carousel.swipe-enabled');
	if ( $swipeCarousels.length > 0 ) {
		var swiped = false,
			carouselTimeout;
		$swipeCarousels.on({
			'swipeleft':function(){
				swiped = true;
				$(this).carousel('next') ;
			},
			'swiperight':function(){
				swiped = true;
				$(this).carousel('prev') ;
			},
			'slid.bs.carousel':function(event){
				swiped = false;
			},
			'dragstart': function() {
	  		return false;
			}
		});
		$('.item a').on('click', function(event) {
            console.log($(this));
            if (! $(this).hasClass('swipe--can-click') ) {
                event.preventDefault();
                carouselTimeout = setTimeout(function() {
    				if (!swiped) {
                        console.log('clicked and not moved');
                        $('.item.active a').addClass('swipe--can-click')[0].click();
                        setTimeout(function(){
                            $('.swipe--can-click').removeClass('swipe--can-click');
                        }, 20);
    				}
    				else{
    					return false;
    				};
    			} , 10);
            } else{
                return true;
            };
		});
	};
});
