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
	<title>FAQ Pop-In-Out combined</title>

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
        .popin-wrap{
            text-align: justify;
            display: block;
        }
        .popin-wrap::after,
        .popin-wrap:before{
            content: ' ';
            display: inline-block;
            width: 100%;
            visibility: hidden;
        }
        .popin-wrap li{
            width: 20%;
            display: inline-block;
        }
        .popin{
            width: 100%;
            padding-bottom: 100%;
            background-color: green;
        }
        #sliding-div-3{
            background-color: rgba(128, 128, 128, 0.5);
        }
        #sliding-div-3 .popin-wrap{
            padding: 0 20px;
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
          <h1>Custom events</h1>
          <p>This is an example of how the different plugins can be used with each other using custom events.</p>
          <p>There are some inline styles for the demo at the top of the body.</p>
          <p>This page loads both the js/demos/faqs_plugin.js and js/demos/pop-in.js files and has some example js at the bottom of the body of this document.</p>
        </div>
	</div>
</div><!--container-->

<div class="container">
    <div class="row">
        <div class="col-xs-24"><!-- The content of this div is what will get brought in with the shortcode -->
        	<div class="faq">
        		<a class="show-hide" href="#" rel="#sliding-div-1">
        			<div class="question">Question Title</div>
        			<div class="close-icon"></div>
        		</a><!--show_hide-->

        		<div id="sliding-div-1" class="sliding-div" style="display:none;">
        			<p>The answer to the question. This gets filtered and formatted by wordpress</p>
        		</div><!--sliding-div-->
        	</div><!--faq-->

        	<div class="faq">
        		<a class="show-hide" href="#" rel="#sliding-div-2">
        			<div class="question">Squares pop in</div>
        			<div class="close-icon"></div>
        		</a><!--show_hide-->

        		<div id="sliding-div-2" class="sliding-div" style="display:none;">
                    <ul class="popin-wrap">
                        <li>
                            <div class="popin"></div>
                        </li>
                        <li>
                            <div class="popin"></div>
                        </li>
                        <li>
                            <div class="popin"></div>
                        </li>
                        <li>
                            <div class="popin"></div>
                        </li>
                    </ul>
        		</div><!--sliding-div-->
        	</div><!--faq-->

        	<div class="faq">
        		<a class="show-hide-custom" href="#" rel="#sliding-div-3">
        			<div class="question">Pop in and Out</div>
        			<div class="close-icon"></div>
        		</a><!--show_hide-->

        		<div id="sliding-div-3" class="sliding-div" style="display:none;">
                    <ul class="popin-wrap">
                        <li>
                            <div class="popin"></div>
                        </li>
                        <li>
                            <div class="popin"></div>
                        </li>
                        <li>
                            <div class="popin"></div>
                        </li>
                        <li>
                            <div class="popin"></div>
                        </li>
                    </ul>
        		</div><!--sliding-div-->
        	</div><!--faq-->

        </div><!-- col-xs-24 -->
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
<script src="../../wp-content/plugins/faqs/js/faqs.js" type="text/javascript" charset="utf-8"></script>
<script src="js/pop-in.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

    jQuery(document).ready(function($) {

        // Example of triggering a pop in effect to happen after the faq section is opened.

        popInOut( $('.popin','#sliding-div-2'), 'out', 100,100 , 'linear', false ); // Hide the element

        $('#sliding-div-2').on({
            'faq:complete': function () {
                // This will be triggered by the faq plugin when the section opens.

                if ( $(this).prev().hasClass('open') ) { // Checks if the faq is open.
                    popInOut( $('.popin','#sliding-div-2'), 'in', 300, 100, 'linear', $('#sliding-div-2') );
                }
                else{
                    popInOut( $('.popin','#sliding-div-2'), 'out', 100,100 , 'linear', $('#sliding-div-2') );
                }
            }
        });

        // Example of combining the FAQ plugin and pop-in-out plugin where the pop in out happens before and after the faq slide.

        // hides the elements when the page is loaded. At the moment this has a moment where it is shown to the user, which could be hidden. This is just an example however.
        popInOut( $('.popin','#sliding-div-3'), 'out', 1,1 , 'linear', false );

        // When clicking on the show-hide-custom element it checks if the element is open or closed. If it is closed then slides the faq section open and then pops the elements in. If closed then run the popin function.
        $('.show-hide-custom').on('click', function(event) {
            if ( !$(this).hasClass('open') ) {
                $('#sliding-div-3').slideToggle(250);
                setTimeout( function() {
                    popInOut( $('.popin','#sliding-div-3'), 'in', 300, 200 , 'linear', $('.popin-wrap','#sliding-div-3') );
                }, 250)
                $(this).addClass('open');
            }
            else{
                popInOut( $('.popin','#sliding-div-3'), 'out', 300, 200 , 'linear', $('.popin-wrap','#sliding-div-3') );
                $(this).removeClass('open');
            }
        });

        // Listens to the sliding div 3 element and closses the faq section if it closes.
        $('#sliding-div-3').on('popIn:hidden', function(event) {
            $('#sliding-div-3').slideToggle(250);
        });

    });

</script>

</body>
</html>
