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
	<title>Sticky Elements</title>

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
        .sticky .sticky-element{
            position: relative;
            width: 100%;
        }
        .sticky .ghost{
            position: fixed;
            display: none;
        }
        .sticky .sticky-element .content,
        .sticky .ghost .content{
            width: 100%;
            padding: 20px;
            position: relative;
            background-color: green;
        }
        /* CSS for sticky element with a track */
        #sticky3{
            height: 200vh;
            position: relative;
        }
        #sticky3 .content{
            background-color: blue;
            height: 100%;
        }
        #sticky3 .sticky-element{
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            height: 100vh;
        }
        #sticky3 .ghost{
            height: 100vh;
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

<div class="container window-height">

	<div class="row">
        <div class="col-xs-24 text-center">
          <h1>Sticky Elements</h1>
          <p>Sticky elements follow the user down the page after it reaches a particular point and stops at another point.</p>
          <p>Under development. Scroll down.</p>
        </div>
	</div>

</div>

<div class="window-height">

    <div id="sticky1" class="sticky" data-sticky-type="banner" data-top="0">
        <div class="sticky-element">
            <div class="content">
                <h3>Banner</h3>
                <p>This element becomes sticky and stays sticky. Useful for headers or widgets.</p>
                <p>Data-top attribute sets at what point the element becomes sticky.</p>
                <p>Each element that is going to become sticky needs to have the class 'sticky', an ID attribute, and a data-sticky-type attribute. The data-sticky-type can be "track","panel", or "banner" </p>
            </div>
        </div>
        <div class="ghost"></div>
    </div><!--sticky1-->
</div><!--container-->

<div class="container window-height">
    <div class="row">
        <div class="col-xs-10">
            <div id="sticky2" class="sticky" data-sticky-type="panel" data-top="0">
                <div class="sticky-element">
                    <div class="content">
                        <h3>Panel</h3>
                        <p>This element becomes sticky and stays sticky. Useful for headers or widgets.</p>
                        <p>Data-top attribute sets at what point the element becomes sticky.</p>
                    </div>
                </div>
                <div class="ghost"></div>
            </div><!--sticky2-->
        </div>
    </div>
</div>

<div class="window-height"></div>

<div id="sticky3" class="sticky" data-sticky-type="track" data-top="0">
    <div class="sticky-element">
        <div class="content">
            <h3>track</h3>
            <p>This element becomes sticky and stays sticky. Useful for headers or widgets.</p>
            <p>Data-top attribute sets at what point the element becomes sticky.</p>
        </div>
    </div>
    <div class="ghost"></div>
</div><!--sticky3-->

<div class="window-height"></div>
<div class="window-height"></div>

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
<script src="js/sticky.js" type="text/javascript" charset="utf-8"></script>


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
