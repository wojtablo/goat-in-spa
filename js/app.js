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
        'webfontload' :  'webfont'
    },
    shim: {
        'foundation.core': {
            deps: [
                'jquery',
                'modernizr',
                'webfont'
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

        /**
         * Web font loader
         */
        WebFont.load({
            custom: {
                families: ['MyriadPro-LightCond','MyriadPro-SemiboldCond,OpenSans-Bold,OpenSans-Light,OpenSans-Regular'],
                urls: ['/stylesheets/app.css']
            },
            timeout: 5000

        });
        /**
         * Royal slider
         */
        $(".rsMainSlideImage").css("margin-top",0);



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
        $(".xx").hide();
        $(".news__more").click(function() {
            event.preventDefault();
            var that = $(this);
            that.prev().toggle("fast", function() {
                that.parent().toggleClass("selected");
                that.text($(this).is(':visible') ? "Ukryj" : "Czytaj więcej");
            });
        });


        // Section 3. Patroni
        $(".full-desc").hide();
        $(".slide--more").click(function() {
            event.preventDefault();
            var that = $(this);
            that.prev().toggle("fast", function() {
                that.parent().toggleClass("selected");
                that.text($(this).is(':visible') ? "Zwiń" : "Czytaj więcej");
            });
        });

        /*************************************************************************************
         * SLIDERS
         *
         * @type {*|jQuery|HTMLElement}
         */

        /**
         * Section 4. Aktualności
         */

        // Move navigation outside wrapper with overflow hidden, to make arrows visible
        var sliderNews = $('#slider-news');
        sliderNews.prepend(sliderNews.find('.rsArrow'));

        var sliderStatut = $('#slider-statut');
        sliderStatut.prepend(sliderStatut.find('.rsArrow'));

    })($, window);

});
