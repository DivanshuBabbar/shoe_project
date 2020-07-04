 AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: false
 });
  
  
   $('.solTitle a').click(function(e) {
      e.preventDefault();
       localStorage.setItem("animation", true)
      window.location.href = '/shoe_laces'
  
    });
    if (localStorage.animation && JSON.parse(localStorage.animation)) {
    	$('html, body').animate({
		        scrollTop: $('.show_event').offset().top
		    }, 5000);
        localStorage.removeItem("animation")
    }
  
	
    $('.tape_href a').click(function(e) {
      e.preventDefault();
       window.location.href = '/tapes'
    });

   


 $(document).on("click", ".send_email", function(e) {
 var fname = $("input[name=fname]").val();
 var lname = $("input[name=lname]").val();
 var email = $("input[name=email]").val();
 var subject = $("input[name=subject]").val();
 var article_no = $("input[name=article_no]").val();
 var usage = $("input[name=usage]").val();
 var size = $("input[name=size]").val();
 var quantity = $("input[name=quantity]").val();
 var message = $('#message').val();
 
 $.ajax({
	    type: "post",
	    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
	    url: "/admin_email",
	    contentType: "application/x-www-form-urlencoded",
	    data: { fname: fname , lname: lname , email: email , subject : subject , message : message , quantity : quantity , size : size , usage : usage , article_no : article_no },
	    success: function(data, ) {
	    	$(".mail_form").trigger("reset");
	      Swal.fire({
		        type: "success",
		        title: "Mail Sent Successfully. We will get back to you shortly",
		        showConfirmButton: false,
		        timer: 1500
	       });

	    }
    });
});

jQuery(document).ready(function($) {

	"use strict";

	
	

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();


	var siteCarousel = function () {
		if ( $('.nonloop-block-13').length > 0 ) {
			$('.nonloop-block-13').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 10,
				autoplay: true,
		    margin: 20,
		    nav: true,
		    smartSpeed: 1000,
		    dots: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        600:{
	        	margin: 20,
	        	stagePadding: 10,
	          items: 1
	        },
	        1000:{
	        	margin: 20,
	        	stagePadding: 10,
	          items: 2
	        },
	        1200:{
	        	margin: 20,
	        	stagePadding: 10,
	          items: 3
	        }
		    }
			});
		}



		if ( $('.nonloop-block-14').length > 0 ) {
			$('.nonloop-block-14').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
				autoplay: true,
		    margin: 20,
		    smartSpeed: 900,
		    nav: true,
		    dots: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        600:{
	        	margin: 20,
	        	stagePadding: 0,
	          items: 1
	        },
	        1000:{
	        	margin: 20,
	        	stagePadding: 0,
	          items: 1
	        }
	        
		    }
			});
		}

		if ( $('.nonloop-block-15').length > 0 ) {
			$('.nonloop-block-15').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
				autoplay: true,
		    margin: 20,

		    nav: true,
		    dots: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        600:{
	        	margin: 20,
	        	stagePadding: 0,
	          items: 1,
	          nav: false,
		    		dots: true
	        },
	        1000:{
	        	margin: 20,
	        	stagePadding: 0,
	          items: 2,
	          nav: true,
		    		dots: true
	        },
	        1200:{
	        	margin: 20,
	        	stagePadding: 0,
	          items: 3,
	          nav: true,
		    		dots: true
	        }
		    }
			});
		}

		if ( $('.slide-one-item').length > 0 ) {
			$('.slide-one-item').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
				smartSpeed: 1000,
		    margin: 0,
		    autoplay: true,
		    pauseOnHover: false,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
		    nav: true,
		    navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">']
		  });
	  }
	};
	siteCarousel();

	var siteStellar = function() {
		$(window).stellar({
	    responsive: false,
	    parallaxBackgrounds: true,
	    parallaxElements: true,
	    horizontalScrolling: false,
	    hideDistantElements: false,
	    scrollProperty: 'scroll'
	  });
	};
	siteStellar();

	var siteCountDown = function() {

		if ( $('#date-countdown').length > 0 ) {
			$('#date-countdown').countdown('2020/10/10', function(event) {
			  var $this = $(this).html(event.strftime(''
			    + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
			    + '<span class="countdown-block"><span class="label">%d</span> days </span>'
			    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
			    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
			    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
			});
		}
				
	};
	siteCountDown();

	var siteDatePicker = function() {

		if ( $('.datepicker').length > 0 ) {
			$('.datepicker').datepicker();
		}

	};
	siteDatePicker();


	var windowScrolled = function() {


		$(window).scroll(function() {

			var $w = $(this), st = $w.scrollTop(), navbar = $('.js-site-navbar') ;

			if ( st > 100 ) {
				navbar.addClass('scrolled');
			} else {
				navbar.removeClass('scrolled');
			}
			
		})

	}
	windowScrolled();

	var toolTipInit = function() {
		$('[data-toggle="tooltip"]').tooltip()
	};
	toolTipInit();


	var counter = function() {
		
		$('.section-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();

});