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
	<title>Pop in</title>
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

    <style media="screen">
        .square{
            position: relative;
            padding-bottom: 100%;
            background-color: red;
        }
        .circle{
            position: relative;
            padding-bottom: 100%;
            background-color: blue;
            border-radius: 50%;
        }
        .pulse{
            position: relative;
            padding-bottom: 100%;
            border-radius: 10%;
            background-color: green;
        }
        .pop-1{
            position: relative;
            padding-bottom: 100%;
            background-color: yellow;
        }
        .pop-2{
            position: relative;
            padding-bottom: 100%;
            background-color: purple;
        }
        .pop-in-on-scroll{
            display: block;
        }
    </style>

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
              <h1>Pop in elements</h1>
              <p>Elements can be poped in when they enter the screen or when they are triggered (with a button press for example).</p>
              <p>Styles are in the header of this file. JS is in js/demos/pop-in.js</p>
              <p>The speed and delay between each element can be set in ms (must be above 0).</p>
              <p>The css easing for each element can also be set. By default it is set to linear.</p>
              <p>custom:popping event gets triggered on the $events element when elements start to pop in. custom:popped event gets triggered on the $events element when all elements have been poped.</p>
            </div>
    	</div>
    </div>

</div><!--#main-->

<div class="container">
    <div class="row">
        <div class="col-xs-24">
            <button type="button" name="button" onclick="popInOut( $('.square'), 'out', 600, 100 )">PopOut</button>
            <button type="button" name="button" onclick="popInOut( $('.square'), 'in', 600, 100 )">PopIn</button>
        </div>
        <ul>
            <li class="col-xs-6">
                <div class="square"></div>
            </li>
            <li class="col-xs-6">
                <div class="square"></div>
            </li>
            <li class="col-xs-6">
                <div class="square"></div>
            </li>
            <li class="col-xs-6">
                <div class="square"></div>
            </li>
        </ul>

        <div class="col-xs-24">
            <button type="button" name="button" onclick="popInOut( $('.circle'), 'out', 700, 100 )">PopOut</button>
            <button type="button" name="button" onclick="popInOut( $('.circle'), 'in', 300, 200 )">PopIn</button>
        </div>
        <ul>
            <li class="col-xs-6">
                <div class="circle"></div>
            </li>
            <li class="col-xs-6">
                <div class="circle"></div>
            </li>
            <li class="col-xs-6">
                <div class="circle"></div>
            </li>
            <li class="col-xs-6">
                <div class="circle"></div>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-24">
            <p>This can also be used to make a pulsing ripple effect, although if the timings are set too close together then it can cause issues with the timeouts overlapping.</p>
        </div>
        <button type="button" name="button" onclick="pulse('.pulse')">Pulse</button>
        <ul>
            <li class="col-xs-6">
                <div class="pulse"></div>
            </li>
            <li class="col-xs-6">
                <div class="pulse"></div>
            </li>
            <li class="col-xs-6">
                <div class="pulse"></div>
            </li>
            <li class="col-xs-6">
                <div class="pulse"></div>
            </li>
        </ul>

        <div class="col-xs-24">
            <p>Scroll down to see an element that pops in when it becomes visible. To get this effect on an element add the class "pop-in-on-scroll" to the parent element and "pop" to the elements that pop in. The default speed is 300ms, and default delay is 200ms. To change these add data-pop-speed="x" and data-pop-delay="x" to the element with pop-in-on-scroll classs.</p>
        </div>

    </div>
</div>
<div class="window-height"></div>

<div class="container">
    <div class="row">
        <ul class="pop-in-on-scroll clearfix" data-pop-speed="800" data-pop-delay="400" data-pop-easing="ease-out">
            <li class="col-xs-6">
                <div class="pop pop-1"></div>
            </li>
            <li class="col-xs-6">
                <div class="pop pop-1"></div>
            </li>
            <li class="col-xs-6">
                <div class="pop pop-1"></div>
            </li>
            <li class="col-xs-6">
                <div class="pop pop-1"></div>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="row">
        <ul class="pop-in-on-scroll clearfix" data-pop-speed="300" data-pop-delay="200">
            <li class="col-xs-6">
                <div class="pop pop-2"></div>
            </li>
            <li class="col-xs-6">
                <div class="pop pop-2"></div>
            </li>
            <li class="col-xs-6">
                <div class="pop pop-2"></div>
            </li>
            <li class="col-xs-6">
                <div class="pop pop-2"></div>
            </li>
        </ul>
    </div>
</div>

<div class="window-height"></div>
<div class="window-height"></div>

<footer class="footer">

</footer>
<!-- JS files -->
<!-- Jquery -->
<script src="../js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8" ></script>

<!-- Bootstrap core JavaScript -->
<script src="../bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<!-- Custom JS files -->
<script src="../js/custom.js" type="text/javascript" charset="utf-8"></script>

<script src="js/pop-in.js" type="text/javascript" charset="utf-8"></script>


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
