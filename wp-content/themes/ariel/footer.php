<!--=================================
	Footer
	=================================-->
    <footer>
  <div class="container">
    <div class="row">
      <!--\\column-->
      
      <div class="col-lg-4 col-md-4 col-sm-4">
        <h4><span class="fa fa-twitter"></span><?php _e('Últimos Tweets', 'ariel') ?></h4>
        <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
          <?php dynamic_sidebar( 'footer_1' ); ?>
        <?php endif; ?>  
      </div>
      <!--\\column-->
      
      <div class="col-lg-4 col-md-4 col-sm-4">
        <h4><span class="fa fa-instagram"></span>Instagram</h4>
        <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
          <?php dynamic_sidebar( 'footer_2' ); ?>
        <?php endif; ?> 
      </div>
      <!--\\column-->
      
      <div class="col-lg-4 col-md-4 col-sm-4" id="contacto">
        <h4><span class="fa fa-envelope"></span><?php _e('Contacto', 'ariel') ?></h4>
        <?php echo (pll_current_language() === 'es' ) ? do_shortcode('[contact-form-7 id="22" html_id="newsletter" title="Contact form 1"]') : do_shortcode('[contact-form-7 id="57" html_id="newsletter" title="Contact form 1 en"]') ?>
      </div>
      <!--\\column--> 
      
    </div>
    <!--\\row--> 
  </div>
  <!--\\container--> 
</footer>

<!--=================================
Script Source
=================================--> 

<!-- <script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing-1.3.pack.js"></script>
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mousewheel.min.js"></script>
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider-min.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.carouFredSel-6.2.1-packed.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/tweetie.min.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.prettyPhoto.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/jPlayer/jquery.jplayer.min.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/jPlayer/add-on/jplayer.playlist.min.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.vegas.min.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.calendar-widget.js"></script> 
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.js"></script>
<script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script> -->
<?php wp_footer() ?>

</body>
</html>