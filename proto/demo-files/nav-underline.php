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
	<title>Starting page</title>

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

<div class="container">
	<div class="row">
        <div class="col-xs-24 text-center">
          <h1>Underline that follows the hovered element.</h1>
          <p>As the user hovers over the different cta elements the line moves along to be underneath the hovered elements.</p>
          <p>Javascript is at the bottom of this document and the Styles are in boostrap/less/rb/example.less</p>
          <p>Taken from the <a href="http://www.happyatheartyoga.com/" target="_blank"> happy at heart</a> website</p>
        </div>
	</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-24 col-xs-offset-0 col-sm-22 col-sm-offset-1 col-lg-24 col-lg-offset-0 footer-links">
            <a class="footer-link" href="#">
                <div class="cta-image">
                    <img src="http://alf.balloonhost.co.uk/wp-content/themes/redballoon/images/cta/cta-offer-1.jpg" alt="What we offer">
                </div>
                <div class="cta-title">
                    <span class="h2">What We Offer</span>
                </div>
                <div class="cta-info">
                    <p>Find out more about our classes and activities.</p>
                </div>
            </a>
            <a class="footer-link current" href="#">
                <div class="cta-image">
                    <img src="http://alf.balloonhost.co.uk/wp-content/themes/redballoon/images/cta/meet-alicia-cta.jpg" alt="Meet Alicia">
                </div>
                <div class="cta-title">
                    <span class="h2">Meet Alicia</span>
                </div>
                <div class="cta-info">
                    <p>Learn more about our founder.<br>&nbsp;</p>
                </div>
            </a>
            <a class="footer-link" href="#">
                <div class="cta-image">
                    <img src="http://alf.balloonhost.co.uk/wp-content/themes/redballoon/images/cta/benefits-cta.jpg" alt="Benefits">
                </div>
                <div class="cta-title">
                    <span class="h2">Benefits</span>
                </div>
                <div class="cta-info">
                    <p>Discover some of the many benefits that this practice can offer your child.</p>
                </div>
            </a>
            <div class="underline-track">
                <div class="underline-element" style="transform: translateX(352.766px) translateZ(0px);"></div>
            </div>
        </div>
    </div><!--row-->
</div>

</div><!--#main-->

<footer class="footer">

</footer>
<!-- JS files -->
<!-- Jquery -->
<script src="../js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8" ></script>

<!-- Bootstrap core JavaScript -->
<script src="../bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<!-- Custom JS files -->
<script src="../js/custom.js" type="text/javascript" charset="utf-8"></script>

<script>
function moveUnderline( underline, parent, target, innerPadding ){
    if (innerPadding == 'undefined'){
        innerPadding = false;
    }
    var underlineWidth = $(underline).width();
    var parentOffset = $(parent).offset().left;
    var targetOffset = $(target).offset().left;
    var targetWidth  = $(target).width();
    if (innerPadding === true){
        parentOffset += (parseInt( $(parent).css('padding-left') ) /2);
    }
    var translateVal = targetOffset - parentOffset + (targetWidth/2) - (underlineWidth / 2);
    $(underline).css('transform', 'translateX('+translateVal+'px) translateZ(0)');
}

jQuery(document).ready(function($) {

    // Underline for footer calls to action
	$('.footer-links .footer-link').hover(function() {
		moveUnderline('.footer-links .underline-element', '.footer-links', $(this)[0] , true);
		setTimeout( function(){ $('.footer-links .underline-element').addClass('active'); }, 50);
	}, function() {
		/* Stuff to do when the mouse leaves the element */
	});
	$('.footer-links').on('mouseleave', function(event) {
		if ( $('.footer-links li.current').length > 0){
			moveUnderline('.footer-links .underline-element', '.footer-links', '.current', true);
		}
		else{
			$('.footer-links .underline-element').removeClass('active');
		};
	});
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
