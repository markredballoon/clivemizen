<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google" content="notranslate" />
    
    <!-- Page Title -->
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">	

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
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css?version=1" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<!-- JS Files required for top of page -->
	    <!-- Jquery -->
<!--    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.11.3.min.js"></script>  -->

	<!-- Browser specific files (including no js -->
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <?php 
	    if( wpmd_is_safari_browser() ){ ?>
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/ios_styles.css">
	    <? } ?>
	<!-- End Browser Specifics -->	
		<?php wp_head(); ?>

</head>

<body id="body" <?php body_class(); ?>>
<div id="fb-root"></div>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<div class="container">
				<div class="row">
				
					<button type="button" class="navbar-toggle toggle-left collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="visible-xs icon-title">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
		
					<a class="navbar-brand" href="<?php echo get_option('home'); ?>/">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" width="212" height="198" alt="Papa Johns" />
					</a>
					
					<button type="button" class="store-toggle-sm navbar-toggle toggle-right collapsed col-xs-6" data-toggle="" data-target="#top-postcode-search" aria-expanded="false" aria-controls="Postcode search">
						<span class="visible-xs icon-title">Stores</span>
						<span class="icon-stores"></span>
					</button>
										
				
				</div>
			</div>
			<div class="hidden-pc-search postcode-search visible-xs-block">
				<form class=" postcode-search-sm" >
					<input class="postcode-enter" type="text" placeholder="Enter your postcode">
					<input class="search-postcode" type="submit" value="Go">
				</form>
			</div>


		</div><!-- Navbar Header -->

		<div id="navbar" class="navbar-collapse collapse">
			<div class="container">
				<div class="row offers-row">
					<ul>
						<li class="col-md-4 col-sm-4"></li>
						
<?php
	$offersargs = array(
		 'post_type' => 'offer',
//		 'taxonomy' => $category->taxonomy, 
//		 'term' => $category->slug,
		 'post_status' => 'publish'
	);
	$offers = get_posts( $offersargs );
	foreach($offers as $ofs) :
		$offer_title = $ofs->post_title;
		$offer_img = get_the_post_thumbnail($ofs->ID);
		$offer_img_url = (string) reset(simplexml_import_dom(DOMDocument::loadHTML($offer_img))->xpath("//img/@src"));		
		$offer_slug = $ofs->post_name;
		$offer_url = get_post_meta($ofs->ID, 'offer_url', true);
		if ($offer_slug == 'quality-guarantee') {
			$xs_class = 'col-xs-24' ;
		} else {
			$xs_class = 'col-xs-12' ;
		}
	?>
						<li class="col-lg-5 col-md-6 col-sm-6 <?=$xs_class?> <?=$offer_slug?>">
							<a href="<?=$offer_url?>" style="background-image:url(<?=$offer_img_url?>)">
								<?=$offer_title?>
							</a>
						</li>
	<?
endforeach;
?>						
						<li class="col-lg-5 col-md-2 col-sm-1 hidden-xs">
							<div class="postcode-search">
								<span>
									<div class="store-text">Find Your Local Store:</div>
								</span>
								<form class="hidden-md hidden-sm">
									<input class="postcode-enter" type="text" placeholder="Enter your postcode">
									<input class="search-postcode" type="submit" value="Go">
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="nav-row">
				<div class="container">
					<div class="row">						
					 <?php 
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'Top primary menu',
			                'depth'             => 1,
			                'container'         => false,
			                'container_class'   => 'collapse navbar-collapse ',
			   			     'container_id'      => 'bs-example-navbar-collapse-1',
			                'menu_class'        => 'col-lg-offset-5 col-md-offset-4',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            ); 
			        ?>
							<div class=" hidden-pc-search visible-sm visible-md">
								<form class="postcode-search-md" >
									<input class="postcode-enter" type="text" placeholder="Enter your postcode">
									<input class="search-postcode" type="submit" value="Go">
								</form>
							</div>
					</div>
				</div>
			</div>
			</div>
		</div><!--/.nav-collapse -->
    </nav>
    
    <div id="main">