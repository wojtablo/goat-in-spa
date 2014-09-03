// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

jQuery(document).ready(function($) {
    // Please note that autoHeight option has some conflicts with options like imageScaleMode, imageAlignCenter and autoScaleSlider
    // it's recommended to disable them when using autoHeight module
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
});

$(window).load( function(){
    var $imgs = $("#globalContainer");

    $imgs.each( function(){
        var cW = $(this).parent().width();
        var cH = $(this).parent().height();
        var w = $(this)[0].clientWidth; //I want the CURRENT width, not original!!
        var h = $(this)[0].clientHeight; //I want the CURRENT height, not original!!
        var dW = w - cW;
        var dH = h - cH;

        console.log( cW + " " + cH + " " + w + " " + h + " " + dW + " " + dH );

        if ( w > h ){
            $(this).addClass("wide");
            $(this).css("left",  -dW/2);
        }
        else if ( w < h ){
            $(this).addClass("tall");
            $(this).css("top",  -dH/2);
        }
        else { $(this).addClass("square"); }
        var w = $(this).width(); //I want the CURRENT width, not original!!
        var h = $(this).height(); //I want the CURRENT height, not original!!
        console.log( w + " " + h );

    });
});