<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset=<?php bloginfo( 'charset' ); ?>>
<title><?php bloginfo('name'); ?> - <?php the_title() ?></title>

<!--=================================
Meta tags
=================================-->
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
<meta property="og:url" content="https://arielragues.com/" />
<meta property="og:title" content="Ariel Ragues" />
<meta property="og:description" content="Sitio Web oficial" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/slider/ariel_ragues.jpg" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/basic/favicon.png">

<?php wp_head() ?>
</head>
<body>



<!--=================================
	Header
	=================================-->
<header>
  <div class="social-links">
    <div class="container">
      <ul class="social">
        <li><a target="_blank" href="https://www.facebook.com/arielraguespage"><span class="fa fa-facebook"></span></a></li>
        <li ><a target="_blank" href="https://twitter.com/ariel_ragues"><span class="fa fa-twitter"></span></a></li>
        <li ><a target="_blank" href="https://www.youtube.com/c/ArielRagues"><span class="fa fa-youtube"></span></a></li>
        <li ><a target="_blank" href="https://www.instagram.com/arielragues"><span class="fa fa-instagram"></span></a></li>
      </ul>
    </div>
  </div>
  <nav class="navbar yamm navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle fa fa-navicon"></button>
        <a class="navbar-brand" href="<?php echo (pll_current_language() === 'es' ) ? site_url() : site_url('home') ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/basic/logo-2.png" alt="logo" />
        </a>
      </div>
      <div class="nav_wrapper">
        <div class="nav_scroll">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo (pll_current_language() === 'es' ) ? site_url() : site_url('home') ?>"><?php _e('Inicio', 'ariel') ?></a>
            </li>
            <li><a href="<?php echo (pll_current_language() === 'es' ) ? site_url('galeria') : site_url('gallery') ?>"><?php _e('Galería', 'ariel') ?></a></li>
            <li><a href="<?php echo site_url('videos') ?>">Videos</a></li>
            <li><a class="js-target-scroll" href="#contacto"><?php _e('Contacto', 'ariel') ?></a></li>
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); ?>
          </ul>
        </div>
        <!--/.nav-collapse --> 
        
      </div>
    </div>
  </nav>
</header>

<!--=================================
Vegas Slider Images
=================================-->

<ul class="vegas-slides hidden">
  <li><img data-fade='2000' src="<?php echo get_template_directory_uri(); ?>/assets/img/BG/bg1.jpg" alt="" /></li>
  <li><img data-fade='2000' src="<?php echo get_template_directory_uri(); ?>/assets/img/BG/bg2.jpg" alt="" /></li>
  <li><img data-fade='2000' src="<?php echo get_template_directory_uri(); ?>/assets/img/BG/bg3.jpg" alt="" /></li>
  <li><img data-fade='2000' src="<?php echo get_template_directory_uri(); ?>/assets/img/BG/bg4.jpg" alt="" /></li>
</ul>

<!--=================================
JPlayer (Audio Player)
=================================-->

<section id="audio-player">
  <div class="container">
    <div class="rock-player">
      <div class="playListTrigger">
      	<a href="#"><i class="fa fa-list"></i></a>
      </div><!--triggerPlayList in responsive-->
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div id="player-instance" class="jp-jplayer"></div>
              <div class="controls">
                <div class="jp-prev"></div>
                <div  class="play-pause jp-play"></div>
                <div  class="play-pause jp-pause" style="display:none"></div>
                <div class="jp-next"></div>
              </div>
              <!--controls--> 
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
              <div class="player-status">
                <h5 class="audio-title">Ariel Ragues - La Vampiresa</h5>
                <div class="audio-timer"><span class="current-time jp-current-time">01:02</span> / <span class="total-time jp-duration">4:05</span></div>
                <div class="audio-progress">
                  <div class="jp-seek-bar">
                    <div class="audio-play-bar jp-play-bar" style="width:20%;"></div>
                  </div>
                  <!--jp-seek-bar--> 
                </div>
                <!--audio-progress--> 
              </div>
              <!--player-status--> 
            </div><!--column-->
          </div>
          <!--inner-row--> 
        </div>
        <!--column-->
        
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="audio-list">
            <div class="audio-list-icon"></div>
            <div class="jp-playlist"> 
              <!--Add Songs In mp3 formate here-->
              <ul class="hidden playlist-files">
                <li data-title="La Vampiresa" 
                                    	data-artist="Ariel Ragues" 
                                        data-mp3="<?php echo get_template_directory_uri(); ?>/assets/audio/la-vampiresa.mp3"></li>
                <li data-title="Obatalá" 
                                    	data-artist="Ariel Ragues" 
                                        data-mp3="<?php echo get_template_directory_uri(); ?>/assets/audio/obatala.mp3"></li>
                <li data-title="Me pongo happy" 
                                    	data-artist="Ariel Ragues" 
                                        data-mp3="<?php echo get_template_directory_uri(); ?>/assets/audio/me-pongo-happy.mp3"></li>
              </ul>
              <!--Playlist ends-->
              <h5><?php _e('Muestras de los últimos temas', 'ariel') ?></h5>
              <div class="audio-track">
                <ul>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--row--> 
    </div>
  </div>
</section>