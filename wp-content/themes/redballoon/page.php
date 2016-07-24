<?php get_header(); ?>
<main id="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="hero hero-small">
    <div class="bg" style="background-image:url(<?=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full')[0]?>);"></div>
    <div class="title">
      <h2><?the_title()?></h2>
    </div>
  </div>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?the_content()?>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; else: ?>
	<h1>Sorry, no posts matched your criteria.</h1>
<?php endif; ?>
</main>
<?php get_footer(); ?>
