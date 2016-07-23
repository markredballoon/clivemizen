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
	<title>Videos Base</title>

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
          <h1>FAQ output</h1>
          <p>This is an example of the html that will get output from the FAQs plugin.</p>
          <p>JSS for this can be found in wp-content/plugins/video-base/js/video-base.js</p>
          <p>CSS for this can be found in wp-content/plugins/video-base/css/video-base.less</p>
          <p>the different types of output should be added here as they are developed.</p>
        </div>
	</div>
</div><!--container-->

<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <button type="button" name="button" onclick="$('.video-title', '#video_base_0').toggleClass('overlayed')">Toggle title type.</button>
        </div>
        <div class="col-xs-8">
            <div class="video-base embed youtube" id="video_base_0">
                <div class="video-content" onclick="VBplayVideo(this)">
                    <div class="video-title overlayed">
                        <h4>Title goes here</h4>
                    </div>
                    <div class="iframe-wrap" style="padding-bottom: 56.25%;"><!-- this padding is worded out from the oembed info -->
                        <iframe width="800" height="800" src="https://www.youtube.com/embed/B_YQ8xox4pk?feature=oembed&amp;enablejsapi=1" frameborder="0" allowfullscreen=""></iframe>
                        <div class="video-thumbnail" style="background-image:url(http://dev.golf.mizunoeurope.com/wp-content/uploads/2016/04/luke-forging-video-thumb-500x300.jpg);"><div class="play-icon"></div></div>
                    </div><!--iframe-wrap outer-->
                </div><!--video-content-->
                <div class="description">
                    <p>This is where the description will go.</p>
                </div>
            </div>
        </div><!--col-xs-8-->

        <div class="col-xs-8">
            <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#video-modal-1">Open Modal</button>


            <div class="video-base modal-open" onclick="openYTmodal('#video-modal-1')">
                <div class="iframe-wrap" style="padding-bottom: 56.25%;"><!-- this padding is worded out from the oembed info -->
                    <div class="video-thumbnail" style="background-image:url(http://dev.golf.mizunoeurope.com/wp-content/uploads/2016/04/luke-forging-video-thumb-500x300.jpg);"><div class="play-icon"></div></div>
                </div><!--iframe-wrap outer-->
            </div><!--video-base-->

        </div>

    </div>
</div>


</div><!--#main-->

<div id="video-modals"><!-- add this before the footer using wordpress -->

    <div id="video-modal-1" class="modal fade play-on-open" role="dialog">

    	<div class="modal-dialog">
    		<div class="modal-content text-center">
    			<button type="button" class="close" data-dismiss="modal">&times;</button>

                <div class="video-base modal youtube" onclick="VBplayVideo(this)">
                    <div class="iframe-wrap" style="padding-bottom: 56.25%;"><!-- this padding is worded out from the oembed info -->
                        <iframe width="800" height="800" src="https://www.youtube.com/embed/B_YQ8xox4pk?feature=oembed&amp;enablejsapi=1" frameborder="0" allowfullscreen=""></iframe>
                    </div><!--iframe-wrap outer-->
                </div><!--video-base-->

    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    		</div><!-- Modal content-->
    	</div><!-- Modal dialog-->

    </div><!--video-modal-1-->

</div><!--video-modals-->

<footer class="footer">

</footer>
<!-- JS files -->
<!-- Jquery -->
<script src="../js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8" ></script>

<!-- Bootstrap core JavaScript -->
<script src="../bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

<!-- Custom JS files -->
<script src="../js/custom.js" type="text/javascript" charset="utf-8"></script>

<script src="../../wp-content/plugins/video-base/js/video-base.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="../../wp-content/plugins/video-base/css/video-base.min.css" media="screen" title="no title" charset="utf-8">


</body>
</html>
