<?php get_header(); ?>

<main id="main">
  <div class="hero hero-small">
    <div class="bg" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=55&bg=a8a8a8&txtclr=ffffff&txt=Hero&w=1200&h=400);"></div>
    <div class="title">
      <h2>News posts</h2>
    </div>
  </div>
  <section class="news-index">
    <div class="container">
    	<div class="row">

  <?
    if(have_posts()){
  ?>

  <div class="col-xs-12 col-sm-6 col-md-4">
    <article class="in-index-small">
      <header>
        <h3><?=the_title()?></h3>
        <time date-time="<?the_date( get_option('ISO 8601') )?>" class="date"><?the_date( get_option('M Y') )?></time>
      </header>
      <footer>
        <a href="<?the_permalink()?>" class="button">Read More</a>
      </footer>
    </article>
  </div>

  <?
    } //end have posts
  ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
