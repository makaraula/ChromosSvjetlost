/*ovdje se nalaze funcije za javascript/jquery*/

$(document).ready(function() {

	$('img.lazy').lazy({
		effect:"fadeIn",
		effectTime: 1000,
		threshold: 0
	});

	(function($,sr){

		// debouncing function from John Hann
		// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
		var debounce = function (func, threshold, execAsap) {
		var timeout;

		return function debounced () {
		 var obj = this, args = arguments;
		 function delayed () {
		   if (!execAsap)
		     func.apply(obj, args);
		   timeout = null;
		 };

		 if (timeout)
		   clearTimeout(timeout);
		 else if (execAsap)
		   func.apply(obj, args);

		 timeout = setTimeout(delayed, threshold || 1);
		};
		}
		// smartresize
		jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

		})(jQuery,'smartresize');


		function setMenu(){
			$(".menu-list").css('display', '');
		};

		function cbanner(){
			$(".cbanner").css("min-height", "");
			if($(window).width() >= 480){
				var max = -1;
				$(".cbanner").each(function(){
					var h = $(this).outerHeight();
					max = h > max ? h : max;
			});

				$(".cbanner").css("min-height", max);
			}
		};

		function obBoxTitle(){
			$(".ob-box h3").css("min-height", "");
			if($(window).width() >= 480){
				var max = -1;
				$(".ob-box h3").each(function(){
					var h = $(this).outerHeight();
					max = h > max ? h : max;
			});

				$(".ob-box h3").css("min-height", max);
			}
		};

		function jsTitle(){
			$(".jsTitle").css("min-height", "");
			if($(window).width() >= 480){
				var max = -1;
				$(".jsTitle").each(function(){
					var h = $(this).outerHeight();
					max = h > max ? h : max;
			});

				$(".jsTitle").css("min-height", max);
			}
		};

		// usage:

		$(window).resize(function() {
			setMenu();
		});

		$(window).smartresize(function(){
			cbanner();
			obBoxTitle();
			jsTitle();
		});

		$(window).load(function(){
			setMenu();
			cbanner();
			obBoxTitle();
			jsTitle();
		});

	$('.gallery').each(function() {
	    $(this).magnificPopup({
	      delegate: 'a',
	      type: 'image',
	      tLoading: 'Loading image #%curr%...',
	      mainClass: 'mfp-img-mobile gallery-img',
	      gallery: {
	      enabled: true,
	      navigateByImgClick: true,
	      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	      }
	    });
	});


	$('#toggle').click(function(){
	    $(this).next().slideToggle();
	});


	$('.sub-toggle').click(function(){
	    $(this).next().slideToggle();
	});


	$('.bxslider').show().bxSlider({
		mode: "fade",
		controls: true,
		captions: false,
		auto: true,
		autoHover:true,
		infiniteLoop: true,
		pager: false,
		touchEnabled: true,
		speed:3000,
		pause:6000
	});


	$(".w-search-open").click(function() {
		$(".w-search-form").show(500);
	});

	$(".close").click(function() {
		$(".w-search-form").hide(500);
	});


	$(window).scroll(function() {
	    if ($(window).width() >= 980) {
	        if ($(document).scrollTop() > 30) {
	            $('.top-holder').addClass('shrink');
	        } else {
	            $('.top-holder').removeClass('shrink');
	        }
	    }
	});


	window.sr = ScrollReveal({duration:1000});
	sr.reveal('.enter-bottom', {
		origin: 'bottom',
		distance: '200px',
		easing   : 'ease-in-out',
		opacity: 0
	});


	$(window).scroll(function() {
        if ($(window).scrollTop() > 500) {
          $("#to-top-page").fadeIn(100);
        }
        else {
          $("#to-top-page").fadeOut(100);
        }
    });

	$('#to-top-page').click(function(){
		$('html, body').animate({scrollTop: 0
		}, 1000);
		return false;
	});


	var aktivni_gumb = "";
	$('.question-tabs > a').click(function(){

		var tabId = $(this).attr("id");

		$(".tabs-container").slideUp(500); // sakrij sve hidden desc divove
		$("#"+ tabId + "-container li a").removeClass("active-tab");

		if ($(this).hasClass("aktivni")){
	   		$(".question-tabs > a").removeClass("aktivni");
	   	} else {
	   		$(".question-tabs > a").removeClass("aktivni");
	   		$(this).addClass("aktivni");
	   	}

	   	if (aktivni_gumb != tabId) {

	   		$("#"+ tabId + "-container").slideDown(500); // prikazi onaj na kojeg je kliknuti

	   		aktivni_gumb = tabId;
		} else {
			aktivni_gumb = "";
		}
	});


	$(".item").click(function() {
		var slide = $(this).attr("data-slide");
		$('html, body').animate({scrollTop: $(slide).offset().top - 210}, 1000);
	});


	$('.question-tabs .tab-link').click(function(){
			equalheight('.kontakt-box');
		});


		// Dynamic equal height function
		equalheight = function(container){

			var currentTallest = 0,
			currentRowStart = 0,
			rowDivs = new Array(),
			$el,
			topPosition = 0;

			$(container).each(function() {

				$el = $(this);
				$($el).height('auto')
				topPostion = $el.position().top;

				if (currentRowStart != topPostion) {
					for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
						rowDivs[currentDiv].height(currentTallest);
							}
				rowDivs.length = 0; // empty the array
				currentRowStart = topPostion;
				currentTallest = $el.height();
				rowDivs.push($el);
				} else {
					rowDivs.push($el);
					currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
				}
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
					rowDivs[currentDiv].height(currentTallest);
				}
			});
		}

		$(window).load(function() {
			equalheight('.kontakt-box');
		});

		$(window).resize(function(){
			equalheight('.kontakt-box');
		});

});
