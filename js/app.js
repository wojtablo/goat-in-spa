// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs

WebFont.load({
    custom: {
        families: ['MyriadPro-LightCond','MyriadPro-SemiboldCond,OpenSans-Bold,OpenSans-Light,OpenSans-Regular'],
        urls: ['/stylesheets/app.css']
    },
    timeout: 5000

});





jQuery(document).ready(function($) {

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



    $('#slider-statut').royalSlider({
        autoHeight: true,
        arrowsNav: true,
        fadeinLoadedSlide: false,
        arrowsNavAutoHide: true,
        controlNavigationSpacing: 0,
        controlNavigation: 'bullets',
        imageScaleMode: 'none',
        imageAlignCenter:false,
        loop: true,
        loopRewind: true,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        usePreloader: false,
        navigateByClick: false,
        transitionSpeed:300
    });

    //var sliderStatut = $('#slider-statut');
    //sliderStatut.prepend(sliderStatut.find('.rsNav'));



    if(Modernizr.mq('only all and (min-width: 720px)')){
//        console.log("removed");
//        $( ".__events--slide" ).remove();
    }
    if(Modernizr.mq('only all and (max-width: 720px)')){
        $('#content-slider-2').royalSlider({
            autoHeight: true,
            arrowsNav: true,
            fadeinLoadedSlide: false,
            arrowsNavAutoHide: true,
            controlNavigationSpacing: 0,
            controlNavigation: 'bullets',
            imageScaleMode: 'none',
            imageAlignCenter:false,
            loop: true,
            loopRewind: true,
            numImagesToPreload: 6,
            keyboardNavEnabled: true,
            usePreloader: false,
            navigateByClick: false,
            transitionSpeed:300
        });
        $('#slider-dzialalnosc').royalSlider({
            autoHeight: true,
            arrowsNav: true,
            fadeinLoadedSlide: false,
            arrowsNavAutoHide: true,
            controlNavigationSpacing: 0,
            controlNavigation: 'bullets',
            imageScaleMode: 'none',
            imageAlignCenter:false,
            loop: true,
            loopRewind: true,
            numImagesToPreload: 6,
            keyboardNavEnabled: true,
            usePreloader: false,
            navigateByClick: false,
            transitionSpeed:300
        });

    }

    if(Modernizr.mq('only all and (max-width: 920px)')){

        $('#slider-news').royalSlider({
            autoHeight: true,
            arrowsNav: true,
            fadeinLoadedSlide: false,
            arrowsNavAutoHide: true,
            controlNavigationSpacing: 0,
            controlNavigation: 'bullets',
            imageScaleMode: 'none',
            imageAlignCenter:false,
            loop: true,
            loopRewind: true,
            numImagesToPreload: 6,
            keyboardNavEnabled: true,
            usePreloader: false,
            navigateByClick: false,
            transitionSpeed:300
        });
    }
    else {
        var si = $('#slider-news').royalSlider({
            addActiveClass: true,
            arrowsNav: true,
            controlNavigation: 'none',
//            autoScaleSlider: true,
//            autoScaleSliderWidth: 800,
//            autoScaleSliderHeight: 350,
            loop: true,

            imageScaleMode: 'fit',
            imageAlignCenter: true,
            autoScaleSlider: true,
            transitionSpeed:300,

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

        // link to fifth slide from slider description.
        $('.slide4link').click(function(e) {
            si.goTo(4);
            return false;
        });

        $(".rsMainSlideImage").css("margin-top",0);
    }

});

//$(window).load( function(){
//    Foundation.utils.image_loaded($('img#logo__footer'), function(){
//        console.log('Image Loaded! :)');
//    });
//    if(Modernizr.mq('only all and (min-width: 720px)')){
//        $('#content-slider-2').removeAttr("id");
//        console.log("Remover Slider ID from section#10");
//    }
//});