"use strict";
jQuery(document).ready(function() {
	//menu
	if (jQuery().superfish) {
		jQuery('ul.sf-menu').superfish({
			delay:       700,
			animation:   {opacity:'show',height:'show'},
			//animation:   {opacity:'show'},
			animationOut: {opacity: 'hide'},
			speed:       'fast',
			disableHI:   false,
			cssArrows:   false,
			autoArrows:  true
		});
	}

	//toTop
	if (jQuery().UItoTop) {
        jQuery().UItoTop({ easingType: 'easeOutQuart' });
    }

    //horizontal accordion
    if (jQuery().elastislide) {
	    jQuery('#horizontal_slider').elastislide({
	        imageW : 360,
	        border : 0,
	        minItems : 1,
	        margin : 30
	    });
	}

    //prettyPhoto
    if (jQuery().prettyPhoto) {
	   	jQuery("a[rel^='prettyPhoto']").prettyPhoto({
			theme: 'facebook' /* light_rounded / dark_rounded / light_square / dark_square / facebook / pp_default*/
	  	});
	}

   	//carousel
   	if (jQuery().carousel) {
		jQuery('.carousel').carousel();
	}

	//single page localscroll and scrollspy
	var navHeight = jQuery('#header').outerHeight(true) + 80;
	jQuery('body').scrollspy({
		target: '.mainmenu_wrap',
		offset: navHeight
	});
	if (jQuery().localScroll) {
		jQuery('#mainmenu').localScroll({
			duration:1900,
			easing:'easeOutQuart',
			offset: -40
		});
		jQuery('#header').localScroll({
			duration:1900,
			easing:'easeOutQuart',
			offset: -40
		});
	}

	//portfolio and horizontal slider animation
	jQuery('.portfolio_item_image .portfolio_links').css({opacity: 0});
	jQuery('.isotope-item, .horizontal_slider_introimg').hover(
	 	function() {
			jQuery( this ).find('.portfolio_item_image .portfolio_links').stop().animate({ opacity: 1}, 500, 'easeOutExpo').find('.p-view').toggleClass('moveFromLeft').end().find('.p-link').toggleClass('moveFromRight');
		}, function() {
			jQuery( this ).find('.portfolio_item_image .portfolio_links').stop().animate({ opacity: 0}, 300, 'easeOutExpo').find('.p-view').toggleClass('moveFromLeft').end().find('.p-link').toggleClass('moveFromRight');
		}
	);

	//teaser style5 animation
	jQuery('.single_teaser.icons.style5').hover(
	 	function() {
			jQuery( this ).find('i').addClass('moveFromLeft').end().find('h3').addClass('moveFromRight').end().find('p').addClass('moveFromBottom');
		}, function() {
			jQuery( this ).find('i').removeClass('moveFromLeft').end().find('h3').removeClass('moveFromRight').end().find('p').removeClass('moveFromBottom');
		}
	);


	//twitter
	if (jQuery().tweet) {
		jQuery('.twitter').tweet({
			modpath: "./twitter/",
		    count: 3,
		    avatar_size: 48,
		    loading_text: 'loading twitter feed...',
		    join_text: 'auto',
		    username: 'ThemeForest', 
		    template: "{avatar}{time}{join}<span class=\"tweet_text\">{tweet_text}</span>"
		});
	}

});

jQuery(window).load(function(){
	
	setTimeout(function(){
		jQuery('.progress-bar').addClass('stretchRight');
	}, 600);

	//stick header to top
	if (jQuery().sticky) {
	    jQuery("#header").sticky({ 
	    		topSpacing: 0,
	    		scrollBeforeStick: 150
	    	},
	    	function(){ 
	    		jQuery("#header").stop().animate({opacity:0}, 0).delay(500).stop().animate({opacity:1}, 1000);
	    	},
	       	function(){ 
	    		jQuery("#header").stop().animate({opacity:0}, 0).delay(50).stop().animate({opacity:1}, 2000);
	    	}
	    );
	}
	

	if (jQuery().flexslider) {
		var $mainSlider = jQuery('#mainslider');
		jQuery(".flexslider").flexslider({
			animation: "fade",
			useCSS: true,
			controlNav: true,   
			//animationLoop: false,
			smoothHeight: true,
			slideshowSpeed:5000,
			animationSpeed:800,
			after :function( slider ){
			  	//bg-color1 - class for #mainslider
			  	var currentClass = $mainSlider.find('.flex-active-slide').attr('data-bg');
			  	$mainSlider.attr('class', currentClass);
			}
		});
	}

	jQuery('body').delay(1000).scrollspy('refresh');


	//preloader
	jQuery(".preloaderimg").fadeOut();
	jQuery(".preloader").delay(200).fadeOut("slow").delay(200, function(){
		jQuery(this).remove();
	});


	//flickr
	if (jQuery().jflickrfeed) {
		jQuery("#flickr").jflickrfeed({
			flickrbase: "http://api.flickr.com/services/feeds/",
			limit: 6,
			qstrings: {
				id: "54297118@N03"
			},
			itemTemplate: '<a href="{{image_b}}" rel="prettyPhoto[pp_gal]"><li><img alt="{{title}}" src="{{image_s}}" /></li></a>'
		}, function(data) {
			jQuery("#flickr a").prettyPhoto({
				theme: 'facebook'
	   		});
	   		jQuery("#flickr li").hover(function () {						 
			   jQuery(this).find("img").stop().animate({ opacity: 0.5 }, 200);
		    }, function() {
			   jQuery(this).find("img").stop().animate({ opacity: 1.0 }, 400);
		    });
		});
	}

});

jQuery(window).resize(function(){
	jQuery("#header").sticky('update');
	jQuery('body').scrollspy('refresh');

});

jQuery(window).scroll(function() {

	//circle progress bar
	if (jQuery().easyPieChart) {
		var count = 0 ;
		var colors = ['#a8d164', '#fbcf61', '#ff6f6f'];
		jQuery('.chart').each(function(){

				
			var imagePos = jQuery(this).offset().top;
			var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+600) {

				jQuery(this).easyPieChart({
			        barColor: colors[count],
					trackColor: '#343434',
					scaleColor: false,
					scaleLength: false,
					lineCap: 'butt',
					lineWidth: 10,
					size: 130,
					rotate: 0,
					animate: 2000,
					onStep: function(from, to, percent) {
							jQuery(this.el).find('.percent').text(Math.round(percent));
						}
			    });
			}

			count++;
			if (count >= colors.length) { count = 0};
		});
	}

});