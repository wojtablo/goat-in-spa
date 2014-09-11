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
        'handlebars' : 'handlebars.min'
    },
    shim: {
        'foundation.core': {
            deps: [
                'jquery',
                'modernizr',
                'webfont',
                'handlebars'
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

requirejs([ "handlebars",
    "jquery.min",
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
            reveal : {
                animation_speed: 500
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

    })($, window);

});
