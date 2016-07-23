<!DOCTYPE html>
<html>
<head>
	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Page Title -->
	<title>Transitions</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="/favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#254c75">
	<meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">

	<!-- CSS Files -->
	<link rel="stylesheet" href="../style.css?version=1" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body id="body" class="page-template-# page-id-# page-slug-#">

<header>

	<div class="bg"></div>

	<div class="container">
		<div class="row">

			<div class="logo">
				<a href="#/">
					<span class="">LOGO</span>
				</a>
			</div><!--/logo-->

			<button type="button" class="nav-toggle toggle visible-xs visible-sm" id="menu-toggle" onclick="toggleShow('main-nav')">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<nav class="main-nav">
				<ul>
					<li>
						<a href="#/">
							<span>
								Item_primary
							</span>
						</a>
					</li>
				</ul>
			</nav><!--/main-nav-->

			<nav class="header-links">
				<ul>
					<li>
						<a href="#/">
							<span>
								Link_1
							</span>
						</a>
					</li>
				</ul>
			</nav><!--/header-links-->

		</div><!--/row-->

	</div><!--/container-->
</header>

<div id="main">

<div class="container window-height">

	<div class="row">
        <div class="col-xs-24 text-center">
          <h1>Transitions on entry/exit from the screen.</h1>
          <p>Css transitions that get triggered as the page is scrolled. They can be triggered on entry or leave.</p>
          <p>Javascript for this is at the bottom of this php file.</p>
          <p>Scroll down</p>
        </div>
	</div>

</div>

<div class="container window-height">
    <div class="row">
        <div class="col-xs-24 text-center">
            <p>These elements all have transitions that fire as they come onto the page. They repeat if the user scrolls beyond them.</p>
        </div>
        <div class="col-xs-8">
            <p class="transition at-bottom before-transition repeat-transition fade-in">This element fades in.</p>
        </div>
        <div class="col-xs-8">
            <p class="transition at-bottom before-transition repeat-transition fade-in-bottom">This element fades in and goes up.</p>
        </div>
        <div class="col-xs-8">
            <p class="transition at-bottom before-transition repeat-transition fade-in-top">This element fades in and goes down.</p>
        </div>
    </div>
</div>

<div class="container window-height"></div>


</div><!--#main-->

<footer class="footer">

</footer>
<!-- JS files -->
<!-- Jquery -->
<script src="../js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8" ></script>

<!-- Bootstrap core JavaScript -->
<script src="../bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<!-- Custom JS files -->
<script>

$window = $(window);
// Find the top and bottom position of an element, returning the proportion of the screen the element is.
function posOnScreen(elm){
    var rect = elm.getBoundingClientRect();
    var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    var returnVal = { 'top':rect.top / viewHeight, 'bottom':rect.bottom / viewHeight  }
    return returnVal;
}
// Runs css transitions on the elements with the animation class.
function triggerFunction(){
    for (var i = 0; i < $('.transition.at-bottom').length; i++) {
        var $thisElement = $('.transition.at-bottom').eq(i);
        if ( posOnScreen( $thisElement[0] ).top < 1.05 ){
            if (posOnScreen($thisElement[0]).bottom > 0) {
                $thisElement.removeClass('before-transition');
                if (! $thisElement.hasClass('repeat-transition') ) {
                    $thisElement.removeClass('transition')
                };
            }
            else{
                $thisElement.addClass('before-transition');
            };
        }
        else{
            $thisElement.addClass('before-transition')
        };
    };
    for (var i = 0; i < $('.transition.at-top').length; i++) {
        var $thisElement = $('.transition.at-top').eq(i);
        if ( posOnScreen( $thisElement[0] ).top < (- 0.1) ){
            $thisElement.removeClass('after-transition');
            if (! $thisElement.hasClass('repeat-transition') ) {
                $thisElement.removeClass('transition')
            };
        }
        else{
            $thisElement.addClass('after-transition')
        };
    };
};

var scrollInterval,
    previousScrollPos = -1;
jQuery(document).ready(function($) {


    scrollInterval = setInterval(function(){

        if ( $window.scrollTop() !== previousScrollPos ) {

            previousScrollPos = $window.scrollTop();
            triggerFunction();

        };

    }, 1000/60);

});
</script>


<!-- Analytics -->
<? /*
<script src="js/analytics.js" type="text/javascript" charset="utf-8" async defer></script>

<noscript>
	<div>
		<img src="//mc.yandex.ru/watch/29248395"  style="position:absolute;left:-9999px;" alt="" />
	</div>
</noscript>
*/?>

</body>
</html>
