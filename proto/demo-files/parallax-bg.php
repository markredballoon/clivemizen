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
	<title>Parallax background</title>

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
#parallax-bg-1{
    position: relative;
    width: 100%;
    height: 60vh;
    background-size: cover;
    background-position: center;
    background-image: url(images/placeholder.png);
}
#parallax-bg-2{
    position: relative;
    width: 100%;
    height: 60vh;
    background-size: cover;
    background-position: center;
    background-image: url(images/placeholder.png);
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

    <div id="parallax-bg-1" class="parallax-effect"></div>

    <div class="container window-height">
    	<div class="row">
        <div class="col-xs-24 text-center">
          <h1>Parallax background</h1>
          <p>The images on this page have a parallax effect that makes them travel down the page at a different speed to the rest of the content. With multiple large images this can cause the page to run slowly but this is the most resource efficient way of getting this effect that we have available.</p>
          <p>JS can be found in js/demos/parallax.js</p>
          <p>There are some styles in the header of this document for the parallax images.</p>
        </div>
    	</div>
    </div>

    <div class="window-height">
        <div id="parallax-bg-2" class="parallax-effect"></div>
        <div class="abs-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-24">
                        <div>Content can go here.</div>
                    </div>
                </div>
            </div>
        </div>
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
<script src="../js/demos/parallax.js" type="text/javascript" charset="utf-8"></script>


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
