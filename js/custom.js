jQuery(document).ready(function($) {
    "use strict";
    //Bx Sliders
    if ($('.bxslider').length) {
        $('.bxslider').bxSlider({
            pager: false,
            auto: true            
        });
    }
    if ($('.bxslider-2').length) {
        $('.bxslider-2').bxSlider({
            mode: 'fade',
            captions: true,
            auto:true,
            pause: 7000
        });
    }
    if ($('.bxslider-3').length) {
        $('.bxslider-3').bxSlider({
            mode: 'horizontal',
            speed: 1500,
            pause: 7000,
            pager: false,
            auto: true,
            randomStart: true           
        });
    }
    $(".navbar-inner ul >li").hover(
        function() {
            $(this).addClass('open');
        },
        function() {
            $(this).removeClass('open');
        }
    );
    if ($('.featured-dishes-slider').length) {
        $('.featured-dishes-slider').bxSlider({
			slideWidth: 300,
            minSlides: 1,
            maxSlides: 3,
            slideMargin: 0
        });
    }
    if ($('.gallery_fun').length) {
        $(".gallery_fun:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'slow',
            slideshow: 10000,
            autoplay_slideshow: true
        });
        $(".gallery_fun:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'slow',
            slideshow: 20000,
            hideflash: true
        });
    }
    //Scroll Script
    if ($('.scroll').length) {
        $(".scroll").mCustomScrollbar({
            set_width: false,
            /*optional element width: boolean, pixels, percentage*/
            set_height: false,
            /*optional element height: boolean, pixels, percentage*/
            horizontalScroll: false,
            /*scroll horizontally: boolean*/
            scrollInertia: 950,
            /*scrolling inertia: integer (milliseconds)*/
            mouseWheel: true,
            /*mousewheel support: boolean*/
            mouseWheelPixels: "auto",
            /*mousewheel pixels amount: integer, "auto"*/
            autoDraggerLength: true,
            /*auto-adjust scrollbar dragger length: boolean*/
            autoHideScrollbar: false,
            /*auto-hide scrollbar when idle*/
            scrollButtons: { /*scroll buttons*/
                enable: false,
                /*scroll buttons support: boolean*/
                scrollType: "continuous",
                /*scroll buttons scrolling type: "continuous", "pixels"*/
                scrollSpeed: "auto",
                /*scroll buttons continuous scrolling speed: integer, "auto"*/
                scrollAmount: 40 /*scroll buttons pixels scroll amount: integer (pixels)*/
            },
            advanced: {
                updateOnBrowserResize: true,
                /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
                updateOnContentResize: false,
                /*auto-update scrollbars on content resize (for dynamic content): boolean*/
                autoExpandHorizontalScroll: false,
                /*auto-expand width for horizontal scrolling: boolean*/
                autoScrollOnFocus: true,
                /*auto-scroll on focused elements: boolean*/
                normalizeMouseWheelDelta: false /*normalize mouse-wheel delta (-1/1)*/
            },
            contentTouchScroll: true,
            /*scrolling by touch-swipe content: boolean*/
            callbacks: {
                onScrollStart: function() {},
                /*user custom callback function on scroll start event*/
                onScroll: function() {},
                /*user custom callback function on scroll event*/
                onTotalScroll: function() {},
                /*user custom callback function on scroll end reached event*/
                onTotalScrollBack: function() {},
                /*user custom callback function on scroll begin reached event*/
                onTotalScrollOffset: 0,
                /*scroll end reached offset: integer (pixels)*/
                onTotalScrollBackOffset: 0,
                /*scroll begin reached offset: integer (pixels)*/
                whileScrolling: function() {} /*user custom callback function on scrolling event*/
            },
            theme: "light" /*"light", "dark", "light-2", "dark-2", "light-thick", "dark-thick", "light-thin", "dark-thin"*/
        });
    }
    if ($('#mycarousel').length) {
        $('#mycarousel').jcarousel({
        auto: 4,
        wrap: 'both',
        scroll: 1       
        })
        ;
    }
    if ($('#myTab').length) {
        $('#myTab a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
    }
    if ($('.accordion-body').length) {
        $('.accordion-body').on('show',
            function(e) {
                $(e.currentTarget).parent().find('.accordion-heading').addClass('active')
            }
        )
        $('.accordion-body').on('hide',
            function(e) {
                $(e.currentTarget).parent().find('.accordion-heading').removeClass('active')
            }
        )
    }
});