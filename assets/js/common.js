/* Hide Header on on scroll down S */    
    $(document).scroll(function (e){
      var scroll = $(window).scrollTop();
        if (scroll > $('header').height()) {
         $('header').addClass('mobile-stick');
        }else {
         $('header').removeClass('mobile-stick');
        }
        if (scroll > 100) {
             $('header').addClass('fadeInDown');
            }
            else {    
             $('header').removeClass('fadeInDown');
        }
    });
/* Hide Header on on scroll down E */

/* Back to Top Scroll S */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 80) {
            $('#back-top').show();
        } else {
            $('#back-top').hide();
        }
    });
    $('#back-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 2500);
        return false;
    });
/* Back to Top Scroll E */

$(window).on("load",function(){
    AOS.init({
        duration: 900,
        disable: 'mobile',
        offset: 90,
        startEvent: 'DOMContentLoaded',
        delay: 0,
        once: true,        
    });
    $(window).on('load', function () {
        AOS.refresh();
    });

    $(window).on("blur", function () {
        AOS.refresh();
    });
});

$(document).ready(function() {
  $('.productimg-slider .owl-carousel').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    margin: 0,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      600: {
        items: 1,
      },
      767: {
        items: 1,
      },
      1000: {
        items: 1
      }
    }
  })
});

const swiper = new Swiper('.collection-slider', {
  centeredSlides: true,
  loop: true,
  speed: 500,
  slidesPerView: 1,
  spaceBetween: 40,
  autoplay: {
      delay: 3000,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  breakpoints: {
      640: {
          slidesPerView: 2.5,
      },
      768: {
          slidesPerView: 2.75,
      },
      1080: {
          slidesPerView: 3.25,
      },
      1280: {
          slidesPerView: 2.2,
      },
  },
});


/* testimonial Slider JS */
	if ($('.testimonial-slider').length) {
		const testimonial_slider = new Swiper('.testimonial-slider .swiper', {
			slidesPerView : 1,
			speed: 1000,
			spaceBetween: 60,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: '.testimonial-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.testimonial-button-next',
				prevEl: '.testimonial-button-prev',
			},
			breakpoints: {
				768:{
					slidesPerView: 1,
				},
				991:{
					slidesPerView: 1,
				}
			}
		});
	}

	/* Testimonial Company Slider JS */
	if ($('.testimonial-company-slider').length) {
		const testimonial_company_slider = new Swiper('.testimonial-company-slider .swiper', {
			slidesPerView : 2,
			speed: 2000,
			spaceBetween: 50,
			loop: true,
			autoplay: {
				delay: 1000,
			},
			breakpoints: {
				768:{
				  	slidesPerView: 4,
				},
				991:{
				  	slidesPerView: 6,
				}
			}
		});
	}
