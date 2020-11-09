(function ($) {
    "use strict";
    /*	Table OF Contents
	==========================
	0-prettyPhoto
	1-Navigation
	2-Calander
	3-Vegas Slider
	4-Jplayer
	5-Sliders
	6-Gllery
	7-contact Form
	8-custom
	*/
	
	
	/*============================
	1-Navigation
	============================*/
	
	
	$(window).resize(function(){
		var $ww=$(window).width();
				
		if($ww<=993){
			$(document).on('click', '.yamm .dropdown-menu', function (e) {e.stopPropagation();});
			$('body').click(function(e){
			  if($(e.target).closest('.navbar-default').length === 0){
				$('.nav_wrapper').removeClass('active');
				$('ul.dropdown-menu').removeClass('open');
				$('.navbar-toggle').removeClass('fa-times').addClass('fa-navicon');
			  }
			});
		
			$('.navbar-toggle').click(function(e){
				e.stopImmediatePropagation();
				if($(this).hasClass('fa-navicon')){$(this).removeClass('fa-navicon').addClass('fa-times');
				}else{$(this).removeClass('fa-times').addClass('fa-navicon');}
				$('.nav_wrapper').toggleClass('active');
				$('ul.dropdown-menu').removeClass('open');
			});
		
			$('.navbar li.dropdown').click(function(){
				$('ul.dropdown-menu').removeClass('open');
				$(this).children('ul.dropdown-menu').toggleClass('open');
				$('.nav-level-down').fadeIn();
			});
			
			if($('.nav-level-down').length==0){
			$('.navbar-default').find( 'ul.dropdown-menu' ).prepend( '<li class="nav-level-down"><a class="nav-level-down" href="#" style="display: none;"><span class="fa fa-long-arrow-left"></span></a></li>' );
			}
			$('.nav-level-down a').click(function(e){
				e.preventDefault();
				e.stopImmediatePropagation();
				$('ul.dropdown-menu').removeClass('open');
				$('.nav-level-down').fadeOut();
			});
	
		}
	}).resize();
	
	
	$('.navbar-nav a').click(function(){
		$('.navbar-nav > li').removeClass('active');
		$(this).parents('.navbar-nav > li').addClass('active');
	});
	/*============================
	Vegas Slider
	============================*/
	
	if($('.vegas-slides').length){
		var vegas_BG_imgs = [],
		$vegas_img = $('.vegas-slides li img'),
		vegas_slide_length= $('.vegas-slides li').length;
		for (var i=0; i < vegas_slide_length; i++) {
			var new_vegas_img = {};
			new_vegas_img['src'] = $vegas_img.eq(i).attr('src');
			new_vegas_img['fade'] =$vegas_img.eq(i).attr('data-fade');
			vegas_BG_imgs.push(new_vegas_img);
		}
		$.vegas('slideshow', {backgrounds:vegas_BG_imgs,});
	}
	
	/*============================
	Jplayer
	============================*/
	var werock,playlistScroller;
	$('.playListTrigger > a').click(function(){
		$('#audio-player').toggleClass('open');
		return false;
	});
	if($('#audio-player').length!=0 && !($('#audio-player').hasClass('jsExecuted'))){
		$('#audio-player').addClass('jsExecuted');
		$("#player-instance").jPlayer({
			cssSelectorAncestor: "#audio-player",
		});
		if($('.playlist-files').length){
			var playlist_items = [],
			$playlist_audio=$('.playlist-files li'),
			playlist_items_length= $playlist_audio.length;
			
			for (var i=0; i < playlist_items_length; i++) {
				var  new_playlist_item = {};
				new_playlist_item['title'] = $playlist_audio.eq(i).attr('data-title');
				new_playlist_item['artist'] = $playlist_audio.eq(i).attr('data-artist');
				new_playlist_item['mp3'] = $playlist_audio.eq(i).attr('data-mp3');
				playlist_items.push(new_playlist_item);
			}
		
				werock = new jPlayerPlaylist({
				jPlayer: "#player-instance",
				enableRemoveControls:true,
				cssSelectorAncestor: "#audio-player"
			},playlist_items , {
				swfPath: "assets/jPlayer/jquery.jplayer.swf",
				supplied: "mp3",
				displayTime: 'fast',
				addTime: 'fast',
			});
		
				playlistScroller=$(".audio-track").mCustomScrollbar({
				advanced: {
					updateOnContentResize: true
				},
			});
			
			$('.audio-title').html(werock.playlist[0].title);
			$("#player-instance").bind($.jPlayer.event.play, function (event) {
				var current = werock.current,
					playlist = werock.playlist;
				jQuery.each(playlist, function (index, obj) {
					if (index == current) {
						$('.audio-title').html(obj.title);
					}
				});
			});
		}
		
		$('.jp-prev').click(function () {
			werock.previous();
			$(".audio-track").mCustomScrollbar("scrollTo", 'li.jp-playlist-current');
		});
	
		$('.jp-next').click(function () {
			$(".audio-track").mCustomScrollbar("scrollTo", 'li.jp-playlist-current');
		});
	}
	/*============================
	Init
	============================*/
	
	
		
		werockApp();
		function werockApp(){
		/*============================
		1-PrettyPhoto
		============================*/
		if($("a[data-rel^='prettyPhoto']").length!=0){
			$("a[data-rel^='prettyPhoto']").prettyPhoto();
		}
	
		/*============================
		2-Calander
		============================*/
		if($('.event_calender').length!=0){
			$('.event_calender').calendarWidget({month: 11,year: 2013,});
		}
		if($('.more-events').length!=0){
			$('.more-events').click(function(){$('.events_showcase').slideToggle(800);return false;});
		}
		
		if($('#flex-home').length!=0){
			$('#flex-home').flexslider({
				animation: $('#flex-home').attr('data-animation'),
				animationSpeed:$('#flex-home').attr('data-animationSpeed'),
				slideshowSpeed: $('#flex-home').attr('data-slideshowSpeed'),
				slideshow:$('#flex-home').data('autoPlay'),
				directionNav: false,controlNav: false,direction: "horizontal",
				start: function(){
					$('#homeSliderNav').show();
					$('.rockPlayerHolder').offset().top;
				}
			});
			var $flex_home = $('#flex-home');
			$('#home-next').click(function () {$flex_home.flexslider("next");return false;});
			$('#home-prev').click(function () {$flex_home.flexslider("prev");return false;});
		}


		if($('.albums-carousel').length!=0 ){
			$('.albums-carousel').carouFredSel({
				width: "100%",
				height: 300,
				circular: false,
				infinite: false,
				auto: false,
				scroll: {items: 1,easing: "linear"},
				prev: {button: "a.prev-album",key: "left"},
				next: {button: "a.next-album",key: "right"}
			});
		}
	
		/*===========================
		9-Gllery
		============================*/
	
		function onImagesLoaded($container, callback) {
			var $images = $container.find("img");
			var imgCount = $images.length;
			if (!imgCount) {
	
				callback();
			} else {
				$("img", $container).each(function () {
					$(this).one("load error", function () {
						imgCount--;
						if (imgCount === 0) {
							callback();
						}
					});
					if (this.complete) $(this).load();
				});
			}
		}
	
		onImagesLoaded($(".photo-gallery"), function () {
			var $containerfolio = $('.photo-gallery');
			$containerfolio.show();
		});
	
		var $containerfolio = $('.photo-gallery');
		if ($containerfolio.length) {
			$containerfolio.isotope({
				layoutMode: 'fitRows',
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
		}
	
		$('.photo-filter li a').click(function () {
			$('.photo-filter li').removeClass("active");
			$(this).parent().addClass("active");
			var selector = $(this).attr('data-filter');
			$containerfolio.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
			return false;
		});
		
		
		/*========================
		Track Player
		========================*/
		var allowMultiple=false,trackSelector;
		if($('.track_listen').length != 0){
			
			$('.track_listen span').click(function (e) {
				e.stopImmediatePropagation();
				e.preventDefault();
				trackSelector=$(this);
					if($(this).hasClass('alreadyAdded')){
						$('.alreadyAdded-warning').slideDown();
					}
					else if(!$(this).hasClass('alreadyAdded')){
						$(this).addClass('alreadyAdded');
						werock.add({
							title:$(this).attr('data-title'),
							artist: $(this).attr('data-artist'),
							mp3: $(this).attr('data-mp3'),
						},true);
						$(this).children('i').removeClass('fa-play').addClass('fa-check');		
					}
				return false;
			});
			$('.addAgain').on('click',this,function(){
				$('.alreadyAdded-warning').slideUp();			
				  werock.add({
					  title:trackSelector.attr('data-title'),
					  artist: trackSelector.attr('data-artist'),
					  mp3: trackSelector.attr('data-mp3'),
				  },true);
				  
			});
			$('.dontAdd').on('click',this,function(){
				$('.alreadyAdded-warning').slideUp();			
				 
			});
			
		}
	}

	$(document).ready(function(){
		$(window).resize(function(){
			const $ww=$(window).width();
				
			if($ww<=993){
				$('.album').click(function(e){
					e.preventDefault();
					e.stopPropagation();
					$(this).find('.hover').css('opacity', 1);
					$(this).find('a').click(function(e){
						window.location.href = this.href;
					});
				});

				$(window).click(function() {
					$('.hover').css('opacity', 0);
				});
			}
		}).resize();
	});

})(jQuery);