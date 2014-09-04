// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

jQuery(document).ready(function($) {
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

    $('#content-slider-1').royalSlider({
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