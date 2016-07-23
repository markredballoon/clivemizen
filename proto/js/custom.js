/*

=== === === === === === ===
	Global Variables
=== === === === === === ===

Variables used throughout the javascript.

*/
var $window 			= $(window), // explination if required
	$main 				= $('#main'),
	scrollPos 			= -1,
	windowWidth 		= $window.width(),
	eventObject 		= { info: 'This object is used to trigger custom events on the page.'},
	$events				= $(eventObject);

// Custom events.
// Fire the custom events 60 times a second, if they are required.
// This is a more efficient way of using scroll or resize events.
var intervalID = setInterval( function() {
	if ( $window.scrollTop() !== scrollPos ){
	    scrollPos = $window.scrollTop();
	    $events.trigger('custom:scroll');
	};
	if ( $window.width() !== windowWidth ){
	    windowWidth = $window.width();
	    $events.trigger('custom:resize');
	}
}, 1000/60);

/*
=== === === === === === ===
	Callback Functions
=== === === === === === ===

Functions that are called multiple times.
*/
function toggleShow(target){
	// Basic toggle for navigation objects. target is the object that will have to 'show' class toggled
	var $target = $main;
	if ( typeof target !== 'object' ) {
		$target = $(target);
	}
	else{
		$target = target;
	}
	$target.toggleClass('show');
}

function isPropertySupported(property){
	// Returns true if propery is supported
	return property in document.body.style;
}

function changeTab(selector, tabIndex){
	// Swap between tabs
	$('.tab-selector li a').removeClass('active-tab');
	$('.tab-selector li a[data-tab="'+tabIndex+'"]').addClass('active-tab');
	$(selector).removeClass('active-tab');
	$(selector).eq(tabIndex).addClass('active-tab');
}

var posOnScreen = function(elm){
	// Gets the top and bottom position of an element relative to the view width.
	// top == 0 means that the element is at the top of the viewport.
	// bottom == 1 means that the bottom of the element is at the bottom of the screen.
	var rect = elm.getBoundingClientRect();
	var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
	var returnVal = { 'top':rect.top / viewHeight, 'bottom':rect.bottom / viewHeight  }
	return returnVal;
}

function checkVisible(elm) {
	// Check if element is visible on screen.
	// Returns true if the element is visible on the screen, otherwise false.
	var rect = elm.getBoundingClientRect();
	var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
	return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
};

/*
=== === === === === === ===
	Ready function
=== === === === === === ===

Fires when the page is ready to start running javascript.
This happens as soon as the browser is ready, so it won't wait for media (images, videos ect.) to load.
*/
jQuery(document).ready(function($) {

	// Object fit fallback:
	if (! isPropertySupported('object-fit') ){
		$('body').addClass('no-object-fit');
		// This class is added to the body. Any instances where no-object fit is used should have a fallback also created. Creating a new element that has a background-image the same as the image source with the correct background-size attribute would be a more comprehensive solution but there are a lot of complications with using this and it won't work for users who have js disabled.
	};

	// Navigation toggle
	$('.toggle').click(function(event) {
		$(this).toggleClass('open');
		if ($(this).find('.sub-menu').length > 0) {
			toggleShow( $(this).find('.sub-menu') );
		};
	});

/*
=== === === === === === ===
	Resize function
=== === === === === === ===

Fires every time the window is resized
*/
$events.on('custom:resize', function(event) {
});
/*
=== === === === === === ===
	Scroll function
=== === === === === === ===

Fires every time the user scrolls the page.
*/
$events.on('custom:scroll', function(event) {
});


});// Close document ready function.


/*
=== === === === === === ===
	Load function
=== === === === === === ===

different from the ready function as it waits for all the media on the page to load
*/
$window.load(function() {

	// console.log('Loaded');

});// Close Load function
