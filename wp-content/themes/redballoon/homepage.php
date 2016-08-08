 <?php /* Template Name: Homepage */ ?>

 <?php get_header(); ?>

<main id="main">

  <?the_post();?>

    <div class="hero">
      <!-- <div class="bg" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=55&bg=a8a8a8&txtclr=ffffff&txt=Hero&w=1200&h=400);"></div> -->
      <div class="bg" style="background-image:url(<?=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full')[0]?>);"></div>
    </div>

    <section class="about-me">
      <div class="container">
      	<div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6">
            <h2>About Me</h2>
          </div>
          <div class="col-xs-12 col-sm-6 col-sm-pull-3 col-md-4 col-md-pull-1 pull-right">
            <img src="<?=_get_project_info( '1', $post->post_content )?>" alt="" />
          </div>
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6">
            <?=apply_filters( 'the_content', _get_project_info( '0', $post->post_content ))?>
          </div>
      	</div>
      </div>
    </section>

    <section class="home-gallery">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2>Gallery</h2>
          </div>
        </div>


        <div class="row gallery-images">
          <div class="col-xs-10 col-xs-offset-1">
            <?=do_shortcode('[awesome-gallery id="26"][/awesome-gallery]')?>
          </div>

        </div><!--gallery-images-->

        <div class="row">
          <div class="col-xs-11 col-sm-10 col-lg-12">
            <a href="<?=bloginfo('url')?>/gallery/" class="see-more-white">See More</a>
          </div>
        </div>

      </div>
    </section><!--home-gallery-->

    <section class="recent-news">
      <div class="container">
        <div class="col-xs-12">
          <h2>What I've Been Up To</h2>
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1">

          <?
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
  ?>
          <article class="in-index-large">
            <header>
              <h3><?=the_title()?></h3>
              <time date-time="<?=get_the_time('c')?>" class="date"><?=get_the_date( 'M Y' )?></time>
            </header>
            <main>
              <?the_excerpt()?>
            </main>
            <footer>
              <a href="<?the_permalink()?>" class="button">Read More</a>
            </footer>
          </article>

        <? } } ?>

          <a href="<?=get_bloginfo('url')?>/updates/" class="see-more-green">See More</a>

        </div>
      </div>

    </section>
</main>

 <?php get_footer(); ?>
