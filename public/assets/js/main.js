(function ($) {
    'use strict';

    /*------------- preloader js --------------*/
	function loader() {
		$(window).on('load', function () {
			$('#ctn-preloader').addClass('loaded');
			$("#loading").fadeOut(500);
			// Una vez haya terminado el preloader aparezca el scroll

			if ($('#ctn-preloader').hasClass('loaded')) {
				// Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
				$('#preloader').delay(900).queue(function () {
					$(this).remove();
				});
			}
		});
	}
	loader();

	$(window).on("load", function () {
		background();
	});

    // background image js
	function background() {
			var img=$('.bg_img');
			img.css('background-image', function () {
			var bg = ('url(' + $(this).data('background') + ')');
			return bg;
		});
	}

	// active mobile-menu
	jQuery('#mobile-menu').meanmenu({
		meanScreenWidth: '991',
		meanMenuContainer: '.mobile-menu'
	});

	// bannerSlide 
	var slider = $('.hero');
	slider.owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		smartSpeed: 800,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		loop: true,
		slideSpeed: 3000,
		nav: true,
		dots: false,
		navText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"],
		//autoplay: true,
	});

	slider.on('translate.owl.carousel', function () {
		var layer = $("[data-animation]");
		layer.each(function () {
			var s_animation = $(this).data('animation');
			$(this).removeClass('animated ' + s_animation).css('opacity', '0');
		});
	});

	$("[data-delay]").each(function () {
		var animation_del = $(this).data('delay');
		$(this).css('animation-delay', animation_del);
	});

	$("[data-duration]").each(function () {
		var animation_dur = $(this).data('duration');
		$(this).css('animation-duration', animation_dur);
	});

	slider.on('translated.owl.carousel', function () {
		var layer = slider.find('.owl-item.active').find("[data-animation]");
		layer.each(function () {
			var s_animation = $(this).data('animation');
			$(this).addClass('animated ' + s_animation).css("opacity", "1");
		});
	});

	// Testimonial js
	var testimonial = $('.testimonial');
	testimonial.owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		loop: true,
		slideSpeed: 3000,
		nav: false,
		dots: false,
	});

	var testimonial2 = $('.testimonial__2');
	testimonial2.owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		loop: true,
		slideSpeed: 3000,
		dots: false,
		nav: true,
		navText: ["<i class='fal fa-long-arrow-left'></i>", "<i class='fal fa-long-arrow-right'></i>"],
	});

	var testimonial3 = $('.testimonial__3');
	testimonial3.owlCarousel({
		items: 1,
		loop: true,
		margin: 0,
		loop: true,
		slideSpeed: 3000,
		dots: false,
		nav: true,
		navText: ["<i class='fal fa-long-arrow-left'></i>", "<i class='fal fa-long-arrow-right'></i>"],
	});

	// partner
	var brand = $('.brand-carousel');
	brand.owlCarousel({
		loop: true,
		margin: 30,
		loop: true,
		slideSpeed: 3000,
		nav: false,
		dots: false,
		responsiveClass:true,
		responsive: {
			0: {
				items: 1,
				margin: 0
			},
			450: {
				items: 2,
				margin: 0
			},
			768: {
				items: 3
			},
			1200: {
				items: 4
			},
			1500: {
				items: 5
			}
		}
	});

	// postbox_gallery active
	var gallery = $('.post_gallery');
	gallery.owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 800,
		nav: false,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		dots: false,
		nav: true,
		navText: ["<i class='fal fa-arrow-left'></i>", "<i class='fal fa-arrow-right'></i>"],
		dots: false,
	});

	// js - tilt
	if ($(".js-tilt").length) {
		$('.js-tilt').tilt();
	}

	// Activate lightcase
	$('a[data-rel^=lightcase]').lightcase();

	// Nice select js
	$('select').niceSelect();

	// Active Odometer Counter 
	jQuery('.odometer').appear(function (e) {
		var odo = jQuery(".odometer");
		odo.each(function () {
			var countNumber = jQuery(this).attr("data-count");
			jQuery(this).html(countNumber);
		});
	});

	// Active wow js
	new WOW().init();

	// remove faq active class
	$(".card__header").on("click", function () {
		$(".btn-link").removeClass("active");
	});

	// map active
	function basicmap() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 8,
			scrollwheel: false,
			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(23.7031006, 90.4596732), // New York
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				"stylers": [{
					"hue": "#D1D6D8"
				}]
			}, {
				"featureType": "road",
				"elementType": "labels",
				"stylers": [{
					"visibility": "off"
				}]
			}, {
				"featureType": "road",
				"elementType": "geometry",
				"stylers": [{
					"lightness": 100
				}, {
					"visibility": "simplified"
				}]
			}]
		};
		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('contact-map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(23.7031006, 90.4596732),
			map: map,
			icon: "",
			title: 'Cryptox'
		});
	}
	if ($('#contact-map').length != 0) {
		google.maps.event.addDomListener(window, 'load', basicmap);
	}

	

})(jQuery);

