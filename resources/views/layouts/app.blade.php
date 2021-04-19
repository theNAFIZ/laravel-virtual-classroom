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
    <link class="skin" rel="stylesheet" type="text/css" href={{asset("css/color/color-1.css")}}>

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href={{asset("vendors/revolution/css/layers.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("vendors/revolution/css/settings.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("vendors/revolution/css/navigation.css")}}>
    <!-- REVOLUTION SLIDER END -->
</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header class="header rs-nav">
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                            <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
                        </ul>
                    </div>

                    <div class="topbar-right">
                        <ul>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
                    <!-- Header Logo ==== -->
                    <div class="menu-logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
                            data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                <!-- Search Button ==== -->
                                <li class="search-btn">
                                    <button id="quik-search-btn" type="button" class="btn-link"><i
                                                class="fa fa-search"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
                        <span id="search-remove"><i class="ti-close"></i></span>
                    </div>
                    <!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                        <div class="menu-logo">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="javascript:;">Home <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Pages <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;">About<i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="about-1.html">About 1</a></li>
                                            <li><a href="about-2.html">About 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Event<i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="event.html">Event</a></li>
                                            <li><a href="events-details.html">Events Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">FAQ's<i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="faq-1.html">FAQ's 1</a></li>
                                            <li><a href="faq-2.html">FAQ's 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Contact Us<i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="contact-1.html">Contact Us 1</a></li>
                                            <li><a href="contact-2.html">Contact Us 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                    <li><a href="error-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="add-mega-menu"><a href="javascript:;">Our Courses <i
                                            class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu add-menu">
                                    <li class="add-menu-left">
                                        <h5 class="menu-adv-title">Our Courses</h5>
                                        <ul>
                                            <li><a href="courses.html">Courses </a></li>
                                            <li><a href="courses-details.html">Courses Details</a></li>
                                            <li><a href="profile.html">Instructor Profile</a></li>
                                            <li><a href="event.html">Upcoming Event</a></li>
                                            <li><a href="membership.html">Membership</a></li>
                                        </ul>
                                    </li>
                                    <li class="add-menu-right">
                                        <img src="images/adv/adv.jpg" alt=""/>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Blog <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-classic-grid.html">Blog Classic</a></li>
                                    <li><a href="blog-classic-sidebar.html">Blog Classic Sidebar</a></li>
                                    <li><a href="blog-list-sidebar.html">Blog List Sidebar</a></li>
                                    <li><a href="blog-standard-sidebar.html">Blog Standard Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-dashboard"><a href="javascript:;">Dashboard <i
                                            class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="admin/index.html">Dashboard</a></li>
                                    <li><a href="admin/add-listing.html">Add Listing</a></li>
                                    <li><a href="admin/bookmark.html">Bookmark</a></li>
                                    <li><a href="admin/courses.html">Courses</a></li>
                                    <li><a href="admin/review.html">Review</a></li>
                                    <li><a href="admin/teacher-profile.html">Teacher Profile</a></li>
                                    <li><a href="admin/user-profile.html">User Profile</a></li>
                                    <li><a href="javascript:;">Calendar<i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="admin/basic-calendar.html">Basic Calendar</a></li>
                                            <li><a href="admin/list-view-calendar.html">List View Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;">Mailbox<i class="fa fa-angle-right"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="admin/mailbox.html">Mailbox</a></li>
                                            <li><a href="admin/mailbox-compose.html">Compose</a></li>
                                            <li><a href="admin/mailbox-read.html">Mail Read</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="nav-social-link">
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->

    <!-- Content -->
    <div class="page-content bg-white">
        @yield('content')
    </div>
    <!-- Content END-->

    <!-- Footer ==== -->
    <!--
<footer>
    <div class="footer-top">
        <div class="pt-exebar">
            <div class="container">
                <div class="d-flex align-items-stretch">
                    <div class="pt-logo mr-auto">
                        <a href="index.html"><img src="images/logo-white.png" alt=""/></a>
                    </div>
                    <div class="pt-social-link">
                        <ul class="list-inline m-a0">
                            <li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="pt-btn-join">
                        <a href="#" class="btn ">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                    <div class="widget">
                        <h5 class="footer-title">Sign Up For A Newsletter</h5>
                        <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                        <div class="subscribe-form m-b20">
                            <form class="subscription-form" action="http://educhamp.themetrades.com/demo/script/mailchamp.php" method="post">
                                <div class="ajax-message"></div>
                                <div class="input-group">
                                    <input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
                                    <span class="input-group-btn">
                                        <button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Company</h5>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-1.html">About</a></li>
                                    <li><a href="faq-1.html">FAQs</a></li>
                                    <li><a href="contact-1.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Get In Touch</h5>
                                <ul>
                                    <li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
                                    <li><a href="blog-classic-grid.html">Blog</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="event.html">Event</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="widget footer_widget">
                                <h5 class="footer-title">Courses</h5>
                                <ul>
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="courses-details.html">Details</a></li>
                                    <li><a href="membership.html">Membership</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                    <div class="widget widget_gallery gallery-grid-4">
                        <h5 class="footer-title">Our Gallery</h5>
                        <ul class="magnific-image">
                            <li><a href="images/gallery/pic1.jpg" class="magnific-anchor"><img src="images/gallery/pic1.jpg" alt=""></a></li>
                            <li><a href="images/gallery/pic2.jpg" class="magnific-anchor"><img src="images/gallery/pic2.jpg" alt=""></a></li>
                            <li><a href="images/gallery/pic3.jpg" class="magnific-anchor"><img src="images/gallery/pic3.jpg" alt=""></a></li>
                            <li><a href="images/gallery/pic4.jpg" class="magnific-anchor"><img src="images/gallery/pic4.jpg" alt=""></a></li>
                            <li><a href="images/gallery/pic5.jpg" class="magnific-anchor"><img src="images/gallery/pic5.jpg" alt=""></a></li>
                            <li><a href="images/gallery/pic6.jpg" class="magnific-anchor"><img src="images/gallery/pic6.jpg" alt=""></a></li>
                            <li><a href="images/gallery/pic7.jpg" class="magnific-anchor"><img src="images/gallery/pic7.jpg" alt=""></a></li>
                            <li><a href="images/gallery/pic8.jpg" class="magnific-anchor"><img src="images/gallery/pic8.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
            </div>
        </div>
    </div>
</footer>
-->
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
</div>

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
