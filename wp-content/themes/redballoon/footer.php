<footer class="footer">

  <section class="social">
    <div class="container">
      <div class="sub-title row">
          <h2>Get in Touch</h2>
      </div><!-- sub-title -->
      <div class="row">
        <ul class="social-icons">
          <li><a class="icon-facebook" href="#.">Facebook</a></li>
          <li><a class="icon-linkedin" href="#.">LinkedIn</a></li>
          <li><a class="icon-email" href="#.">Email</a></li>
        </ul><!-- social-icons -->
      </div><!-- row -->
    </div>
  </section><!-- social -->

  <section class="legal">
    <p>If you would like to get in touch by email, please send a message to <a href="mailto:info@clivemizen.com">info@clivemizen.com</a>.</p>
  </section><!-- legal -->

</footer>
  <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.11.3.min.js"></script>
  <?
  wp_register_script( 'bootstrap-scripts', get_bloginfo( 'template_url' ).'/bootstrap/dist/js/bootstrap.min.js', 'jQuery' );
  wp_register_script( 'custom-scripts', get_bloginfo( 'template_url' ).'/js/custom.js', 'jQuery' );

  wp_enqueue_script('bootstrap-scripts');
  wp_enqueue_script('custom-scripts');
  ?>

<?php wp_footer(); ?>
</body>
</html>
