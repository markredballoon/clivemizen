<?php get_header(); ?>

    		
    	<div class="postHero">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-xs-24">
					<?php
						$bannerargs = array(
							 'post_type' => 'banner',
					//		 'taxonomy' => $category->taxonomy, 
					//		 'term' => $category->slug,
							 'post_status' => 'publish'
						);
						$banners = get_posts( $bannerargs );
						foreach($banners as $banner) :
							
							$banner_url = get_post_meta($banner->ID, 'offer_url', true);
							if ( wpmd_is_phone() ) {
								$banner_img = MultiPostThumbnails::get_the_post_thumbnail(get_post_type($banner->ID), 'mobile-banner', $banner->ID, 'full');
								if (!empty($banner_img)) {
									$banner_img = $banner_img ;
								} else {
									$banner_img = get_the_post_thumbnail($banner->ID, 'full');
								}
							} else {
								$banner_img = get_the_post_thumbnail($banner->ID, 'full');
							}
							
						?>	    			
	    				<a href="<?=$banner_url?>" title=""><?=$banner_img?></a>
					<? endforeach; ?>						
	    				
	    			</div>
				</div>
	    	</div>
		</div><!-- Post Hero -->
		
		<div class="container">
			<div class="row">
				<div class="content posts col-md-16 text-center clearfix">
					<?
					date_default_timezone_set($userTimezone);
					$dotw = get_terms('dotw', 'orderby=count&order=DESC&hide_empty=0');
					foreach( $dotw as $day ) :
						$day_title = $day->name;
						$day_output = $day->description;
						if (date("l") == $day_title){
							$today = $day_output;
						}
					endforeach;
					?> 
					<h2 class="h5 lined unbold text-center"><span><?=$today?></span></h2>

					<section id="ajax-load-more">	
					    <ul class="listing clearfix" data-path="<?php echo get_template_directory_uri(); ?>/ajax-load-more" data-post-type="post" data-category="" data-taxonomy="" data-tag="" data-offset="0" data-search="" data-max-pages="10" data-display-posts="2" data-scroll="true" data-button-text="See More" data-transition="fade">
							<?php 
							if ( have_posts() ) :
							while ( have_posts() ) : the_post();
							$thumbnail = MultiPostThumbnails::get_the_post_thumbnail(get_post_type($post->ID), 'thumbnail-image', $post->ID);
							?>
						<li class="post entry box">
							<div class="the-tags postCats">
								<?php the_category(' ')?>
							</div>							
							<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?= $thumbnail ?>
								<h5><?php the_title(); ?></h5>
								<? if( $post->post_excerpt ) {?>
								<?php the_excerpt(); ?>
								<? } else { }
								?>
								
							</a>							
						</li>
							<?php endwhile; ?>
							<?php else : ?>
								<h2 class="pagetitle">Not Found</h2>
								<p class="center">Sorry, but you are looking for something that isn't here.</p>
								<?php get_search_form(); ?>
							<?php endif; ?>
					    </ul>
					</section>		
					
				</div><!-- content -->	
				<?php get_sidebar(); ?>
			</div>
		</div>


<?php get_footer(); ?>