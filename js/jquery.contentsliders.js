
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
