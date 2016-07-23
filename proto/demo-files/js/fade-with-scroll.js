var fadeWithScroll = function( parent, element, direction ){
    var positionOnScreen = posOnScreen( $(parent)[0] ).top;
    if (direction === 'in'){
        if (positionOnScreen < 0) {
    		$(element).css('opacity', '1');
    	} else if (positionOnScreen > 1) {
    		$(element).css('opacity', '0');
    	}
    	else {
    		$(element).css('opacity', (1 - positionOnScreen) );
    	}
    }
    else if (direction === 'out'){
        if (positionOnScreen < 0) {
    		$(element).css('opacity', '0');
    	} else if (positionOnScreen > 1) {
    		$(element).css('opacity', '1');
    	}
    	else {
    		$(element).css('opacity', (positionOnScreen) );
    	}
    };
}

$events.on('custom:scroll', function() {
    fadeWithScroll('.parent', '.scroll-fade-in', 'in');
    fadeWithScroll('.parent + div', '.scroll-fade-out', 'out');
});
