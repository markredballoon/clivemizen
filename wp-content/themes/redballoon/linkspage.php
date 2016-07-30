 <?php /* Template Name: Links */ ?>
<? get_header(); ?>
<main id="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="hero hero-small">
    <div class="bg" style="background-image:url(<?=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full')[0]?>);"></div>
    <div class="title">
      <h2><?the_title()?></h2>
    </div>
  </div>
  <section class="links">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 links-list">
          <div class="links-divider">
            <?=apply_filters( 'content', _get_project_info( '0', $post->post_content ))?>
          </div>
          <div class="links-divider">
            <?=apply_filters( 'content', _get_project_info( '1', $post->post_content ))?>
          </div>
          <div class="links-divider">
            <?=apply_filters( 'content', _get_project_info( '2', $post->post_content ))?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; else: ?>
	<h1>Sorry, no posts matched your criteria.</h1>
<?php endif; ?>
</main>
<?php get_footer(); ?>
