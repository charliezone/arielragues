<?php get_header() ?>

<div id="ajaxArea">
    <div class="pageContentArea">
      <!--=================================
      Home
      =================================-->
      <section id="home-slider">
        <div class="container">
          <div class="home-inner">

            <div id="homeSliderNav" class="slider-nav"> 
              <a id="home-prev" href="#" class="prev fa fa-chevron-left"></a>
              <a id="home-next" href="#" class="next fa fa-chevron-right"></a>
            </div><!--sliderNav-->
            
            <div id="flex-home" class="flexslider" data-animation="slide" data-animationSpeed="1000" data-autoPlay="true" data-slideshowSpeed="7000">
              <ul class="slides">
                <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/ariel_ragues.jpg" alt="Ariel Ragues" >
                  <div class="flex-caption">
                    <h2>Ariel Ragues</h2>
                  </div>
                </li>
                <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/la_vampiresa.jpg" alt="La Vampiresa" >
                  <div class="flex-caption">
                    <h2><?php _e('Estreno', 'ariel') ?> "La Vampiresa"</h2>
                  </div>
                </li>
                <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/artistas_cubanos.jpg" alt="<?php _e('Artistas Cubanos', 'ariel') ?>" >
                  <div class="flex-caption">
                    <h2><?php _e('Haciendo música cubana', 'ariel') ?></h2>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
      Player Wraper
      =================================-->
      <div class="rockPlayerHolder"></div>
      <!--=================================
      Latest Albumbs
      =================================-->
      
      <section id="albums">
        <div class="container">
          <h1><?php _e('Ultimas canciones', 'ariel') ?></h1>
          <div class="top-carouselnav"> <a href="#" class="prev-album"><span class="fa fa-caret-left"></span></a> <a href="#" class="next-album"><span class="fa fa-caret-right"></span></a> </div>
          <div class="albums-carousel">
            <div class="album"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/la-vampiresa.jpg" alt="<?php _e('Canción', 'ariel') ?> La Vampiresa"/>
              <div class="hover">
                <ul>
                  <li><a href="https://open.spotify.com/album/3whYZBR1JQXvoeezEFEd4f" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/spotify.png" alt="<?php _e('Tienda', 'ariel') ?> Spotify"></a></li>
                  <li><a href="https://www.deezer.com/mx/album/153044042" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/deezer.png" alt="<?php _e('Tienda', 'ariel') ?> Deezer"></a></li>
                  <li><a href="https://music.apple.com/us/album/la-vampiresa-feat-michel-de-armas-single/1516969358" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/music-apple.png" alt="<?php _e('Tienda', 'ariel') ?> Apple"></a></li>
                  <li><a href="https://www.amazon.com/Vampiresa-feat-Michel-Armas/dp/B08BZVQSWV/ref=sr_1_5?dchild=1&keywords=ariel+ragues&s=dmusic&sr=1-5" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/amazon.png" alt="<?php _e('Tienda', 'ariel') ?> Amazon"></a></li>
                </ul>
                <h3>Ariel Ragues</h3>
                <h2>La Vampiresa</h2>
              </div>
            </div>
            <!--\\album-->

            <div class="album"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/el-piquito.jpg" alt="<?php _e('Canción', 'ariel') ?> El Piquito"/>
              <div class="hover">
                <ul>
                  <li><a href="https://open.spotify.com/album/6hHoC9PSyKhbYyJ2eqHtSN" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/spotify.png" alt="<?php _e('Tienda', 'ariel') ?> Spotify"></a></li>
                  <li><a href="https://www.deezer.com/mx/album/173842472" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/deezer.png" alt="<?php _e('Tienda', 'ariel') ?> Deezer"></a></li>
                  <li><a href="https://music.apple.com/us/album/el-piquito-single/1531970020" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/music-apple.png" alt="<?php _e('Tienda', 'ariel') ?> Apple"></a></li>
                  <li><a href="https://www.amazon.com/El-Piquito/dp/B08J5Z8712/ref=sr_1_1?dchild=1&keywords=ariel+ragues&s=dmusic&sr=1-1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/amazon.png" alt="<?php _e('Tienda', 'ariel') ?> Amazon"></a></li>
                </ul>
                <h3>Ariel Ragues</h3>
                <h2>El Piquito</h2>
              </div>
            </div>
            <!--\\album-->
            
            <div class="album"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/obatala.jpg" alt="<?php _e('Canción', 'ariel') ?> Obatalá"/>
              <div class="hover">
                <ul>
                  <li><a href="https://open.spotify.com/album/6EfpiO9GW7jQcSSMwMEAzM" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/spotify.png" alt="<?php _e('Tienda', 'ariel') ?> Spotify"></a></li>
                  <li><a href="https://www.deezer.com/mx/album/149860142" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/deezer.png" alt="<?php _e('Tienda', 'ariel') ?> Deezer"></a></li>
                  <li><a href="https://music.apple.com/us/album/obatala-single/id1514570430" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/music-apple.png" alt="<?php _e('Tienda', 'ariel') ?> Apple"></a></li>
                  <li><a href="https://www.amazon.com/Obatala-Ariel-Ragues/dp/B089F89XKX" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/amazon.png" alt="<?php _e('Tienda', 'ariel') ?> Amazon"></a></li>
                </ul>
                <h3>Ariel Ragues</h3>
                <h2>Obatalá</h2>
              </div>
            </div>
            <!--\\album-->
            
            <div class="album"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/me-pongo-happy.jpg" alt="<?php _e('Canción', 'ariel') ?> Me pongo happy"/>
              <div class="hover">
                <ul>
                  <li><a href="https://open.spotify.com/album/4r8G4PrODqYqjkGRq8p2jh" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/spotify.png" alt="Tienda Spotify"></a></li>
                  <li><a href="https://www.deezer.com/mx/album/149716402" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/deezer.png" alt="Tienda Deezer"></a></li>
                  <li><a href="https://music.apple.com/us/album/me-pongo-happy-single/1514483469" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/music-apple.png" alt="Tienda Apple"></a></li>
                  <li><a href="https://www.amazon.com/Me-Pongo-Happy/dp/B07TW9Z5C7/ref=sr_1_3?dchild=1&keywords=ariel+ragues&s=dmusic&sr=1-3" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/amazon.png" alt="Tienda Amazon"></a></li>
                </ul>
                <h3>Ariel Ragues</h3>
                <h2>Me pongo happy</h2>
              </div>
            </div>
            <!--\\album-->
            <div class="album a-perderte"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/no-me-resigno-a-perderte.jpg" alt="<?php _e('Canción', 'ariel') ?> No me resigno a perderte"/>
              <div class="hover">
                <ul>
                  <li><a href="https://open.spotify.com/album/2uHKjYOA4iZKeoXI2lu3kO" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/spotify.png" alt="Tienda Spotify"></a></li>
                  <li><a href="https://www.deezer.com/mx/album/193923922" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/deezer.png" alt="Tienda Deezer"></a></li>
                  <li><a href="https://music.apple.com/mx/album/no-me-resigno-a-perderte/1545093112?i=1545093113" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/music-apple.png" alt="Tienda Apple"></a></li>
                  <li><a href="https://www.amazon.com/No-Resigno-Perderte-Ariel-Ragues/dp/B08QRNC4X6/ref=sr_1_1?dchild=1&keywords=Ariel+Ragues&qid=1610395541&s=dmusic&sr=1-1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/amazon.png" alt="Tienda Amazon"></a></li>
                </ul>
                <h3>Ariel Ragues</h3>
                <h2>No me resigno a perderte</h2>
              </div>
            </div>
            <!--\\album-->
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!--=================================
      Upcoming events
      =================================-->
      
      <section id="updates">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <h2><?php _e('Próximos eventos', 'ariel') ?></h2>
              <?php 
                ob_start();
                $args = array( 
                  'post_type' => 'eventos',
                  'posts_per_page' => 7,
                  'meta_key'          => 'fecha',
                  'orderby'           => 'meta_value_num',
                  'order'             => 'DESC'
               );
               $posts_query = new WP_Query;
               $posts_query->query( $args );
               if ($posts_query->have_posts()) {
                  while($posts_query->have_posts()){
                  $posts_query->the_post();
                      ?>
                        <div class="event-feed">
                          <div class="date"> <span class="day"><?php echo explode('/', get_field('fecha'))[1] ?></span> <span class="month"><?php echo explode('/', get_field('fecha'))[0] ?></span> </div>
                          <?php if(get_field('url')): ?>
                            <h5><a target="_blank" href="<?php the_field('url') ?>"><?php the_title() ?></a></h5>
                          <?php else: ?>
                            <h5><?php the_title() ?></h5>
                          <?php endif; ?>
                          <p><?php _e('en', 'ariel') ?> <?php the_field('lugar') ?></p>
                          <?php if(get_field('hora')): ?>
                            <?php the_field('hora') ?>
                          <?php endif; ?>
                        </div>
                        <!--\\event-->
                      <?php
                  }
               }
                wp_reset_postdata();
         
                /* Get the buffered content into a var */
                $events = ob_get_contents();
                ob_end_clean();
                echo $events;
              ?>
              
            </div>
            <!--latest events-->

            <div class="col-lg-3 col-md-3 col-sm-3">
              <h1><?php _e('Últimos Videos', 'ariel') ?></h1>
              <div class="video-feed">
                <iframe src="https://www.youtube.com/embed/SJKrNomuNfc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <!--\\video-feed-->
              
              <div class="video-feed">
                <iframe src="https://www.youtube.com/embed/cmmOjsHA6ls" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <!--\\video-feed-->
              
              <div class="video-feed">
                <iframe src="https://www.youtube.com/embed/5XxGop2hAHs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <!--\\video-feed--> 

              <div class="video-feed">
                <iframe src="https://www.youtube.com/embed/-USuItoM8K4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <!--\\video-feed-->
              
            </div>
            <!--latest videos--> 
            
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h2><?php _e('NOTICIAS', 'ariel') ?></h2>
              <?php 
                ob_start();
                $args = array( 
                  'post_type' => 'noticias',
                  'posts_per_page' => 7,
                  'orderby'           => 'date',
                  'order'             => 'DESC'
               );
               $posts_query = new WP_Query;
               $posts_query->query( $args );
               if ($posts_query->have_posts()) {
                  while($posts_query->have_posts()){
                  $posts_query->the_post();
                      ?>
                        <div class="news-feed">
                          <img src="<?php the_post_thumbnail_url('large');?>" alt="dummy"> 
                          <a href="<?php the_field('direccion') ?>"><?php the_title() ?></a>
                          <p><?php the_field('descripcion') ?></p>
                        </div>
                        <!--\\latest news-->
                      <?php
                  }
               }
                wp_reset_postdata();
         
                /* Get the buffered content into a var */
                $news = ob_get_contents();
                ob_end_clean();
                echo $news;
              ?>
              
            </div>
            <!--latest news-->
          </div>
        </div>
      </section>
    </div><!--pageContent-->
</div><!--ajaxwrap-->    
<!--=================================
	Latest blog
	=================================-->
<!-- <section id="latest-blog" style="display: none">
  <div class="container">
    <div class="row">
      <h1>Lo ultimo del blog</h1>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <article class="blog-post"> <img src="/assets/img/blog/1.jpg" alt=""/>
          <div class="hover"> <a href="blog-detail.html">
            <h2>Miguel to Muse: the week in music</h2>
            <p>'I use uncertainty as motivation and hopefully Rob uses it as motivation as...</p>
            <ul>
              <li>Admin</li>
              <li>5 hours ago</li>
              <li>2 Comments</li>
            </ul>
            </a> </div>
        </article>
      </div>
      
    </div>
  </div>
</section> -->

<?php get_footer() ?>
