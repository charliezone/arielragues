<?php

function ariel_setup(){
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'ariel_theme_setup');
 
/**
 * Load translations for ariel_theme
 */
function ariel_theme_setup(){
    load_theme_textdomain('ariel', get_template_directory() . '/languages');
}

function ariel_styles_scripts() {
    wp_enqueue_style( 'font-oswald', 'http://fonts.googleapis.com/css?family=Oswald:400,700,300');
    wp_enqueue_style( 'font-roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,400italic,700');
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array('font-roboto') );
    wp_enqueue_style( 'style-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array('style-bootstrap') );
    wp_enqueue_style( 'style-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array('style-font-awesome') );
    wp_enqueue_style( 'style-pretty-photo', get_template_directory_uri() . '/assets/css/prettyPhoto.css', array('style-flexslider') );
    wp_enqueue_style( 'style-jquery-vegas', get_template_directory_uri() . '/assets/css/jquery.vegas.css', array('style-pretty-photo') );
    wp_enqueue_style( 'style-movile-custom-scrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.css', array('style-jquery-vegas') );
    wp_enqueue_style( 'ariel-theme-style', get_template_directory_uri() . '/assets/css/main.css', array('style-movile-custom-scrollbar') );
    wp_enqueue_style( 'ariel-custom-style', get_stylesheet_uri(), array('ariel-theme-style'), '1.0.1' );

    wp_enqueue_script( 'script-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2-respond-1.1.0.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('script-modernizr'), '', true );
    wp_enqueue_script( 'script-easing', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.pack.js', array('script-bootstrap'), '', true );
    wp_enqueue_script( 'script-movile-custom-scrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('script-easing'), '', true );
    wp_enqueue_script( 'script-mousewheel', get_template_directory_uri() . '/assets/js/jquery.mousewheel.min.js', array('script-movile-custom-scrollbar'), '', true );
    wp_enqueue_script( 'script-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('script-mousewheel'), '', true );
    wp_enqueue_script( 'script-carouFredSel', get_template_directory_uri() . '/assets/js/jquery.carouFredSel-6.2.1-packed.js', array('script-flexslider'), '', true );
    wp_enqueue_script( 'script-tweetie', get_template_directory_uri() . '/assets/js/tweetie.min.js', array('script-carouFredSel'), '', true );
    wp_enqueue_script( 'script-pretty-photo', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array('script-tweetie'), '', true );
    wp_enqueue_script( 'script-jplayer', get_template_directory_uri() . '/assets/jPlayer/jquery.jplayer.min.js', array('script-pretty-photo'), '', true );
    wp_enqueue_script( 'script-jplayer-playlist', get_template_directory_uri() . '/assets/jPlayer/add-on/jplayer.playlist.min.js', array('script-jplayer'), '', true );
    wp_enqueue_script( 'script-vegas', get_template_directory_uri() . '/assets/js/jquery.vegas.min.js', array('script-jplayer-playlist'), '', true );
    wp_enqueue_script( 'script-calendar', get_template_directory_uri() . '/assets/js/jquery.calendar-widget.js', array('script-vegas'), '', true );
    wp_enqueue_script( 'script-isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('script-calendar'), '', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js', array('script-isotope'), '1.0.2', true );
}


add_action( 'after_setup_theme', 'ariel_setup' );
add_action( 'wp_enqueue_scripts', 'ariel_styles_scripts' );

/* Defining wigdgets */

/**
 * Register our sidebars and widgetized areas.
 *
 */

function ariel_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}

add_action( 'widgets_init', 'ariel_widgets_init' );
?>