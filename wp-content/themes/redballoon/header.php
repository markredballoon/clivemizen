<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php wp_title( '-', true, 'right' ); ?></title>
	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google" content="notranslate" />

    <!-- Page Title -->

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
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
  
  <?
  wp_register_script('jQuery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js' );
  wp_register_script( 'bootstrap-scripts', get_bloginfo( 'template_url' ).'/bootstrap/dist/js/bootstrap.min.js', array('jQuery') );
  wp_register_script( 'custom-scripts', get_bloginfo( 'template_url' ).'/js/custom.js', array('jQuery') );

  wp_enqueue_script('jQuery', 0);
  wp_enqueue_script('bootstrap-scripts', 1);
  wp_enqueue_script('custom-scripts', 1);
  ?>

</head>

<body id="body">


  <header>

  	<div class="bg"></div>

  	<div class="container">
  		<div class="row">

        <a href="<?=get_bloginfo('url')?>">
          <div class="logo">Clive Mizen</div>
        </a>

  			<button type="button" class="nav-toggle toggle visible-xs" id="menu-toggle">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>

  			<nav id="main-nav">
  				<ul>
            <?
            $mainMenuArgs = array(
										'order'                  => 'ASC',
										'orderby'                => 'menu_order',
										'post_type'              => 'nav_menu_item',
										'post_status'            => 'publish',
										'output'                 => ARRAY_A,
										'output_key'             => 'menu_order',
										'nopaging'               => true,
										'update_post_term_cache' => false
						  			);
						$mainMenuItems = wp_get_nav_menu_items( 'Main', $mainMenuArgs );
            foreach ($mainMenuItems as $menuItem) {?>
              <li>
    						<a href="<? echo $menuItem->url?>">
    							<span>
    								<?echo $menuItem->title ?>
    							</span>
    						</a>
    					</li>
            <?
            }
            ?>
  				</ul>
  			</nav><!--/main-nav-->

  		</div><!--/row-->

  	</div><!--/container-->
  </header>
