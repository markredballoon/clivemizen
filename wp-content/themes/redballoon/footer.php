    </div><!-- main -->


<footer id="footer">
	<div class="footer-texture">
		<div class="container">
			<div class="row">
				<ul class="list-inline text-center">
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
		$offer_slug = $ofs->post_name;
		$offer_url = get_post_meta($ofs->ID, 'offer_url', true);
	?>
						<li><?=$offer_slug?>">
							<a href="<?=$offer_url?>">
								<?=$offer_title?>
							</a>
						</li>
	<?
endforeach;
?>						
				
				</ul>
			</div><!-- Footer offers list row -->
			<div class="row">
				<div class="col-lg-10 col-lg-offset-7 col-md-12 col-md-offset-6 col-sm-16 col-sm-offset-4">
					<div class="postcode-search clearfix">
						<span>Find Your Local Store:</span>
						<form>
							<input class="postcode-enter" type="text" placeholder="Enter your postcode">
							<input class="search-postcode" type="submit" value="Go">
						</form>
					</div>
				</div>
			</div><!-- Postcode search row -->
			<div class="row">
				<ul class="list-inline text-center icons">
					<li class="icon-top">
						<a href="#">
							Back to top
						</a>
					</li>
				
					<li class="icon-contact">
						<a href="http://www.papajohns.co.uk/customerservice.aspx">
							Contact Papa john's
						</a>
					</li>
			</div><!-- Footer offers list row -->
			
		</div>
	</div><!-- Footer texture -->
	<div class="footer-logo-wrap text-center">
		<a class="footer-logo" href="<?php echo get_option('home'); ?>/" title="back to homepage">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/footer-logo.png" width="227" height="144" alt="Papa Johns - Better Ingredients. Better Pizza" />
		</a>
	</div><!-- Footer logo wrap -->


</footer>


	<!-- Javascripts -->
	
    <!-- Bootstrap core JavaScript -->
    <script src="<?php bloginfo( 'template_url' ); ?>/bootstrap/dist/js/bootstrap.min.js"></script>  

	<!-- Twitter Feed -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/tweets.min.js"></script>

	<!-- custom js file -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>
    
    <!-- Column Equalizer -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/col-equalizer-ppj.min.js" type="text/javascript" charset="utf-8"></script>
	<script>
		//var equalSelector = '.post.entry.box'; In header to make work with ajax load more.
		jQuery(window).load(function($) {
			colEqualizer(equalSelector);
		});
	</script>

	<!-- Analytics code go here-->	

<?php wp_footer(); ?>
</body>
</html>