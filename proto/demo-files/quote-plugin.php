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
	<title>Quotes</title>

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
          <h1>quotes plugin output</h1>
          <p>This is an example of the html that will get output from the quotes plugin.</p>
          <p>CSS for this can be found in wp-content/plugins/quotes/css/quotes.min.css</p>
        </div>
	</div>
</div><!--container-->

<div class="container">
    <div class="row">
        <div class="col-xs-12"><!-- The content of this div is what will get brought in with the shortcode -->

            <blockquote class="quote side-by-side">
                <div class="quote-image side-by-side">
                    <img src="http://placehold.it/500x500"/>
                </div>
                <div class="the-quote">
                    <p>Quote goes here.
                        <br>
                    side-by-side img-left</p>
                    <cite>-Source</cite>
                </div><!--the-quote-->
            </blockquote><!--quote-->

        </div><!-- col-xs-12 -->

        <div class="col-xs-12"><!-- The content of this div is what will get brought in with the shortcode -->

            <blockquote class="quote side-by-side">
                <div class="the-quote">
                    <p>Quote goes here.
                        <br>
                    side-by-side img-right</p>
                    <cite>-Source</cite>
                </div><!--the-quote-->
                <div class="quote-image" >
                    <img src="http://placehold.it/500x500"/>
                </div>
            </blockquote><!--quote-->

        </div><!-- col-xs-12 -->

        <div class="col-xs-18 col-xs-offset-3"><!-- The content of this div is what will get brought in with the shortcode -->

            <blockquote class="quote text-ontop">
                <div class="quote-image" >
                    <img src="http://placehold.it/500x250"/>
                </div>
                <div class="the-quote">
                    <p>Quote goes here.<br>side-by-side</p>
                    <cite>-Source</cite>
                </div><!--the-quote-->
            </blockquote><!--quote-->

        </div><!-- col-xs-18 col-xs-offset-3 -->

        <div class="col-xs-18 col-xs-offset-3"><!-- The content of this div is what will get brought in with the shortcode -->

            <blockquote class="quote text-ontop">
                <div class="quote-image">
                    <img src="http://placehold.it/500x250"/>
                </div>
                <div class="the-quote quotemarks">
                    <p>Quote goes here.<br>text-ontop quotemarks</p>
                    <p>The text can also be moved to either side by adding 'left' or 'right' class to 'the-quote' element.</p>
                    <cite>-Source</cite>
                </div><!--the-quote-->
            </blockquote><!--quote-->

        </div><!-- col-xs-18 col-xs-offset-3 -->

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
<script src="../js/custom.js" type="text/javascript" charset="utf-8"></script>

<script src="../../wp-content/plugins/quotes/js/quotes.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="../../wp-content/plugins/quotes/css/quotes.min.css" media="screen" title="no title" charset="utf-8">


</body>
</html>
