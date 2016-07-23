<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<? //post gets the credit for the view
wpb_set_post_views(get_the_ID()); 
?>

    	<div class="postTitle">
	    	<div class="container">
	    		<div class="row">
	    			<div class="theTitle col-sm-24 col-md-18">
		    			<h1><?php the_title(); ?></h1>
	    			</div>
					<?php if (has_tag( $tag, $post )) { ?>		    			
	    			<div class="topCats tags col-md-6 col-sm-24">
	    				<div class="topCatsContainer">
						
		    				<span class="meta-date">Tagged with:</span>
		    			
		    				<div class="the-tags">
	    						<?php the_tags('', '') ?>
	    					</div>
	    				</div>
	    			</div><!-- Top cats -->
	    			<? } ?>
	    		</div>
	    	</div>
		</div><!-- Post Title -->	
		
    	<div class="postHero">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-xs-24">
	    				<div class="video-container">

	    					<iframe width="1176" height="662" src="<?= get_post_meta($post->ID, 'youtube_url', true);?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
	    				</div>
	    			</div>
				</div>
	    	</div>
		</div><!-- Post Hero -->
		
		<div class="container">
			<div class="row">
				<div class="content videoContent col-md-16 clearfix">
					<div class="share shareTop">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Shares') ) : ?><?php endif; ?>
						<div class="post-meta tags">
							<span class="meta-date"><?php the_date();?></span>
		    				<div class="the-tags">
		    					<?php the_category('')?>
		    				</div>							
						</div>
						
					</div><!-- Sharer -->
					<div class="theContent">

						<?php the_content(); ?>
						
					</div><!-- theContent -->
					
					
				</div><!-- content -->	
				
				<div class="sidebar col-md-7 col-md-push-1">
					<h5 class="lined unbold text-center"><span>Connect with Papa John's</span></h5>
					<div class="social clearfix">
                       <?php
                        	global $wpdb;
							$all_data = $wpdb->get_results("SELECT * FROM wp_socialshare order by id asc");
							foreach($all_data as $all_data1){
						?>
						<a href="<?php echo $all_data1->s_title; ?>" target="_blank"><i class="<?php echo $all_data1->s_link; ?>"></i></a>
                        <?php } ?>	
					</div><!-- Social -->

				</div><!-- Sidebar -->
			</div>
			<div class="row">
				<div class="col-md-24">
					<div class="related fullWidthRelated box text-center">
						<h5 class="lined"><span>Check out these other videos</span></h5>
						<ul class="clearfix">
						<?php
						$args = array( 'numberposts' => '2', 'exclude' => $post->ID );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
						$thumbnail = MultiPostThumbnails::get_the_post_thumbnail(get_post_type($recent["ID"]), 'thumbnail-image', $recent["ID"]);						
						?>
							<li>
								<a href="<?=get_permalink($recent["ID"])?>" title="">
									<?=$thumbnail?>
									<h5><?=esc_attr($recent["post_title"])?></h5>
								</a>
							</li>
						<? } ?>
						</ul>
					
					</div>
				</div>
			</div>
			<div class="row">
				<?php get_sidebar('bottom'); ?>
				
				
			</div>
		</div>