/*-----------------------------------------------------------------

Template Name:  Marketi - Digital Marketing Agency HTML Template
Author:  wprealizer
Author URI: https://themeforest.net/user/https://themeforest.net/user/wprealizer/portfolio/portfolio
Developer: Kawser Ahmed Roni
Version: 1.0.0
Description: Marketi - Digital Marketing Agency HTML5 Template

-------------------------------------------------------------------
CSS TABLE OF CONTENTS
-------------------------------------------------------------------

01. preloader
02. header
03. swiper slider
04. animated text with swiper slider
05. shop products count
06. image src change
07. hide & show a div
08. maenMenu 
09. add class & remove class
10. magnificPopup
11. back to top
12. data backgrund
13. coundown by click
14. remove products
15. wow animation
17. meanmenu 
16. parallax 

------------------------------------------------------------------*/

(function ($) {
	("use strict");

	// Preloader area start here ***
	var windowOn = $(window);
	windowOn.on("load", function () {
		$("#loading").fadeOut(500);
	});
	// Preloader area end here ***

	// Header area start here ***
	// Mobile menu
	$(".header-area nav").meanmenu();

	// Menu Fixed
	var fixed_top = $(".header-area");
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 50) {
			fixed_top.addClass("menu-fixed animated fadeInDown");
		} else {
			fixed_top.removeClass("menu-fixed fadeInDown");
		}
	});
	// Header area end here ***

	// Team slider area start here ***
	var swiper = new Swiper(".team__slider", {
		loop: "true",
		spaceBetween: 40,
		speed: 400,
		pagination: {
			el: ".team__dot",
			clickable: true,
		},
		navigation: {
			nextEl: ".team__arry-next",
			prevEl: ".team__arry-prev",
		},
		breakpoints: {
			1299: {
				slidesPerView: 4,
			},
			991: {
				slidesPerView: 3,
			},
			575: {
				slidesPerView: 2,
			},
		},
	});
	// Team slider area end here ***

	// Testimonial slider area start here ***
	var swiper = new Swiper(".testimonial__slider", {
		loop: "true",
		spaceBetween: 30,
		speed: 400,
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".testimonial__dot",
			clickable: true,
		},
		navigation: {
			nextEl: ".testimonial__arry-next",
			prevEl: ".testimonial__arry-prev",
		},
	});

	var swiper = new Swiper(".testimonial-two__slider", {
		loop: "true",
		spaceBetween: 30,
		speed: 400,
		pagination: {
			el: ".testimonial-two__dot",
			type: "fraction",
		},
		navigation: {
			nextEl: ".testimonial-two__arry-next",
			prevEl: ".testimonial-two__arry-prev",
		},
	});
	// Testimonial slider area end here ***

	// Service slider area start here ***
	var swiper = new Swiper(".service__slider", {
		loop: "true",
		spaceBetween: 24,
		speed: 300,
		navigation: {
			nextEl: ".service__arry-next",
			prevEl: ".service__arry-prev",
		},
		breakpoints: {
			1200: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 3,
			},
			575: {
				slidesPerView: 2,
			},
		},
	});
	// Service slider area end here ***

	// Brand slider area start here ***
	var swiper = new Swiper(".brand__slider", {
		loop: true,
		spaceBetween: 24,
		allowTouchMove: false,
		disableOnInteraction: true,
		speed: 3000,
		autoplay: {
			delay: 1
		},
		breakpoints: {
			1200: {
				slidesPerView: 5,
			},
			992: {
				slidesPerView: 4,
			},
			575: {
				slidesPerView: 2,
			},
			320: {
				slidesPerView: 2,
			},
		},
	});
	// Brand slider area end here ***

	// Blog slider area start here ***
	var swiper = new Swiper(".blog__slider", {
		loop: "true",
		spaceBetween: 40,
		speed: 400,
		pagination: {
			el: ".blog__dot",
			clickable: true,
		},
		navigation: {
			nextEl: ".blog__arry-next",
			prevEl: ".blog__arry-prev",
		},
		breakpoints: {
			575: {
				slidesPerView: 2,
			},
		},
	});
	// Blog slider area end here ***

	// Faq slider area start here ***
	var swiper = new Swiper(".faq__slider", {
		loop: "true",
		spaceBetween: 80,
		speed: 400,
		navigation: {
			nextEl: ".faq__arry-next",
			prevEl: ".faq__arry-prev",
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
		},
	});
	// Faq slider area end here ***

	// Mouse move paralax area end here ***
	if ($(window).width() > 780) {
		$(".paralax__animation").mousemove(function (e) {
			$("[data-depth]").each(function () {
				var depth = $(this).data("depth");
				var amountMovedX = (e.pageX * -depth) / 4;
				var amountMovedY = (e.pageY * -depth) / 4;

				$(this).css({
					transform:
						"translate3d(" +
						amountMovedX +
						"px," +
						amountMovedY +
						"px, 0)",
				});
			});
		});
	}
	// Mouse move paralax area end here ***

	// Hide & show by clicks js area start here ***
	$(document).on("click", "#openButton", function () {
		$("#targetElement").removeClass("sidebar__hide");
	});
	$(document).on("click", "#closeButton", function () {
		$("#targetElement").addClass("sidebar__hide");
	});
	// Hide & show by clicks js area end here ***

	// Background image date area start here ***
	$("[data-background").each(function () {
		$(this).css(
			"background-image",
			"url( " + $(this).attr("data-background") + "  )"
		);
	});
	// Background image date area end here ***

	// Video popup area start here ***
	$(".video-popup").magnificPopup({
		type: "iframe",
		iframe: {
			markup:
				'<div class="mfp-iframe-scaler">' +
				'<div class="mfp-close"></div>' +
				'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
				"</div>",

			patterns: {
				youtube: {
					index: "youtube.com/",

					id: "v=",

					src: "https://www.youtube.com/embed/%id%?autoplay=1",
				},
				vimeo: {
					index: "vimeo.com/",
					id: "/",
					src: "//player.vimeo.com/video/%id%?autoplay=1",
				},
				gmaps: {
					index: "//maps.google.",
					src: "%id%&output=embed",
				},
			},

			srcAction: "iframe_src",
		},
	});
	// Video popup area end here ***

	// Map popup area start here ***
	$(".map-popup").magnificPopup({
		disableOn: 700,
		type: "iframe",
		mainClass: "mfp-fade",
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false,
	});
	// Map popup area end here ***

	// Counter up area start here ***
	$(".count").counterUp({
		delay: 30,
		time: 1000,
	});
	$(".progress-count").counterUp({
		delay: 20,
		time: 1000,
	});
	// Counter up area end here ***

	// Nice seclect area start here ***
	$(document).ready(function () {
		$("select").niceSelect();
	});
	// Nice seclect area end here ***

	// Back to top btn area start here ***
	$(window).scroll(function () {
		if ($(this).scrollTop() > 20) {
			$(".btn-backToTop").addClass("show");
		} else {
			$(".btn-backToTop").removeClass("show");
		}
	});
	$(".btn-backToTop").click(function () {
		$("html, body").animate({ scrollTop: 0 }, 800);
		return false;
	});
	// Back to top btn area end here ***

	// WOW Animatin area start here ***
	new WOW().init();
	// WOW Animatin area start here ***
})(jQuery);
