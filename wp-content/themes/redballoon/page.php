<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    	<div class="postTitle">
	    	<div class="container">
	    		<div class="row">
	    			<div class="theTitle col-sm-16 col-sm-push-4">
		    			<h1><?php the_title(); ?></h1>
	    			</div>
	    		</div>
	    	</div>
		</div><!-- Post Title -->	
		
    	<div class="postHero">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-16 col-sm-push-4">
						<?php
						if ( wpmd_is_phone() ) {
							$mobileimg = MultiPostThumbnails::get_the_post_thumbnail(get_post_type($recent["ID"]), 'mobile-image', $recent["ID"], 'full');
							echo $mobileimg ;
						} else {
							the_post_thumbnail($post->ID, 'full');
						}
						?>
	    			</div>
				</div>
	    	</div>
		</div><!-- Post Hero -->
		
		<div class="container">
			<div class="row">
				<div class="content col-sm-18 col-sm-push-4 clearfix">
					<div class="theContent">

						<?php the_content(); ?>
						
					</div><!-- theContent -->
										
				</div><!-- content -->	

			</div>
		</div>


					
<?php endwhile; else: ?>
	<h1>Sorry, no posts matched your criteria.</h1>
<?php endif; ?> 

<?php get_footer(); ?>
