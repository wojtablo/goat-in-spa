// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

jQuery(document).ready(function($) {
    // Please note that autoHeight option has some conflicts with options like imageScaleMode, imageAlignCenter and autoScaleSlider
    // it's recommended to disable them when using autoHeight module
    $('#content-slider-1').royalSlider({
        autoHeight: true,
        arrowsNav: true,
        fadeinLoadedSlide: true,
        arrowsNavAutoHide: true,
        controlNavigationSpacing: 0,
        controlNavigation: 'bullets',
        imageScaleMode: 'none',
        imageAlignCenter:false,
        loop: true,
        loopRewind: true,
        numImagesToPreload: 6,
        keyboardNavEnabled: true,
        usePreloader: false
    });
});
