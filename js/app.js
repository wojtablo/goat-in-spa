// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs



/**
 * Require config
 */
require.config({
    baseUrl: 'js/',
    paths: {
        /* jQuery */
        'jquery': 'jquery.min',

        /* Foundation */
        'foundation.core': 'foundation',
        'foundation.abide': 'foundation.abide',
        'foundation.accordion': 'foundation.accordion',
        'foundation.alert': 'foundation.alert',
        'foundation.clearing': 'foundation.clearing',
        'foundation.dropdown': 'foundation.dropdown',
        'foundation.equalizer': 'foundation.equalizer',
        'foundation.interchange': 'foundation.interchange',
        'foundation.joyride': 'foundation.joyride',
        'foundation.magellan': 'foundation.magellan',
        'foundation.offcanvas': 'foundation.offcanvas',
        'foundation.orbit': 'foundation.orbit',
        'foundation.reveal': 'foundation.reveal',
        'foundation.tab': 'foundation.tab',
        'foundation.tooltip': 'foundation.tooltip',
        'foundation.topbar': 'foundation.topbar',

        /* Vendor Scripts */
        'jquery.cookie': 'jquery.cookie',
        'fastclick': 'fastclick',
        'modernizr': 'modernizr',
        'royalslider': 'jquery.royalslider.min'
    },
    shim: {


        /* Foundation */
        'foundation.core': {
            deps: [
                'jquery',
                'modernizr'
            ],
            exports: 'Foundation'
        },
        'foundation.abide': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.accordion': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.alert': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.clearing': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.dropdown': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.equalizer': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.interchange': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.joyride': {
            deps: [
                'foundation.core',
                'foundation.cookie'
            ]
        },
        'foundation.magellan': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.offcanvas': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.orbit': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.reveal': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.tab': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.tooltip': {
            deps: [
                'foundation.core'
            ]
        },
        'foundation.topbar': {
            deps: [
                'foundation.core'
            ]
        },

        /* Vendor Scripts */
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
        'foundationx': {
            deps: [
                'jquery'
            ]
        },
        'fastclick': {
            exports: 'FastClick'
        },
        'modernizr': {
            exports: 'Modernizr'
        }
    }
});


requirejs(["jquery.min",
    "jquery.cookie",
    "foundation.core",
    "royalslider"], function ($) {

    /**
     * Foundation - app.js:
     */

    (function ($, window, undefined) {

        var $ =jQuery.noConflict();

        var $doc = $(document),
            Modernizr = window.Modernizr;

        $(document).ready(function () {
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
            //$.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
            //$.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
            //$.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
            //$.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
            //$.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
            //$.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
            //$.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
            //$.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
            //$.fn.foundationClearing         ? $doc.foundationClearing() : null;
            //$.fn.placeholder                ? $('input, textarea').placeholder() : null;
        });

        $(".xx").hide();
        $(".news__more").click(function() {
            event.preventDefault();
            var that = $(this);
            that.prev().toggle("fast", function() {
                that.text($(this).is(':visible') ? "Ukryj" : "Czytaj więcej");
            });
        });

// Sliders
        if (Modernizr.mq('only all and (max-width: 920px)')) {

            $('#slider-news').royalSlider({
                autoHeight: true,
                arrowsNav: true,
                fadeinLoadedSlide: false,
                arrowsNavAutoHide: true,
                controlNavigationSpacing: 0,
                controlNavigation: 'bullets',
                imageScaleMode: 'none',
                imageAlignCenter: false,
                loop: true,
                loopRewind: true,
                numImagesToPreload: 6,
                keyboardNavEnabled: true,
                usePreloader: false,
                navigateByClick: false,
                transitionSpeed: 300
            });
        }
        else {
            var si = $('#slider-news').royalSlider({
                addActiveClass: true,
                arrowsNav: true,
                controlNavigation: 'none',
                loop: true,

                imageScaleMode: 'fit',
                imageAlignCenter: true,
                autoScaleSlider: true,
                transitionSpeed: 300,

                fadeinLoadedSlide: false,
                globalCaption: true,
                keyboardNavEnabled: false,
                globalCaptionInside: false,

                visibleNearby: {
                    enabled: true,
                    centerArea: 0.3,
                    center: true,
                    breakpoint: 650,
                    breakpointCenterArea: 0.64,
                    navigateByCenterClick: false
                }
            }).data('royalSlider');
        }


        $('#slider-statut').royalSlider({
            autoHeight: true,
            arrowsNav: true,
            fadeinLoadedSlide: false,
            arrowsNavAutoHide: true,
            controlNavigationSpacing: 0,
            controlNavigation: 'bullets',
            imageScaleMode: 'none',
            imageAlignCenter: false,
            loop: true,
            loopRewind: true,
            numImagesToPreload: 6,
            keyboardNavEnabled: true,
            usePreloader: false,
            navigateByClick: false,
            transitionSpeed: 300
        });


        if (Modernizr.mq('only all and (min-width: 720px)')) {
//        console.log("removed");
//        $( ".__events--slide" ).remove();
        }
        if (Modernizr.mq('only all and (max-width: 720px)')) {
            $('#content-slider-2').royalSlider({
                autoHeight: true,
                arrowsNav: true,
                fadeinLoadedSlide: false,
                arrowsNavAutoHide: true,
                controlNavigationSpacing: 0,
                controlNavigation: 'bullets',
                imageScaleMode: 'none',
                imageAlignCenter: false,
                loop: true,
                loopRewind: true,
                numImagesToPreload: 6,
                keyboardNavEnabled: true,
                usePreloader: false,
                navigateByClick: false,
                transitionSpeed: 300
            });
            $('#slider-dzialalnosc').royalSlider({
                autoHeight: true,
                arrowsNav: true,
                fadeinLoadedSlide: false,
                arrowsNavAutoHide: true,
                controlNavigationSpacing: 0,
                controlNavigation: 'bullets',
                imageScaleMode: 'none',
                imageAlignCenter: false,
                loop: true,
                loopRewind: true,
                numImagesToPreload: 6,
                keyboardNavEnabled: true,
                usePreloader: false,
                navigateByClick: false,
                transitionSpeed: 300
            });

        }


        // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
        // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
        // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
        // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
        // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

        // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
        if (Modernizr.touch && !window.location.hash) {
            $(window).load(function () {
                setTimeout(function () {
                    // At load, if user hasn't scrolled more than 20px or so...
                    if( $(window).scrollTop() < 20 ) {
                        window.scrollTo(0, 1);
                    }
                }, 0);
            });
        }

    })($, window);

});













//WebFont.load({
//    custom: {
//        families: ['MyriadPro-LightCond','MyriadPro-SemiboldCond,OpenSans-Bold,OpenSans-Light,OpenSans-Regular'],
//        urls: ['/fundacja/stylesheets/app.css']
//    },
//    timeout: 5000
//
//});
//




//jQuery(document).ready(function($) {
//
//    $(document).foundation({
//        reveal : {
//            animation_speed: 500
//        },
//        equalizer : {
//            // Specify if Equalizer should make elements equal height once they become stacked.
//            equalize_on_stack: true
//        },
//        tooltip : {
//            disable_for_touch: true
//        },
//        topbar : {
//            scrolltop: false,
//            back_text: 	'Wróć'
//        }
//    });


    // Please note that autoHeight option has some conflicts with options like imageScaleMode, imageAlignCenter and autoScaleSlider
    // it's recommended to disable them when using autoHeight module

    // Using Modernizr and media queries to deactivate Royal Slider on smartphones
//    if (matchMedia('only screen and (min-device-width : 20px) and (max-device-width : 720px)').matches) {
//        // remove class
//        $('#content-slider-2').attr('id', 'NoGallery');
//        $('#NoGallery').removeClass('royalSlider');
//    }
//    else {
//        // add class
//        $('#NoGallery').attr('id', 'slider');
//        $('#content-slider-2').addClass('royalSlider');
//    }
//    $(document).on('open.fndtn.reveal', '[data-reveal]', function () {
//        var modal = $(this);
//
//        $('body').on({
//            'mousewheel': function(e) {
//                if (e.target.id == 'el') return;
//                e.preventDefault();
//                e.stopPropagation();
//            }
//        })
//    });
//
//    $(document).on('close.fndtn.reveal', '[data-reveal]', function () {
//        $('body').on({
//            'mousewheel': function(e) {
//                if (e.target.id == 'el') return;
//                e.preventDefault();
//                e.stopPropagation();
//            }
//        })
//    });


//
//    $('#slider-statut').royalSlider({
//        autoHeight: true,
//        arrowsNav: true,
//        fadeinLoadedSlide: false,
//        arrowsNavAutoHide: true,
//        controlNavigationSpacing: 0,
//        controlNavigation: 'bullets',
//        imageScaleMode: 'none',
//        imageAlignCenter:false,
//        loop: true,
//        loopRewind: true,
//        numImagesToPreload: 6,
//        keyboardNavEnabled: true,
//        usePreloader: false,
//        navigateByClick: false,
//        transitionSpeed:300
//    });
//
//    //var sliderStatut = $('#slider-statut');
//    //sliderStatut.prepend(sliderStatut.find('.rsNav'));
//
//
//
//    if(Modernizr.mq('only all and (min-width: 720px)')){
////        console.log("removed");
////        $( ".__events--slide" ).remove();
//    }
//    if(Modernizr.mq('only all and (max-width: 720px)')){
//        $('#content-slider-2').royalSlider({
//            autoHeight: true,
//            arrowsNav: true,
//            fadeinLoadedSlide: false,
//            arrowsNavAutoHide: true,
//            controlNavigationSpacing: 0,
//            controlNavigation: 'bullets',
//            imageScaleMode: 'none',
//            imageAlignCenter:false,
//            loop: true,
//            loopRewind: true,
//            numImagesToPreload: 6,
//            keyboardNavEnabled: true,
//            usePreloader: false,
//            navigateByClick: false,
//            transitionSpeed:300
//        });
//        $('#slider-dzialalnosc').royalSlider({
//            autoHeight: true,
//            arrowsNav: true,
//            fadeinLoadedSlide: false,
//            arrowsNavAutoHide: true,
//            controlNavigationSpacing: 0,
//            controlNavigation: 'bullets',
//            imageScaleMode: 'none',
//            imageAlignCenter:false,
//            loop: true,
//            loopRewind: true,
//            numImagesToPreload: 6,
//            keyboardNavEnabled: true,
//            usePreloader: false,
//            navigateByClick: false,
//            transitionSpeed:300
//        });
//
//    }
//
//    if(Modernizr.mq('only all and (max-width: 920px)')){
//
//        $('#slider-news').royalSlider({
//            autoHeight: true,
//            arrowsNav: true,
//            fadeinLoadedSlide: false,
//            arrowsNavAutoHide: true,
//            controlNavigationSpacing: 0,
//            controlNavigation: 'bullets',
//            imageScaleMode: 'none',
//            imageAlignCenter:false,
//            loop: true,
//            loopRewind: true,
//            numImagesToPreload: 6,
//            keyboardNavEnabled: true,
//            usePreloader: false,
//            navigateByClick: false,
//            transitionSpeed:300
//        });
//    }
//    else {
//        var si = $('#slider-news').royalSlider({
//            addActiveClass: true,
//            arrowsNav: true,
//            controlNavigation: 'none',
////            autoScaleSlider: true,
////            autoScaleSliderWidth: 800,
////            autoScaleSliderHeight: 350,
//            loop: true,
//
//            imageScaleMode: 'fit',
//            imageAlignCenter: true,
//            autoScaleSlider: true,
//            transitionSpeed:300,
//
//            fadeinLoadedSlide: false,
//            globalCaption: true,
//            keyboardNavEnabled: false,
//            globalCaptionInside: false,
//
//            visibleNearby: {
//                enabled: true,
//                centerArea: 0.3,
//                center: true,
//                breakpoint: 650,
//                breakpointCenterArea: 0.64,
//                navigateByCenterClick: false
//            }
//        }).data('royalSlider');
//
//        // link to fifth slide from slider description.
//        $('.slide4link').click(function(e) {
//            si.goTo(4);
//            return false;
//        });
//
//        $(".rsMainSlideImage").css("margin-top",0);
//    }

//});

//$(window).load( function(){
//    Foundation.utils.image_loaded($('img#logo__footer'), function(){
//        console.log('Image Loaded! :)');
//    });
//    if(Modernizr.mq('only all and (min-width: 720px)')){
//        $('#content-slider-2').removeAttr("id");
//        console.log("Remover Slider ID from section#10");
//    }
//});