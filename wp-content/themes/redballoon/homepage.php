 <?php /* Template Name: Homepage */ ?> 
 
 <?php get_header(); ?> 
	<? 
 			$langurl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			if (false !== strpos($langurl,'/de/')) {
				$langs = 'de';
			} else if (false !== strpos($langurl,'/fr/')) {
				$langs = 'fr';
			} else {
				$langs = 'uk';
			}		
	?> 
<!-- Carousel
================================================== -->
<div id="heroCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#heroCarousel" data-slide-to="0"  class="active"></li>
		<li data-target="#heroCarousel" data-slide-to="1"></li>
		<li data-target="#heroCarousel" data-slide-to="2"></li><!--
		<li data-target="#heroCarousel" data-slide-to="3"></li>
		<li data-target="#heroCarousel" data-slide-to="4"></li>
		<li data-target="#heroCarousel" data-slide-to="5"></li>-->
	</ol>
	<div class="carousel-inner" role="listbox">
<? 
if ($langs === 'de' ) { 
?>
<style>
.item .carousel-wrap .container {position: relative;}
.mp {background: top right  no-repeat #fff;}
.roundup a:hover img, .roundup a:hover img span {color:#4d86ba; border-color: #4d86ba;} 
</style>
			<!-- MP25 -->
	        <div class="item active mp25 new-mp" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/mp25-hero-new.jpg) center top no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/mp/mp-25"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content">
			            	<div class=" col-lg-9 col-md-10 col-sm-12">
			            		<h1>THIS IS BORON CRYSTAL.<br /><span>NOT VERY SEXY.</span><br />BUT WHAT IT DOES, IS.</h1>
								<h1><img src="<?php bloginfo( 'template_url' ); ?>/images/slides/mp-25-logo-black.png" height="20" width="197"></h1>
							</div>
							
			            </div>
	          		</div>
				</div>
	          </div>	        
	        </div>

			<!-- S5 -->
	        <div class="item new-mp s5" style=" background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/s5-hero.jpg) cover right no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/s-series/s5-wedge/"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content" >
			            	<div class="col-lg-9 col-md-11 col-md-push-0 col-sm-10 col-sm-push-7">
								<h1><img src="<?php echo get_option('home'); ?>/wp-content/uploads/2015/08/s5-logo.png" height="76" width="135"></h1>
								<p class="h3">Spin a Little Blue Magic</p>

							</div>
							
			            </div>
	          		</div>
				</div>
				<img class="imgbot" src="<?php bloginfo( 'template_url' ); ?>/images/slides/s5-hero.jpg" style="position: absolute; bottom: 0; right: 0; max-width: 98%;">
	          </div>	        
	        </div>

			<!-- MP5 -->
	        <div class="item  new-mp" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/mp5-hero.jpg) center top no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/mp/mp-5/"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content">
			            	<div class="col-lg-8 col-md-8 col-md-push-0 col-sm-8 col-sm-push-8">
								<h1><img src="<?php echo get_option('home'); ?>/wp-content/uploads/2015/08/mp-5-logo.png" height="28" width="211"></h1>
								<p class="h3">An Iron like no other</p>
							</div>
							
			            </div>
	          		</div>
				</div>
	          </div>	        
	        </div>

<? 
}
if ($langs === 'fr' ) { 
?>
<style>
.item .carousel-wrap .container {position: relative;}
.mp {background: top right  no-repeat #fff;}
.roundup a:hover img, .roundup a:hover img span {color:#4d86ba; border-color: #4d86ba;} 
</style>
			<!-- MP25 -->
	        <div class="item active mp25 new-mp" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/mp25-hero-new.jpg) center top no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/mp/mp-25"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content">
			            	<div class=" col-lg-9 col-md-10 col-sm-12">
			            		<h1>THIS IS BORON CRYSTAL.<br /><span>NOT VERY SEXY.</span><br />BUT WHAT IT DOES, IS.</h1>
								<h1><img src="<?php bloginfo( 'template_url' ); ?>/images/slides/mp-25-logo-black.png" height="20" width="197"></h1>
							</div>
							
			            </div>
	          		</div>
				</div>
	          </div>	        
	        </div>

			<!-- S5 -->
	        <div class="item new-mp s5" style=" background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/s5-hero.jpg) cover right no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/s-series/s5-wedge/"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content" >
			            	<div class="col-lg-9 col-md-11 col-md-push-0 col-sm-10 col-sm-push-7">
								<h1><img src="<?php echo get_option('home'); ?>/wp-content/uploads/2015/08/s5-logo.png" height="76" width="135"></h1>
								<p class="h3">Spin a Little Blue Magic</p>

							</div>
							
			            </div>
	          		</div>
				</div>
				<img class="imgbot" src="<?php bloginfo( 'template_url' ); ?>/images/slides/s5-hero.jpg" style="position: absolute; bottom: 0; right: 0; max-width: 98%;">
	          </div>	        
	        </div>

			<!-- MP5 -->
	        <div class="item  new-mp" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/mp5-hero.jpg) center top no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/mp/mp-5/"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content">
			            	<div class="col-lg-8 col-md-8 col-md-push-0 col-sm-8 col-sm-push-8">
								<h1><img src="<?php echo get_option('home'); ?>/wp-content/uploads/2015/08/mp-5-logo.png" height="28" width="211"></h1>
								<p class="h3">An Iron like no other</p>
							</div>
							
			            </div>
	          		</div>
				</div>
	          </div>	        
	        </div>

<?
}
if ($langs === 'uk' ) { 
?>

<style>
.item .carousel-wrap .container {position: relative;}
.mp {background: top right  no-repeat #fff;}
.roundup a:hover img, .roundup a:hover img span {color:#4d86ba; border-color: #4d86ba;} 
.carousel-content h1 img {
    max-width: 100%;
    height: auto;
}
</style>
			<!-- MP25 -->
	        <div class="item active mp25 new-mp" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/mp25-hero-new.jpg) center top no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/mp/mp-25"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content">
			            	<div class=" col-lg-9 col-md-10 col-sm-12">
			            		<h1>THIS IS BORON CRYSTAL.<br /><span>NOT VERY SEXY.</span><br />BUT WHAT IT DOES, IS.</h1>
								<h1><img src="<?php bloginfo( 'template_url' ); ?>/images/slides/mp-25-logo-black.png" height="20" width="197"></h1>
							</div>
							
			            </div>
	          		</div>
				</div>
	          </div>	        
	        </div>

			<!-- S5 -->
	        <div class="item  new-mp s5" style=" background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/s5-hero-new.jpg) center top no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/s-series/s5-wedge/"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content" >
			            	<div class="col-lg-9 col-md-11 col-md-push-0 col-sm-10 col-sm-push-7">
								<h1><img src="<?php echo get_option('home'); ?>/wp-content/uploads/2015/08/s5-logo.png" height="76" width="135"></h1>
								<p class="h3">Spin a Little Blue Magic</p>

							</div>
							
			            </div>
	          		</div>
				</div>
		
	          </div>	        
	        </div>

			<!-- MP5 -->
	        <div class="item  new-mp" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/slides/mp5-hero-new.jpg) center top no-repeat">
	          <div class="carousel-wrap">
	          	<a class="slide-cta" href="<?php echo get_option('home'); ?>/golf-clubs/mp/mp-5/"></a>
	          	<div class="container">
	          		<div class="row">
			            <div class="carousel-content">
			            	<div class="col-lg-8 col-md-8 col-md-push-0  col-sm-8 col-sm-push-8">
								<h1><img src="<?php echo get_option('home'); ?>/wp-content/uploads/2015/08/mp-5-logo.png" height="41" width="308"></h1>
								<p class="h3">An Iron like no other</p>
							</div>
							
			            </div>
	          		</div>
				</div>
	          </div>	        
	        </div>

	        
    
<?
}
?>
	      </div>
	    </div><!-- /.carousel -->
	
	
		<div class="">
		    <div class="container marketing">
		    
		      <div class="row">
		      <h1><span class="hidden">Nothing Feels Like A Mizuno</span><img src="<?php bloginfo( 'template_url' ); ?>/images/nothingfeelslikeamizuno.png" alt="Nothing feels like a Mizuno image" /></h1>
						      
				<div class="homepage-nav hidden-xs">
				<ul class="megamenu">
				</ul>
				</div>		      
		      
		      <?= apply_filters('the_content', _get_project_info('0', $post->post_content));?>
			  <h3 class="text-center news">Latest News</h3>
		<? 
		$popsts = array( 'posts_per_page' => 2, 'order_by' => 'post_date' );
		
		$myposts = get_posts( $popsts );
		$count = 0;
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<? $count++ ?>
		        <div class="col-md-12 col-sm-24">
		        	<a class="hm-news-feature" href="<? the_permalink(); ?>">
			        	<?=the_post_thumbnail()?>
			        	<span class="title"><? the_title(); ?><br /><? the_excerpt(); ?></span>
			        	<span class="readmore">Read this</span>
			        </a>
		        </div><!-- /.col-lg-9 -->
		<?php endforeach; 
		wp_reset_postdata();?>			      
		      
		      </div><!-- /.row -->
		    
	<? /*	
		
		      <div class="row">
		        <div class="col-sm-21">
		        	<a class="hm-news-feature" href="<?php echo get_option('home'); ?>/custom-fit">
			        	<img src="<?php bloginfo( 'template_url' ); ?>/images/swing-dna-hero.jpg" alt="" width="100%" height="auto" />
			        	<span class="hidden">Mizuno Swing DNA System. Three Swings, ten minutes, wise investment</span>
			        </a>
		        </div>
		      </div><!-- /.row -->
		      
		      
		
			</div><!-- /.container -->
		</div></div>
	      		

*/?>
<?php			 
// Replace live forum feed with equivalient html if not live domain
$host = $_SERVER['HTTP_HOST'];
if ($host != 'golf.mizunoeurope.com') {
	$displayforumfeed = '<p class="clearfix"><a class="bb-link-custom" href="http://www.mizunoforum.com/viewtopic.php?t=25021&amp;start=100#p125454"><span>Mar Hall Mizuno Mini Meet - 25th July 11am.</span>Posted by br1an_g</a><span class="question-statistic"><span class="question-views"><a href="#">95 <span class="replies-text">Replies</span></a></span> <span class="last-reply">Last Reply: Stewart 57</span></span></p><p><a class="bb-link-custom" href="http://www.mizunoforum.com/viewtopic.php?t=1564&amp;start=5020#p125447"><span>How did you do?</span>Posted by mattymp62</a><span class="question-statistic"><span class="question-views">5023 </span><span class="replies-text">Replies</span> </span><span style="clear: both"></span><span class="last-reply">Last Reply: GraemeJones</span></p><p><a class="bb-link-custom" href="http://www.mizunoforum.com/viewtopic.php?t=25253&amp;start=0#p125438"><span>mizuno MP 650 in Mizuno Blue,,</span>Posted by stewart 57</a><span class="question-statistic"><span class="question-views">10 </span><span class="replies-text">Replies</span> </span><span style="clear: both"></span><span class="last-reply">Last Reply: Halebopp</span></p><p><a class="bb-link-custom" href="http://www.mizunoforum.com/viewtopic.php?t=25021&amp;start=100#p125454"><span>Mar Hall Mizuno Mini Meet - 25th July 11am.</span>Posted by br1an_g</a><span class="question-statistic"><span class="question-views">95 </span><span class="replies-text">Replies</span> </span><span style="clear: both"></span><span class="last-reply">Last Reply: Stewart 57</span></p><p><a class="bb-link-custom" href="http://www.mizunoforum.com/viewtopic.php?t=1564&amp;start=5020#p125447"><span>How did you do?</span>Posted by mattymp62</a><span class="question-statistic"><span class="question-views">5023 </span><span class="replies-text">Replies</span> </span><span style="clear: both"></span><span class="last-reply">Last Reply: GraemeJones</span></p><p class="last"><a class="bb-link-custom" href="http://www.mizunoforum.com/viewtopic.php?t=25253&amp;start=0#p125438"><span>mizuno MP 650 in Mizuno Blue,,</span>Posted by stewart 57</a><span class="question-statistic"><span class="question-views">10 </span><span class="replies-text">Replies</span> </span><span style="clear: both"></span><span class="last-reply">Last Reply: Halebopp</span></p>';
} else {
	$forum_posts = 7;
	require_once("../public_html/wp-content/themes/mizunotheme2015/inc/dbClass.php");
	if (!class_exists('forumObj')) include_once("../public_html/wp-content/themes/mizunotheme2015/inc/forumObj.php");
	$f = new forumObj();
	$displayforumfeed = forumObj::showHomeTopics($forum_posts);
}


?>
<div class="container">
	<div class="row">
		<h3>Mizuno Social</h3>
			<div class="social" style="margin-bottom:60px">
				<div class="col-md-7">
					<h4>Mizuno Golf Twitter</h4>
					<a class="twitter-timeline" href="https://twitter.com/MizunoGolf_News" data-widget-id="618715690757980160">Tweets by @MizunoGolf_News</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="col-md-10">
					<h4>Discussions on the Forum</h4>
					<? echo $displayforumfeed; ?>
				</div>
				
				<div class="col-md-7">
					<h4>Mizuno Golf Instagram</h4>
					<div id="instafeed"></div>
				</div>
			</div>
			<div class="networks text-center">
				<h4>Connect with us</h4>
				<div id="share">
					<a href="https://www.facebook.com/mizunogolf" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/mizunogolf_news" target="_blank"><i class="fa fa-twitter"></i></a>	
					<a href="https://instagram.com/mizunoeuropegolf/" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="http://www.youtube.com/channel/UCoChWYgmU4OdU_1SUMUTrjQ"><i class="fa fa-youtube"></i></a>
				</div>
			</div>


		  
	
</div>
</div>
</div>
	
 <?php get_footer(); ?> 