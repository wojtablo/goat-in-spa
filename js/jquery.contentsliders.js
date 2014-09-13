$('#slider-statut').royalSlider({
    autoHeight: true,
    arrowsNav: true,
    fadeinLoadedSlide: false,
    arrowsNavAutoHide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    imageScaleMode: 'none',
    imageAlignCenter: false,
    loop: false,
    loopRewind: false,
    numImagesToPreload: 2,
    keyboardNavEnabled: false,
    usePreloader: false,
    navigateByClick: false,
    transitionSpeed: 300
});



if (Modernizr.mq('only all and (max-width: 720px)')) {
    $('#slider-news').royalSlider({
        autoHeight: true,
        arrowsNav: false,
        fadeinLoadedSlide: true,
        arrowsNavAutoHide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'bullets',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        loop: false,
        loopRewind: false,
        numImagesToPreload: 2,
        keyboardNavEnabled: true,
        usePreloader: true,
        navigateByClick: false,
        transitionSpeed: 200
    });
    $('#content-slider-2').royalSlider({
        autoHeight: true,
        arrowsNav: false,
        fadeinLoadedSlide: true,
        arrowsNavAutoHide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'bullets',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        loop: false,
        loopRewind: false,
        numImagesToPreload: 2,
        keyboardNavEnabled: true,
        usePreloader: true,
        navigateByClick: false,
        transitionSpeed: 200
    });
    $('#slider-dzialalnosc').royalSlider({
        autoHeight: true,
        arrowsNav: false,
        fadeinLoadedSlide: true,
        arrowsNavAutoHide: false,
        controlNavigationSpacing: 0,
        controlNavigation: 'bullets',
        imageScaleMode: 'none',
        imageAlignCenter: false,
        loop: false,
        loopRewind: false,
        numImagesToPreload: 2,
        keyboardNavEnabled: true,
        usePreloader: true,
        navigateByClick: false,
        transitionSpeed: 200
    });

}
else {
    var si = $('#slider-news').royalSlider({
        addActiveClass: true,
        arrowsNav: true,
        controlNavigation: 'bullets',
        arrowsNavAutoHide: false,
        loop: true,
        imageScaleMode: 'fit-if-smaller',
        imageAlignCenter: false,
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
