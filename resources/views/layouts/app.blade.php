<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>

    <!-- DESCRIPTION -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="EduChamp : Education HTML Template"/>

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template"/>
    <meta property="og:description" content="EduChamp : Education HTML Template"/>
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href={{asset("images/favicon.ico")}} type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href={{asset("images/favicon.png")}}/>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
    <script src={{asset("js/html5shiv.min.js")}}></script>
    <script src={{asset("js/respond.min.js")}}></script>
    <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href={{asset("css/assets.css")}}>

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href={{asset("css/typography.css")}}>

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href={{asset("css/shortcodes/shortcodes.css")}}>

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href={{asset("css/style.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/dashboard.css")}}>
    <link class="skin" rel="stylesheet" type="text/css" href={{asset("css/color/color-1.css")}}>

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href={{asset("vendors/revolution/css/layers.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("vendors/revolution/css/settings.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("vendors/revolution/css/navigation.css")}}>
    <!-- REVOLUTION SLIDER END -->
</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">
<div id="loading-icon-bx"></div>
<!-- Content -->
@yield('content')

<!-- External JavaScripts -->
<script src={{asset("js/jquery.min.js")}}></script>
<script src={{asset("vendors/bootstrap/js/popper.min.js")}}></script>
<script src={{asset("vendors/bootstrap/js/bootstrap.min.js")}}></script>
<script src={{asset("vendors/bootstrap-select/bootstrap-select.min.js")}}></script>
<script src={{asset("vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js")}}></script>
<script src={{asset("vendors/magnific-popup/magnific-popup.js")}}></script>
<script src={{asset("vendors/counter/waypoints-min.js")}}></script>
<script src={{asset("vendors/counter/counterup.min.js")}}></script>
<script src={{asset("vendors/imagesloaded/imagesloaded.js")}}></script>
<script src={{asset("vendors/masonry/masonry.js")}}></script>
<script src={{asset("vendors/masonry/filter.js")}}></script>
<script src={{asset("vendors/owl-carousel/owl.carousel.js")}}></script>
<script src={{asset("js/functions.js")}}></script>
<script src={{asset("js/contact.js")}}></script>
<script src={{asset('vendors/switcher/switcher.js')}}></script>
<!-- Revolution JavaScripts Files -->
<script src={{asset("vendors/revolution/js/jquery.themepunch.tools.min.js")}}></script>
<script src={{asset("vendors/revolution/js/jquery.themepunch.revolution.min.js")}}></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.actions.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.carousel.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.kenburn.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.migration.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.navigation.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.parallax.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.slideanims.min.js")}}></script>
<script src={{asset("vendors/revolution/js/extensions/revolution.extension.video.min.js")}}></script>
<script>
    jQuery(document).ready(function () {
        var ttrevapi;
        var tpj = jQuery;
        if (tpj("#rev_slider_486_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_486_1");
        } else {
            ttrevapi = tpj("#rev_slider_486_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "vendors/revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    },

                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [768, 600, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>
</body>

</html>
