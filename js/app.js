// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs

/**
 * Require config
 */
require.config({
    baseUrl: 'js/',
    paths: {
        'jquery': 'jquery.min',
        'foundation.core': 'foundation',
        'jquery.cookie': 'jquery.cookie',
        'fastclick': 'fastclick',
        'modernizr': 'modernizr',
        'royalslider': 'jquery.royalslider.min',
        'sliders' : 'jquery.contentsliders',
        'webfontload' :  'webfont',
        'nanobar' : 'nanobar.min'
    },
    shim: {
        'foundation.core': {
            deps: [
                'jquery',
                'modernizr',
                'nanobar'
            ],
            exports: 'Foundation'
        },
        'jquery.cookie': {
            deps: [
                'jquery'
            ]
        },
        'royalslider': {
            deps: [
                'jquery'
            ]
        },
        'foundation': {
            deps: [
                'jquery'
            ]
        },
        'fastclick': {
            exports: 'FastClick'
        },
        'modernizr': {
            exports: 'Modernizr'
        },
        'sliders':{
            'deps': [
                'royalslider'
            ]
        }
    }
});

requirejs([ "jquery.min",
    "jquery.cookie",
    "foundation.core",
    "sliders"], function ($) {

    /**
     * Foundation - app.js:
     */

    (function ($, window, undefined) {

        var $ =jQuery.noConflict();

        var $doc = $(document),
            Modernizr = window.Modernizr;

        var options = {
            bg: '#50CE09'
        };
        var nanobar = new Nanobar(options);
        nanobar.go(50);


        /***************************************************************************************************************
         Scroll
         ***************************************************************************************************************/
        $.scrollTo = $.fn.scrollTo = function(x, y, options){
            if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);

            options = $.extend({}, {
                gap: {
                    x: 0,
                    y: 0
                },
                animation: {
                    easing: 'swing',
                    duration: 600,
                    complete: $.noop,
                    step: $.noop
                }
            }, options);

            return this.each(function(){
                var elem = $(this);
                elem.stop().animate({
                    scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
                    scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
                }, options.animation);
            });
        };


        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $(".top-bar-section a").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });



        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $(".top-bar-section ul.right li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i=0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values
        console.log(aArray);

        $(window).scroll(function(){
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();

            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").parent().addClass("active");
                } else {
                    $("a[href='" + theID + "']").parent().removeClass("active");
                }
            }

            if(windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav li:last-child a").addClass("nav-active");
                }
            }

        });



        /**
         * Include Foundation settings
         */
        $(document).foundation({
            reveal: {
                animation: 'fadeAndPop',
                animation_speed: 15,
                close_on_background_click: false,
                dismiss_modal_class: 'close-reveal-modal',
                bg_class: 'reveal-modal-bg',
                root_element: '#slider-news',
                bg: $('.reveal-modal-bg'),
                css: {
                    open: {
                        'opacity': 0,
                        'visibility': 'visible',
                        'display': 'block'
                    },
                    close: {
                        'opacity': 1,
                        'visibility': 'hidden',
                        'display': 'none'
                    }
                }
            },
            equalizer : {
                // Specify if Equalizer should make elements equal height once they become stacked.
                equalize_on_stack: true
            },
            tooltip : {
                disable_for_touch: true
            },
            topbar : {
                scrolltop: false,
                back_text: 	'Wróć'
            }
        });

        /**
         * Custom jQuery
         */
            // Section 3. Działalność
        $(".section__dzialalnosc .xx").hide();
        $(".section__dzialalnosc .news__more").click(function(event) {
            event.preventDefault();
            var that = $(this);
            that.prev().toggle("fast", function() {
                that.parent().toggleClass("selected");
                that.text($(this).is(':visible') ? "Ukryj" : "Czytaj więcej");
            });
        });

        // Section 3. Patroni
        $(".section__patroni .full-desc").hide();
        $(".section__patroni .slide--more").click(function(event) {
            event.preventDefault();
            var that = $(this);
            that.prev().toggle("fast", function() {
                that.parent().toggleClass("selected");
                that.text($(this).is(':visible') ? "Zwiń" : "Czytaj więcej");
            });
        });

        /***************************************************************************************************************
         * SLIDERS
         *
         * @type {*|jQuery|HTMLElement}
         */

        /**
         * Section 4. Aktualności
         */

        //Move navigation outside wrapper with overflow hidden, to make arrows visible
        var sliderNews = $('#slider-news');
        sliderNews.prepend(sliderNews.find('.rsArrow'));

        var sliderStatut = $('#slider-statut');
        sliderStatut.prepend(sliderStatut.find('.rsArrow'));
        nanobar.go(100);


    })($, window);

});
