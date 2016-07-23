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

		<div class="container">
			<div class="row">			
				<div class="content col-md-16 clearfix">

			    	<div class="postHero">
							<?php
							if ( wpmd_is_phone() ) {
								$mobileimg = MultiPostThumbnails::get_the_post_thumbnail(get_post_type($recent["ID"]), 'mobile-image', $recent["ID"], 'full');
								if (!empty($mobileimg)) {
									echo $mobileimg ;
								} else {
									the_post_thumbnail($post->ID, 'full');
								}
							} else {
								the_post_thumbnail($post->ID, 'full');
							}
							?>
					</div><!-- Post Hero -->			
				
				
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
					<div class="share shareBottom">
					
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Shares') ) : ?><?php endif; ?>
						<div class="post-meta tags">
						<?php if (has_tag( $tag, $post )) { ?>	
							<span class="meta-date">Tagged with:&nbsp;</span>
		    			<? } ?>
		    				<div class="the-tags">
		    					<div class="bottomTags">
		    					<?php the_tags(''); ?>
		    					</div>
		    					<div class="bottomCats">
		    					<?php the_category('')?>
		    					</div>
		    				</div>					
						</div>
					
						
					</div><!-- Sharer Bottom -->
					
					<div class="related box text-center">
						<h5 class="lined"><span>People also read</span></h5>
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
					
				</div><!-- content -->	
				<?php get_sidebar(); ?>

			</div>
		</div>
