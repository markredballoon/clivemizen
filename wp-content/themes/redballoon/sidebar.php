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
					
					<h5 class="lined text-center"><span>Most Popular</span></h5>
					
					<div class="sbBox postList">
					
						<ul>
						<?php 
						$popularpost = new WP_Query( array( 'posts_per_page' => 8, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
						while ( $popularpost->have_posts() ) : $popularpost->the_post();
						?>
							<li class="box clearfix">
								<a href="<?=get_permalink()?>" title="">
									<? $thumbnail = MultiPostThumbnails::get_the_post_thumbnail(get_post_type($post->ID), 'thumbnail-image', $post->ID); ?>
									<?=$thumbnail?>
									<?php the_title(); ?>
								</a>
							</li>
						<?
						endwhile;
						?>						
						</ul>
					</div>


					<h5 class="lined text-center"><span>Papa John’s on Twitter</span></h5>
					<div id="twitterFeed" class="sbBox">
						<div class="tweets-container">
							<p>Loading...</p>
						</div>
						<!-- <span id="show-more text-center"> Show More </span> -->
					</div><!-- Twitter feed -->
					
					<h5 class="lined text-center hidden-sm hidden-xs"><span>Papa John’s on Facebook</span></h5>					
					<div id="facebookFeed" class="sbBox hidden-sm hidden-xs">
						<div class="fb-page" data-href="https://www.facebook.com/papajohnsuk" data-width="100%" data-height="486" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/papajohnsuk"><a href="https://www.facebook.com/papajohnsuk">Papa John&#039;s Pizza</a></blockquote></div></div>					
					</div><!-- Facebook feed -->	
				<? /* hide the email signup until directed by client 					
					<h5 class="lined unbold text-center"><span>Subscribe to Papa John's</span></h5>
					<div class="social">
						Email signup form.
					</div><!-- Social -->
				*/ ?>
					
					
				</div><!-- Sidebar -->
