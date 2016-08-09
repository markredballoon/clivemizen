<?php get_header(); ?>



<main id="main">
  <div class="hero hero-small">
      <div class="bg" style="background-image:url(<?=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full')[0]?>);"></div>
    <div class="title">
      <h2>Updates</h2>
    </div>
  </div>
  <section class="news-index">
    <div class="container">
    	<div class="row">

  <?
    if(have_posts()){
    while( have_posts() ) {
      the_post();
  ?>
  <div class="col-xs-12 col-sm-10 col-sm-offset-1">
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
  </div>

<? } } //end have posts ?>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
