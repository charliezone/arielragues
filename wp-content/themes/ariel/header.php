<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Ariel Ragues</title>

<!--=================================
Meta tags
=================================-->
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

<!--=================================
Style Sheets
=================================-->
<!-- <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.vegas.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css"> -->

<!--<link rel="stylesheet" type="text/css" href="assets/css/blue.css">
<link rel="stylesheet" type="text/css" href="assets/css/orange.css">
<link rel="stylesheet" type="text/css" href="assets/css/red.css">
<link rel="stylesheet" type="text/css" href="assets/css/green.css">
<link rel="stylesheet" type="text/css" href="assets/css/purple.css">-->

<!-- <script async  src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
<!-- <script defer  src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script> -->
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
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li ><a href="#"><span class="fa fa-twitter"></span></a></li>
        <li ><a href="#"><span class="fa fa-youtube"></span></a></li>
        <li ><a href="#"><span class="fa fa-instagram"></span></a></li>
      </ul>
    </div>
  </div>
  <nav class="navbar yamm navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle fa fa-navicon"></button>
        <a class="navbar-brand" href="index.html">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/basic/logo.png" alt="logo" />
        </a>
      </div>
      <div class="nav_wrapper">
        <div class="nav_scroll">
          <ul class="nav navbar-nav">
            <li><a href="#">Inicio</a>
            </li>
            <li><a href="gallery.html">Galería</a></li>
            <li><a href="gallery.html">Videos</a></li>
            <li><a href="news.html">Blog</a></li>
            <li><a href="contact.html" >Contacto</a></li>
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
                <h5 class="audio-title">Maroon 5 - Moves Like Jagger ft. Christina Aguilera</h5>
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
                <li data-title="Maroon 5 - Moves Like Jagger" 
                                    	data-artist="ft. Christina" 
                                        data-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
                <li data-title="Coldplay - Princess Of China" 
                                    	data-artist="ft. Rihanna" 
                                        data-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
                <li data-title="Lorem Ipsum" 
                                    	data-artist="ft. Rocker" 
                                        data-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
                <li data-title="New Fish!!!" 
                                    	data-artist="ft. Jailer" 
                                        data-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
                <li data-title="I wanna grow" 
                                    	data-artist="ft. MeDon" 
                                        data-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
                <li data-title="do be do" 
                                    	data-artist="ft. scoby" 
                                        data-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
                <li data-title="We aint smart" 
                                    	data-artist="ft. SomeFool" 
                                        data-mp3="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"></li>
              </ul>
              <!--Playlist ends-->
              <h5>Muestras de los últimos temas</h5>
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