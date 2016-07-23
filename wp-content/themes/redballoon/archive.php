<?php get_header(); ?>
<?php if (have_posts()) : ?>
    	<div class="postTitle">
	    	<div class="container">
	    		<div class="row">
	    			<div class="theTitle col-sm-24 text-center">
						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
						<h1 class="pagetitle"><?php single_cat_title(); ?> News</h1>
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h1 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h1 class="pagetitle">Author Archive</h1>
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h1 class="pagetitle">Blog Archives</h1>
						<?php } ?>
	    			</div>
	    		</div>
	    	</div>
		</div><!-- Post Title -->	
		
		<div class="container">
			<div class="row">
				<div class="content posts col-md-16 text-center clearfix">
					<h2 class="h5 lined unbold text-center"><span></span></h2>

					<section id="ajax-load-more">	
					    <ul class="listing clearfix" data-path="<?php echo get_template_directory_uri(); ?>/ajax-load-more" data-post-type="post" data-category="" data-taxonomy="" data-tag="" data-offset="6" data-search="" data-max-pages="10" data-display-posts="6" data-scroll="true" data-button-text="Load More" data-transition="fade">
							<?php 
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