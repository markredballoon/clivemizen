<?php get_header(); ?>
<main id="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="hero hero-small">
    <div class="bg" style="background-image:url(<?=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full')[0]?>);"></div>
  </div>
	<section class="article">
	  <div class="container">
	    <div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <article class="full">
            <header>
              <h1><?the_title()?></h1>
              <time date-time="<?=get_the_time('c')?>" class="date"><?=get_the_date( 'd M Y' )?></time>
            </header>
            <main>
							<?the_content()?>
            </main>
          </article>
        </div>
	    </div>
	  </div>
	</section>
<?php endwhile; else: ?>
	<h1>Sorry, no posts matched your criteria.</h1>
<?php endif; ?>
</main>
<?php get_footer(); ?>
