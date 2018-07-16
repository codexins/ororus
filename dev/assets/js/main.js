/******************************

INDEX:

    s00 - Predefined Variables
    s01 - Nice Select Init
    s02 - Main Navigation Menu
    s03 - Image Background Settings
    s04 - Primary Slider Settings
    s05 - Elements Spacing and classes
    s06 - Element Carousels
    s07 - Tooltips
    s08 - Product Gallery with Thumbnails
    s09 - Countdown Settings
    s10 - Testimonial Carousel
    s11 - Client Carousel
    s12 - Recent Post Widget Carousel
    s13 - Scroll to Top JS
    s14 - Footer Accordion Activation



******************************/

(function($) {

    "use strict";

    // Declaring main variable
    var ORORUS = {};


    /************************************************************
        s00 - Predefined Variables
    *************************************************************/

    var $window             = $(window),
        $document           = $(document),
        $niceSelect         = $(".nice-select"),
        $mainMenu           = $(".stellarnav"),
        $mainMenufl         = $(".floating-nav"),
        $pSlider            = $("#primary_slider"),
        $prodCarousel       = $(".product-carousel"),
        $galleryThumbs      = $(".gallery-with-thumbs"),
        $countDownTimer     = $(".countdown-timer"),
        $testimonial        = $(".testimonial-container"),
        $clients            = $(".client-carousel"),
        $recentPosts        = $(".recent-posts-widget"),
        $toTop              = $("#to_top"),
        $intelHeader        = $(".main-nav-area"),
        $footer             = $("#colophon");


    // Check if element exists
    $.fn.elExists = function() {
        return this.length > 0;
    };


    /************************************************************
        s01 - Nice Select Init
    *************************************************************/
    ORORUS.niceInit = function() {
        $niceSelect.niceSelect();
    };


    /************************************************************
        s02 - Main Navigation Menu
    *************************************************************/

    ORORUS.mainNav = function() {
        $mainMenu.stellarNav({
            theme: 'plain',
            breakpoint: 991,
            openingSpeed: 250,
            closingDelay: 250
        });

        // Adding active class to nav menu dependent on page
        var pageUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
        $("#main_nav a").each(function() {
            if ($(this).attr("href") === pageUrl || $(this).attr("href") === '') {
                $(this).closest('li').addClass("active");
                $(this).parents('li').addClass('active');
            }
            //  else if (window.location.pathname === '/') {
            //     $('#main_nav a[href="index.html"]').parent('li').addClass('active');
            // }
        })
    };


    /************************************************************
        s03 - Image Background Settings
    *************************************************************/

    ORORUS.imageBgSettings = function() {
        $(".bg-img-wrapper").each(function() {
            var $this = $(this);
            var img = $this.find("img.visually-hidden").attr("src");

            $this.find(".image-placeholder").css({
                backgroundImage: "url(" + img + ")",
                backgroundSize: "cover",
                backgroundPosition: "center center"
            })
        });
    };


    /************************************************************
        s04 - Primary Slider Settings
    *************************************************************/

    ORORUS.primarySlider = function() {
        if ($pSlider.elExists()) {

            var interleaveOffset = 0.5;

            if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){
                 // Firefox-related activities
                 var interleaveOffset = 0;
            }

            var swiperOptions = {
                loop: true,
                speed: 1000,
                effect: (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) ? 'fade' : 'slide', // Show fade effect instead of parallax in Firefox
                watchSlidesProgress: true,
                mousewheelControl: true,
                keyboardControl: true,

                autoplay: {
                    delay: 7000
                },

                navigation: {
                    nextEl: ".swiper-arrow.next.slide",
                    prevEl: ".swiper-arrow.prev.slide"
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },

                // Giving slider a background parallax sliding effect
                on: {
                    progress: function() {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            var slideProgress = swiper.slides[i].progress;
                            var innerOffset = swiper.width * interleaveOffset;
                            var innerTranslate = slideProgress * innerOffset;
                            swiper.slides[i].querySelector(".slide-inner").style.transform =
                                "translate3d(" + innerTranslate + "px, 0, 0)";
                        }
                    },
                    touchStart: function() {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.slides[i].style.transition = "";
                        }
                    },
                    setTransition: function(speed) {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.slides[i].style.transition = speed + "ms";
                            swiper.slides[i].querySelector(".slide-inner").style.transition =
                                speed + "ms";
                        }
                    }
                }
            };

            var swiper = new Swiper($pSlider, swiperOptions);
        }
    };


    /************************************************************
        s05 - Elements Spacing and classes
    *************************************************************/

    ORORUS.elementHeightsClasses = function() {

        // Fixed Navigation Menu Height
        var headerHeight = $intelHeader[0].getBoundingClientRect().height;
        var headerTopHeight = $('header .header-area')[0].getBoundingClientRect().height;

        // Sticky header
        $window.on('scroll', function() {
            var height = $window.scrollTop();
            if (height < headerTopHeight + headerHeight) {
                $(".fixed-header-space").height(0);
                $intelHeader.removeClass("sticky");
            } else {
                $(".fixed-header-space").height(headerHeight);
                $intelHeader.addClass("sticky");
            }
        });

        // For Main Menu float over Primary Slider
        if ($mainMenufl.elExists()) {
            var navHeight       = $mainMenufl[0].getBoundingClientRect().height;

            $pSlider.css("margin-top", -navHeight);
        }

        if ($pSlider.elExists) {
            var sliderHeight    = $pSlider[0].getBoundingClientRect().height;
            $("#primary_slider .slide-content").parent(this).css("height", sliderHeight);
        }

        if ($window.width() > 991) {
            if ($(".top-promo-banners").elExists()) {
                var topBanners = $('.top-promo-banners')[0].getBoundingClientRect().height;
                $pSlider.height(topBanners);
            }
        }
    };


    /************************************************************
        s06 - Element Carousels
    *************************************************************/

    ORORUS.productCarousel = function() {

        var visibleSlides       = null;
        var visibleSlides_lg    = null;
        var visibleSlides_md    = null;
        var visibleSlides_sm    = null;
        var slideLoop           = null;
        var slideSpeed          = null;
        var slideSpace          = null;

        if ($prodCarousel.elExists()) {

            let swiperInstances = [];

            $prodCarousel.each(function(index, element) {

                const $this = $(this);

                // Fetching from data attributes
                var visibleSlides       = $this.attr("data-visible-slide") ? parseInt($this.attr("data-visible-slide")) : 5;
                var visibleSlides_lg    = $this.attr("data-visible-lg-slide") ? parseInt($this.attr("data-visible-lg-slide")) : 4;
                var visibleSlides_md    = $this.attr("data-visible-md-slide") ? parseInt($this.attr("data-visible-md-slide")) : 3;
                var visibleSlides_sm    = $this.attr("data-visible-sm-slide") ? parseInt($this.attr("data-visible-sm-slide")) : 2;
                var slideSpeed          = $this.attr("data-speed") ? parseInt($this.attr("data-speed")) : 1000;
                var slideLoop           = $this.attr("data-loop") === 'true' ? 1 : 0;
                var slideSpace          = $this.attr("data-space-between") ? parseInt($this.attr("data-space-between")) : 30;

                // Adding slider and slider-nav instances to use multiple times in a page
                $this.addClass("instance-" + index);
                $this.parent().find(".prev").addClass("prev-" + index);
                $this.parent().find(".next").addClass("next-" + index);

                swiperInstances[index] = new Swiper(".instance-" + index, {
                    slidesPerView: visibleSlides,
                    spaceBetween: slideSpace,
                    speed: slideSpeed,
                    loop: slideLoop,

                    navigation: {
                        nextEl: '.swiper-arrow.next',
                        prevEl: '.swiper-arrow.prev'
                    },

                    pagination: {
                        el: '.pagination-' + index,
                        type: 'bullets',
                        clickable: true
                    },

                    // Responsive breakpoints
                    breakpoints: {
                        1199: {
                            slidesPerView: visibleSlides_lg,
                            // centeredSlides: (visibleSlides_lg % 2 === 0) ? false : true,
                        },
                        991: {
                            slidesPerView: visibleSlides_md,
                            // centeredSlides: (visibleSlides_lg % 2 === 0) ? false : true,
                        },
                        767: {
                            slidesPerView: visibleSlides_sm,
                            // centeredSlides: (visibleSlides_lg % 2 === 0) ? false : true,
                        },
                        479: {
                            slidesPerView: 1
                        }
                    }
                });
            });
            
            // Updating the sliders
            setTimeout(function () {
                for (const slider of swiperInstances) {
                    slider.update();
                }
            }, 50);

            // Updating the sliders in tab
            $('a[data-toggle="tab"], a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                for (const slider of swiperInstances) {
                    slider.update();
                }
            });
        }
    };


    /************************************************************
        s07 - Tooltips
    *************************************************************/

    ORORUS.toolTips = function() {
        $('body').tooltip( {selector: '[data-toggle=tooltip]'} );
    };


    /************************************************************
        s08 - Product Gallery with Thumbnails
    *************************************************************/

    ORORUS.galleryWithThumb = function() {
        if ($galleryThumbs.elExists()) {

            // Params
            var mainSliderSelector = '.main-slider',
                navSliderSelector = '.nav-slider';

            // Main Slider
            var mainSliderOptions = {
                effect: 'fade',
                loop: true,
                speed:1000,
                loopAdditionalSlides: 10,
                watchSlidesProgress: true,
            };
            var mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

            // Navigation Slider
            var navSliderOptions = {
                loop: true,
                loopAdditionalSlides: 10,
                speed:1000,
                slidesPerView: 3,
                spaceBetween: 15,
                touchRatio: 0.2,
                grabCursor: true,
                slideToClickedSlide: true,

                navigation: {
                    nextEl: '.swiper-arrow.next',
                    prevEl: '.swiper-arrow.prev'
                },

                // Responsive breakpoints
                breakpoints: {
                    991: {
                        slidesPerView: 2,
                        centeredSlides : false
                    }
                }
            };
            var navSlider = new Swiper(navSliderSelector, navSliderOptions);

            // Connecting the sliders
            mainSlider.controller.control = navSlider;
            navSlider.controller.control = mainSlider;

            // Updating slider in modal
            $("#product_quick_view").on('show.bs.modal', function() {
                setTimeout(function() {
                    navSlider.update();
                    mainSlider.update();
                }, 500);
            });
        }
    };


    /************************************************************
        s09 - Countdown Settings
    *************************************************************/

    ORORUS.countDown = function() {
        if ($countDownTimer.elExists()) {

            let countInstances = [];
            $countDownTimer.each(function(index, element) {

                const $this = $(this);

                // Fetching from data attibutes
                var year    = $this.attr("data-countdown-year") ? $this.attr("data-countdown-year") : 2019;
                var month   = $this.attr("data-countdown-month") ? $this.attr("data-countdown-month") : 6;
                var day     = $this.attr("data-countdown-day") ? $this.attr("data-countdown-day") : 28;

                // Adding instances for multiple use
                $this.addClass("instance-0" + index);

                // Initializing the count down
                countInstances[index] = simplyCountdown(".instance-0" + index, {
                    year: year,
                    month: month,
                    day: day,
                    words: {                            // Words displayed into the countdown
                        days: 'day',
                        hours: 'hr',
                        minutes: 'min',
                        seconds: 'sec',
                        pluralLetter: 's'
                    },
                    plural: true,                       // Use plurals
                    inline: false,
                    enableUtc: false,
                    refresh: 1000,                      // Default refresh every 1s
                    sectionClass: 'countdown-section',  // Section css class
                    amountClass: 'countdown-amount',    // Amount css class
                    wordClass: 'countdown-word'         // Word css class
                });
            });
        }
    };


    /************************************************************
        s10 - Testimonial Carousel
    *************************************************************/

    ORORUS.testimonialCarousel = function() {
        if ($testimonial.elExists()) {
            var testimonial = new Swiper($testimonial, {
                loop: true,
                spaceBetween: 0,
                parallax: true,
                speed: 1000,
                // autoplay: {
                //     delay: 6000
                // },

                pagination: {
                    el: '.swiper-pagination-testimonial',
                    clickable: true
                },

                navigation: {
                    nextEl: '.swiper-arrow.next.testimonial-slide',
                    prevEl: '.swiper-arrow.prev.testimonial-slide'
                }
            });
        }
    };


    /************************************************************
        s11 - Client Carousel
    *************************************************************/

    ORORUS.clientCarousel = function() {
        if ($clients.elExists()) {
            var client = new Swiper($clients, {
                loop: true,
                slidesPerView: 5,
                spaceBetween: 0,
                speed: 1000,
                centeredSlides: true,
                grabCursor: true,
                autoplay: {
                    delay: 5000
                },

                // Responsive breakpoints
                breakpoints: {
                    1199: {
                        slidesPerView: 4,
                        centeredSlides: false
                    },
                    991: {
                        slidesPerView: 4,
                        centeredSlides: false
                    },
                    767: {
                        slidesPerView: 3
                    },
                    575: {
                        slidesPerView: 3
                    },
                    479: {
                        slidesPerView: 1
                    }
                }
            })
        }
    };


    /************************************************************
        s12 - Recent Post Widget Carousel
    *************************************************************/

    ORORUS.recentPostsWidget = function() {
        if ($recentPosts.elExists()) {
            var postCarousel = new Swiper($recentPosts, {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
                speed: 1000,

                // Responsive breakpoints
                breakpoints: {
                    767: {
                        slidesPerView: 2,
                        centeredSlides: false
                    },
                    575: {
                        slidesPerView: 1,
                    }
                }
            });

            // Slider update in footer accordion
            $footer.on('click', '.widgettitle', function() {
                setTimeout(function() {
                    postCarousel.update();
                }, 500);
            });
        }
    };


    /************************************************************
        s13 - Scroll to Top JS
    *************************************************************/

    ORORUS.scrollToTop = function() {
        $toTop.hide();
        $window.on('scroll', function() {
            if ($window.scrollTop() > 300) {
                $toTop.fadeIn();
            } else {
                $toTop.fadeOut();
            }
        });

        $toTop.on('click', function() {
            $("html,body").animate({
                scrollTop: 0
            }, 800)
        });
    };


    /************************************************************
        s14 - Footer Accordion Activation
    *************************************************************/

    ORORUS.footerAccordion = function() {
        if ($window.width() < 991) {
            $footer.on('click', '.widgettitle', function(){     
                $(this).parent('.widget-container').toggleClass('active').siblings().removeClass('active'); 
                $(this).next('.widget-container .widget-content').toggle(300);
                $(this).parent('.widget-container.active').siblings().children('.widget-container .widget-content').slideUp(300); 
            });
        }
    };


    // Window load functions
    $window.on('load', function() {
        ORORUS.imageBgSettings();
    });

    // Document ready functions
    $document.on('ready', function() {
        ORORUS.niceInit(),
        ORORUS.mainNav(),
        ORORUS.primarySlider(),
        ORORUS.productCarousel(),
        ORORUS.galleryWithThumb(),
        ORORUS.testimonialCarousel(),
        ORORUS.clientCarousel(),
        ORORUS.recentPostsWidget(),
        ORORUS.countDown(),        
        ORORUS.scrollToTop(),        
        ORORUS.toolTips(),
        ORORUS.footerAccordion();
    });

    // Window load and resize functions
    $window.on('load resize', function() {
        ORORUS.elementHeightsClasses();
    });

})(jQuery);


