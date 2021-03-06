<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset("front/assets/css/fontawesome.css") }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("front/assets/css/slick.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("front/assets/css/slick-theme.css") }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset("front/assets/css/animate.css") }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset("front/assets/css/themify-icons.css") }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("front/assets/css/bootstrap.css") }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("front/assets/css/color1.css") }}" media="screen" id="color">


    <style type="text/css">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }

        .fb_dialog_content {
            background: #fff;
            color: #373737
        }

        .fb_dialog_close_icon {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title>span {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }

        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #043b87;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_mpn_mobile_landing_page_slide_in {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_in;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_out {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_in {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_in;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_out;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2_mobile_chat_started {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2_mobile_chat_started;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2_mobile_chat_started {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2_mobile_chat_started;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bubble_pop_in {
            animation-duration: 250ms;
            animation-name: fb_customer_chat_bubble_bounce_in_animation
        }

        .fb_customer_chat_bubble_animated_no_badge {
            box-shadow: 0 3px 12px rgba(0, 0, 0, .15);
            transition: box-shadow 150ms linear
        }

        .fb_customer_chat_bubble_animated_no_badge:hover {
            box-shadow: 0 5px 24px rgba(0, 0, 0, .3)
        }

        .fb_customer_chat_bubble_animated_with_badge {
            box-shadow: -5px 4px 14px rgba(0, 0, 0, .15);
            transition: box-shadow 150ms linear
        }

        .fb_customer_chat_bubble_animated_with_badge:hover {
            box-shadow: -5px 8px 24px rgba(0, 0, 0, .2)
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        .fb_mobile_overlay_active {
            background-color: #fff;
            height: 100%;
            overflow: hidden;
            position: fixed;
            visibility: hidden;
            width: 100%
        }

        .fb_new_ui_mobile_overlay_active {
            overflow: hidden
        }

        @keyframes fb_mpn_landing_page_slide_in {
            0% {
                border-radius: 50%;
                margin: 0 24px;
                width: 60px
            }

            40% {
                border-radius: 18px
            }

            100% {
                margin: 0 12px;
                width: 100% - 24px
            }
        }

        @keyframes fb_mpn_landing_page_slide_out {
            0% {
                margin: 0 12px;
                transform: scale(1);
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                margin: 0 24px;
                transform: scale(1.2);
                width: 60px
            }
        }

        @keyframes fb_mpn_bounce_in {
            0% {
                opacity: .5;
                top: 100%
            }

            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_mpn_bounce_out {
            0% {
                opacity: 1;
                top: 0
            }

            100% {
                opacity: .5;
                top: 100%
            }
        }

        @keyframes fb_bounce_in_v2 {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom right
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_in_v2_mobile_chat_started {
            0% {
                opacity: 0;
                top: 20px
            }

            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_bounce_out_v2 {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_out_v2_mobile_chat_started {
            0% {
                opacity: 1;
                top: 0
            }

            100% {
                opacity: 0;
                top: 20px
            }
        }

        @keyframes fb_customer_chat_bubble_bounce_in_animation {
            0% {
                bottom: 6pt;
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: center
            }

            70% {
                bottom: 18pt;
                opacity: 1;
                transform: scale(1.2, 1.2)
            }

            100% {
                transform: scale(1, 1)
            }
        }

    </style>
</head>

<body data-gr-c-s-loaded="true" class="" cz-shortcut-listen="true" style="padding-right: 17px; overflow: auto;">


    <!-- loader start -->
    <div class="loader_skeleton" style="display: none;">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="javascript:void(0)">
                                        <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="index.html"><img src="assets/images/icon/logo.png" class="img-fluid blur-up lazyloaded" alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                            </li>
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">shop</a>
                                            </li>
                                            <li>
                                                <a href="#">product</a>
                                            </li>
                                            <li class="mega"><a href="#">features
                                                    <div class="lable-nav">new</div>
                                                </a>
                                            </li>
                                            <li><a href="#">pages</a>
                                            </li>
                                            <li>
                                                <a href="#">blog</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav d-none d-sm-block">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-setting">
                                                <div><img src="assets/images/icon/setting.png" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-settings"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-cart">
                                                <div><img src="assets/images/icon/cart.png" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-shopping-cart"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="home-slider">
            <div class="home"></div>
        </div>
        <section class="collection-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="no-slider row">
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                                <ul class="onhover-show-div">
                                    <li><a href="#" data-lng="en">Login</a></li>
                                    <li><a href="#" data-lng="es">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical" data-smartmenus-id="1594566493228829">
                                            <li> <a href="#" class="has-submenu" id="sm-1594566493228829-1" aria-haspopup="true" aria-controls="sm-1594566493228829-2" aria-expanded="false">clothing<span class="sub-arrow"></span></a>
                                                <ul class="mega-menu clothing-menu" id="sm-1594566493228829-2" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-1" aria-expanded="false">
                                                    <li>
                                                        <div class="row m-0">
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>women's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">dresses</a></li>
                                                                        <li><a href="#">skirts</a></li>
                                                                        <li><a href="#">westarn wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                        <li><a href="#">sport wear</a></li>
                                                                    </ul>
                                                                    <h5>men's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">sports wear</a></li>
                                                                        <li><a href="#">western wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>accessories</h5>
                                                                    <ul>
                                                                        <li><a href="#">fashion jewellery</a></li>
                                                                        <li><a href="#">caps and hats</a></li>
                                                                        <li><a href="#">precious jewellery</a></li>
                                                                        <li><a href="#">necklaces</a></li>
                                                                        <li><a href="#">earrings</a></li>
                                                                        <li><a href="#">wrist wear</a></li>
                                                                        <li><a href="#">ties</a></li>
                                                                        <li><a href="#">cufflinks</a></li>
                                                                        <li><a href="#">pockets squares</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="#" class="mega-menu-banner"><img src="assets/images/mega-menu/fashion.jpg" alt="" class="img-fluid blur-up lazyload"></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#" class="has-submenu" id="sm-1594566493228829-3" aria-haspopup="true" aria-controls="sm-1594566493228829-4" aria-expanded="false">bags<span class="sub-arrow"></span></a>
                                                <ul id="sm-1594566493228829-4" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-3" aria-expanded="false">
                                                    <li><a href="#">shopper bags</a></li>
                                                    <li><a href="#">laptop bags</a></li>
                                                    <li><a href="#">clutches</a></li>
                                                    <li> <a href="#" class="has-submenu" id="sm-1594566493228829-5" aria-haspopup="true" aria-controls="sm-1594566493228829-6" aria-expanded="false">purses<span class="sub-arrow"></span></a>
                                                        <ul id="sm-1594566493228829-6" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-5" aria-expanded="false">
                                                            <li><a href="#">purses</a></li>
                                                            <li><a href="#">wallets</a></li>
                                                            <li><a href="#">leathers</a></li>
                                                            <li><a href="#">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#" class="has-submenu" id="sm-1594566493228829-7" aria-haspopup="true" aria-controls="sm-1594566493228829-8" aria-expanded="false">footwear<span class="sub-arrow"></span></a>
                                                <ul id="sm-1594566493228829-8" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-7" aria-expanded="false">
                                                    <li><a href="#">sport shoes</a></li>
                                                    <li><a href="#">formal shoes</a></li>
                                                    <li><a href="#">casual shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">watches</a></li>
                                            <li> <a href="#" class="has-submenu" id="sm-1594566493228829-9" aria-haspopup="true" aria-controls="sm-1594566493228829-10" aria-expanded="false">Accessories<span class="sub-arrow"></span></a>
                                                <ul id="sm-1594566493228829-10" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-9" aria-expanded="false">
                                                    <li><a href="#">fashion jewellery</a></li>
                                                    <li><a href="#">caps and hats</a></li>
                                                    <li><a href="#">precious jewellery</a></li>
                                                    <li> <a href="#" class="has-submenu" id="sm-1594566493228829-11" aria-haspopup="true" aria-controls="sm-1594566493228829-12" aria-expanded="false">more..<span class="sub-arrow"></span></a>
                                                        <ul id="sm-1594566493228829-12" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-11" aria-expanded="false">
                                                            <li><a href="#">necklaces</a></li>
                                                            <li><a href="#">earrings</a></li>
                                                            <li><a href="#">wrist wear</a></li>
                                                            <li> <a href="#" class="has-submenu" id="sm-1594566493228829-13" aria-haspopup="true" aria-controls="sm-1594566493228829-14" aria-expanded="false">accessories<span class="sub-arrow"></span></a>
                                                                <ul id="sm-1594566493228829-14" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-13" aria-expanded="false">
                                                                    <li><a href="#">ties</a></li>
                                                                    <li><a href="#">cufflinks</a></li>
                                                                    <li><a href="#">pockets squares</a></li>
                                                                    <li><a href="#">helmets</a></li>
                                                                    <li><a href="#">scarves</a></li>
                                                                    <li> <a href="#" class="has-submenu" id="sm-1594566493228829-15" aria-haspopup="true" aria-controls="sm-1594566493228829-16" aria-expanded="false">more...<span class="sub-arrow"></span></a>
                                                                        <ul id="sm-1594566493228829-16" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-15" aria-expanded="false">
                                                                            <li><a href="#">accessory gift sets</a></li>
                                                                            <li><a href="#">travel accessories</a></li>
                                                                            <li><a href="#">phone cases</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">belts &amp; more</a></li>
                                                            <li><a href="#">wearable</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">house of design</a></li>
                                            <li> <a href="#" class="has-submenu" id="sm-1594566493228829-17" aria-haspopup="true" aria-controls="sm-1594566493228829-18" aria-expanded="false">beauty &amp; personal care<span class="sub-arrow"></span></a>
                                                <ul id="sm-1594566493228829-18" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-17" aria-expanded="false">
                                                    <li><a href="#">makeup</a></li>
                                                    <li><a href="#">skincare</a></li>
                                                    <li><a href="#">premium beaty</a></li>
                                                    <li> <a href="#" class="has-submenu" id="sm-1594566493228829-19" aria-haspopup="true" aria-controls="sm-1594566493228829-20" aria-expanded="false">more<span class="sub-arrow"></span></a>
                                                        <ul id="sm-1594566493228829-20" role="group" aria-hidden="true" aria-labelledby="sm-1594566493228829-19" aria-expanded="false">
                                                            <li><a href="#">fragrances</a></li>
                                                            <li><a href="#">luxury beauty</a></li>
                                                            <li><a href="#">hair care</a></li>
                                                            <li><a href="#">tools &amp; brushes</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">home &amp; decor</a></li>
                                            <li><a href="#">kitchen</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo">
                                <a href="index.html"><img src="assets/images/icon/logo.png" class="img-fluid blur-up lazyloaded" alt=""></a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal" data-smartmenus-id="15945664932108323">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                        </li>
                                        <li>
                                            <a href="#" class="has-submenu" id="sm-15945664932108323-1" aria-haspopup="true" aria-controls="sm-15945664932108323-2" aria-expanded="false">Home<span class="sub-arrow"></span></a>
                                            <ul id="sm-15945664932108323-2" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-1" aria-expanded="false">
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-3" aria-haspopup="true" aria-controls="sm-15945664932108323-4" aria-expanded="false">new demos <span class="new-tag">new</span><span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-4" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-3" aria-expanded="false">
                                                        <li><a target="_blank" href="tools.html">tools</a></li>
                                                        <li><a target="_blank" href="marketplace-demo.html">marketplace</a></li>
                                                        <li><a target="_blank" href="game.html">game</a></li>
                                                        <li><a target="_blank" href="gym-product.html">gym</a></li>
                                                        <li><a target="_blank" href="marijuana.html">marijuana</a></li>
                                                        <li><a target="_blank" href="left_sidebar-demo.html">left
                                                                sidebar</a></li>
                                                        <li><a target="_blank" href="jewellery.html">jewellery</a></li>
                                                        <li><a target="_blank" href="pets.html">pets</a></li>
                                                        <li><a target="_blank" href="metro.html">metro</a></li>
                                                        <li><a target="_blank" href="video-slider.html">video slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-5" aria-haspopup="true" aria-controls="sm-15945664932108323-6" aria-expanded="false">clothing<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-6" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-5" aria-expanded="false">
                                                        <li><a target="_blank" href="index.html">fashion 1</a></li>
                                                        <li><a target="_blank" href="fashion-2.html">fashion 2</a></li>
                                                        <li><a target="_blank" href="fashion-3.html">fashion 3</a></li>
                                                        <li><a target="_blank" href="kids.html">kids</a></li>
                                                    </ul>
                                                </li>
                                                <li><a target="_blank" href="watch.html">watch</a></li>
                                                <li><a target="_blank" href="shoes.html">shoes</a></li>
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-7" aria-haspopup="true" aria-controls="sm-15945664932108323-8" aria-expanded="false">electronics<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-8" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-7" aria-expanded="false">
                                                        <li><a target="_blank" href="electronic-1.html">electronic 1</a>
                                                        </li>
                                                        <li><a target="_blank" href="electronic-2.html">electronic 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a target="_blank" href="bags.html">bags</a></li>
                                                <li><a target="_blank" href="nursery.html">nursery</a></li>
                                                <li><a target="_blank" href="flower.html">flower</a></li>
                                                <li><a target="_blank" href="vegetables.html">vegetable</a></li>
                                                <li><a target="_blank" href="beauty.html">beauty</a></li>
                                                <li><a target="_blank" href="light.html">light</a></li>
                                                <li><a target="_blank" href="furniture.html">furniture</a></li>
                                                <li><a target="_blank" href="goggles.html">googles</a></li>
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-9" aria-haspopup="true" aria-controls="sm-15945664932108323-10" aria-expanded="false">basics<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-10" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-9" aria-expanded="false">
                                                        <li><a target="_blank" href="lookbook-demo.html">lookbook</a>
                                                        </li>
                                                        <li><a target="_blank" href="instagram-shop.html">instagram</a>
                                                        </li>
                                                        <li><a target="_blank" href="video.html">video</a></li>
                                                        <li><a target="_blank" href="parallax.html">parallax</a></li>
                                                        <li><a target="_blank" href="full-page.html">full page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="has-submenu" id="sm-15945664932108323-11" aria-haspopup="true" aria-controls="sm-15945664932108323-12" aria-expanded="false">shop<span class="sub-arrow"></span></a>
                                            <ul id="sm-15945664932108323-12" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-11" aria-expanded="false">
                                                <li><a href="category-page.html">left sidebar</a></li>
                                                <li><a href="category-page(right).html">right sidebar</a></li>
                                                <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="category-page(sidebar-popup).html">sidebar popup</a></li>
                                                <li><a href="category-page(metro).html">metro <span class="new-tag">new</span></a></li>
                                                <li><a href="category-page(full-width).html">full width <span class="new-tag">new</span></a></li>
                                                <li><a href="category-page(infinite-scroll).html">infinite scroll</a>
                                                </li>
                                                <li><a href="category-page(3-grid).html">3 grid</a></li>
                                                <li><a href="category-page(6-grid).html">6 grid</a></li>
                                                <li><a href="category-page(list-view).html">list view</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="has-submenu" id="sm-15945664932108323-13" aria-haspopup="true" aria-controls="sm-15945664932108323-14" aria-expanded="false">product<span class="sub-arrow"></span></a>
                                            <ul id="sm-15945664932108323-14" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-13" aria-expanded="false">
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-15" aria-haspopup="true" aria-controls="sm-15945664932108323-16" aria-expanded="false">sidebar<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-16" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-15" aria-expanded="false">
                                                        <li><a href="product-page.html">left sidebar</a></li>
                                                        <li><a href="product-page(right-sidebar).html">right sidebar</a>
                                                        </li>
                                                        <li><a href="product-page(no-sidebar).html">no sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-17" aria-haspopup="true" aria-controls="sm-15945664932108323-18" aria-expanded="false">thumbnail image<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-18" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-17" aria-expanded="false">
                                                        <li><a href="product-page(left-image).html">left image</a></li>
                                                        <li><a href="product-page(right-image).html">right image</a>
                                                        </li>
                                                        <li><a href="product-page(image-outside).html">image outside
                                                                <span class="new-tag">new</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-19" aria-haspopup="true" aria-controls="sm-15945664932108323-20" aria-expanded="false">3 column<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-20" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-19" aria-expanded="false">
                                                        <li><a href="product-page(3-col-left).html">thumbnail left</a>
                                                        </li>
                                                        <li><a href="product-page(3-col-right).html">thumbnail right</a>
                                                        </li>
                                                        <li><a href="product-page(3-column).html">thubnail bottom</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="product-page(4-image).html">4 image <span class="new-tag">new</span></a></li>
                                                <li><a href="product-page(sticky).html">sticky</a></li>
                                                <li><a href="product-page(accordian).html">accordian</a></li>
                                                <li><a href="product-page(bundle).html">bundle<span class="new-tag">new</span></a></li>
                                                <li><a href="product-page(image-swatch).html">image swatch <span class="new-tag">new</span></a></li>
                                                <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega" id="hover-cls"><a href="#" class="has-submenu" id="sm-15945664932108323-21" aria-haspopup="true" aria-controls="sm-15945664932108323-22" aria-expanded="false">features
                                                <div class="lable-nav">new</div>
                                                <span class="sub-arrow"></span></a>
                                            <ul class="mega-menu full-mega-menu" id="sm-15945664932108323-22" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-21" aria-expanded="false">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>portfolio</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="grid-2-col.html">portfolio grid
                                                                                    2</a></li>
                                                                            <li><a href="grid-3-col.html">portfolio grid
                                                                                    3</a></li>
                                                                            <li><a href="grid-4-col.html">portfolio grid
                                                                                    4</a></li>
                                                                            <li><a href="masonary-2-grid.html">mesonary
                                                                                    grid 2</a></li>
                                                                            <li><a href="masonary-3-grid.html">mesonary
                                                                                    grid 3</a></li>
                                                                            <li><a href="masonary-4-grid.html">mesonary
                                                                                    grid 4</a></li>
                                                                            <li><a href="masonary-fullwidth.html">mesonary
                                                                                    full width</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="nursery.html">cart modal
                                                                                    popup</a></li>
                                                                            <li><a href="vegetables.html">qty. counter
                                                                                    <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                            <li><a href="bags.html">cart top</a></li>
                                                                            <li><a href="shoes.html">cart bottom</a>
                                                                            </li>
                                                                            <li><a href="watch.html">cart left</a></li>
                                                                            <li><a href="tools.html">cart right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>theme elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="element-title.html">title</a>
                                                                            </li>
                                                                            <li><a href="element-banner.html">collection
                                                                                    banner</a></li>
                                                                            <li><a href="element-slider.html">home
                                                                                    slider</a></li>
                                                                            <li><a href="element-category.html">category</a>
                                                                            </li>
                                                                            <li><a href="element-service.html">service</a>
                                                                            </li>
                                                                            <li><a href="element-image-ratio.html">image
                                                                                    size ratio <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>product elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li class="up-text"><a href="element-productbox.html">product
                                                                                    box<span>10+</span></a></li>
                                                                            <li><a href="element-product-slider.html">product
                                                                                    slider</a></li>
                                                                            <li><a href="element-no_slider.html">no
                                                                                    slider</a></li>
                                                                            <li><a href="element-mulitiple_slider.html">multi
                                                                                    slider</a></li>
                                                                            <li><a href="element-tab.html">tab</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template </h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="email-order-success.html">order
                                                                                    success</a></li>
                                                                            <li><a href="email-order-success-two.html">order
                                                                                    success 2</a></li>
                                                                            <li><a href="email-template.html">email
                                                                                    template</a></li>
                                                                            <li><a href="email-template-two.html">email
                                                                                    template 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="has-submenu" id="sm-15945664932108323-23" aria-haspopup="true" aria-controls="sm-15945664932108323-24" aria-expanded="false">pages<span class="sub-arrow"></span></a>
                                            <ul id="sm-15945664932108323-24" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-23" aria-expanded="false">
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-25" aria-haspopup="true" aria-controls="sm-15945664932108323-26" aria-expanded="false">vendor <span class="new-tag">new</span><span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-26" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-25" aria-expanded="false">
                                                        <li><a href="vendor-dashboard.html">vendor dashboard</a></li>
                                                        <li><a href="vendor-profile.html">vendor profile</a></li>
                                                        <li><a href="become-vendor.html">become vendor</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-27" aria-haspopup="true" aria-controls="sm-15945664932108323-28" aria-expanded="false">account<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-28" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-27" aria-expanded="false">
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="forget_pwd.html">forget password</a></li>
                                                        <li><a href="profile.html">profile <span class="new-tag">new</span></a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-page.html">about us</a></li>
                                                <li><a href="search.html">search</a></li>
                                                <li><a href="typography.html">typography <span class="new-tag">new</span></a></li>
                                                <li><a href="review.html">review <span class="new-tag">new</span></a>
                                                </li>
                                                <li><a href="order-success.html">order success</a></li>
                                                <li>
                                                    <a href="#" class="has-submenu" id="sm-15945664932108323-29" aria-haspopup="true" aria-controls="sm-15945664932108323-30" aria-expanded="false">compare<span class="sub-arrow"></span></a>
                                                    <ul id="sm-15945664932108323-30" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-29" aria-expanded="false">
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="compare-2.html">compare-2 <span class="new-tag">new</span></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="collection.html">collection</a></li>
                                                <li><a href="lookbook.html">lookbook</a></li>
                                                <li><a href="sitemap.html">site map <span class="new-tag">new</span></a>
                                                </li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="coming-soon.html">coming soon <span class="new-tag">new</span></a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="has-submenu" id="sm-15945664932108323-31" aria-haspopup="true" aria-controls="sm-15945664932108323-32" aria-expanded="false">blog<span class="sub-arrow"></span></a>
                                            <ul id="sm-15945664932108323-32" role="group" aria-hidden="true" aria-labelledby="sm-15945664932108323-31" aria-expanded="false">
                                                <li><a href="blog-page.html">left sidebar</a></li>
                                                <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="assets/images/icon/setting.png" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-settings"></i></div>
                                            <div class="show-div setting">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#">english</a></li>
                                                    <li><a href="#">french</a></li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#">euro</a></li>
                                                    <li><a href="#">rupees</a></li>
                                                    <li><a href="#">pound</a></li>
                                                    <li><a href="#">doller</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="assets/images/icon/cart.png" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-shopping-cart"></i></div>
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="mr-3" src="assets/images/fashion/product/1.jpg"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="mr-3" src="assets/images/fashion/product/2.jpg"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons"><a href="cart.html" class="view-cart">view
                                                            cart</a> <a href="#" class="checkout">checkout</a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 7830px; transform: translate3d(-1566px, 0px, 0px);">
                    <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 1566px;">
                        <div>
                            <div style="width: 100%; display: inline-block;">
                                <div class="home text-center bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/home-banner/2.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                    <img src="assets/images/home-banner/2.jpg" alt="" class="bg-img blur-up lazyload" style="display: none;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="slider-contain">
                                                    <div>
                                                        <h4>welcome to fashion</h4>
                                                        <h1>women fashion</h1>
                                                        <a href="#" class="btn btn-solid" tabindex="-1">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1566px;">
                        <div>
                            <div style="width: 100%; display: inline-block;">
                                <div class="home text-center bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/home-banner/1.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                    <img src="assets/images/home-banner/1.jpg" alt="" class="bg-img blur-up lazyload" style="display: none;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="slider-contain">
                                                    <div>
                                                        <h4>welcome to fashion</h4>
                                                        <h1>men fashion</h1>
                                                        <a href="#" class="btn btn-solid" tabindex="0">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 1566px;">
                        <div>
                            <div style="width: 100%; display: inline-block;">
                                <div class="home text-center bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/home-banner/2.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                    <img src="assets/images/home-banner/2.jpg" alt="" class="bg-img blur-up lazyload" style="display: none;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="slider-contain">
                                                    <div>
                                                        <h4>welcome to fashion</h4>
                                                        <h1>women fashion</h1>
                                                        <a href="#" class="btn btn-solid" tabindex="-1">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 1566px;">
                        <div>
                            <div style="width: 100%; display: inline-block;">
                                <div class="home text-center bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/home-banner/1.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                    <img src="assets/images/home-banner/1.jpg" alt="" class="bg-img blur-up lazyload" style="display: none;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="slider-contain">
                                                    <div>
                                                        <h4>welcome to fashion</h4>
                                                        <h1>men fashion</h1>
                                                        <a href="#" class="btn btn-solid" tabindex="-1">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 1566px;">
                        <div>
                            <div style="width: 100%; display: inline-block;">
                                <div class="home text-center bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/home-banner/2.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                    <img src="assets/images/home-banner/2.jpg" alt="" class="bg-img blur-up lazyload" style="display: none;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="slider-contain">
                                                    <div>
                                                        <h4>welcome to fashion</h4>
                                                        <h1>women fashion</h1>
                                                        <a href="#" class="btn btn-solid" tabindex="-1">shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- collection banner -->
    <section class="pb-0 ratio2_1">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="#">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/sub-banner1.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{ asset("front/assets/images/sub-banner1.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 30%</h4>
                                    <h2>men</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/sub-banner2.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{ asset("front/assets/images/sub-banner2.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2>women</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- Paragraph-->
    <div class="title1 section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner1">top collection</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Paragraph end -->


    <!-- Product slider -->
    <section class="section-b-space p-t-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-4 product-m no-arrow slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 4900px; transform: translate3d(-1400px, 0px, 0px);">
                                <div class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/pro3/1.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1">
                                                        <img src="{{ asset("front/assets/images/pro3/1.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/pro3/2.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/2.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00 <del>$600.00</del></h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/pro3/33.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/33.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/35.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/35.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/33.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/33.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/34.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/34.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="0"><img src="assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/28.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img src="{{ asset("front/assets/images/pro3/28.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="0">
                                                        <i class="ti-shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="0">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ti-reload" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="0">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/1.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="0">
                                                        <img src="{{ asset("front/assets/images/pro3/1.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/2.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img src="{{ asset("front/assets/images/pro3/2.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="0"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="0">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00 <del>$600.00</del></h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/33.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img src="{{ asset("front/assets/images/pro3/33.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/34.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img src="{{ asset("front/assets/images/pro3/34.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="0"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="0">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/35.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img src="{{ asset("front/assets/images/pro3/35.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/36.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img src="{{ asset("front/assets/images/pro3/36.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="0"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="0">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 350px;" tabindex="-1">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/33.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/33.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/27.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/27.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1">
                                                        <i class="ti-shopping-cart"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1">
                                                        <i class="ti-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1">
                                                        <i class="ti-search" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="compare.html" title="Compare" tabindex="-1">
                                                        <i class="ti-reload" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/1.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1">
                                                        <img src="{{ asset("front/assets/images/pro3/1.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00 <del>$600.00</del></h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/33.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/33.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/pro3/34.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/34.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/pro3/35.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/35.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 350px;">
                                    <div>
                                        <div class="product-box" style="width: 100%; display: inline-block;">
                                            <div class="img-wrapper">
                                                <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                                        sale</span></div>
                                                <div class="front">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/pro3/33.jpg") }}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="{{ asset("front/assets/images/pro3/33.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                                </div>
                                                <div class="cart-info cart-wrap">
                                                    <button data-toggle="modal" data-target="#addtocart" title="Add to cart" tabindex="-1"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                            </div>
                                            <div class="product-detail">
                                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                </a>
                                                <h4>$500.00</h4>
                                                <ul class="color-variant">
                                                    <li class="bg-light0"></li>
                                                    <li class="bg-light1"></li>
                                                    <li class="bg-light2"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->


    <!-- Parallax banner -->
    <section class="p-0">
        <div class="full-banner parallax text-center p-left bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/parallax/1.jpg&quot;); background-size: cover; background-position: center center; display: block;">
            <img src="assets/images/parallax/1.jpg" alt="" class="bg-img blur-up lazyload" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>2018</h2>
                            <h3>fashion trends</h3>
                            <h4>special offer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- Tab product -->
    <div class="title1 section-t-space">
        <h4>exclusive products</h4>
        <h2 class="title-inner1">special products</h2>
    </div>
    <section class="section-b-space p-t-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current"><a href="tab-4">New Products</a></li>
                            <li class=""><a href="tab-5">Featured Products</a></li>
                            <li class=""><a href="tab-6">Best Sellers</a></li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default" style="display: block;">
                                <div class="no-slider row">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                            </div>
                                            <div class="cart-info cart-wrap">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                            <ul class="color-variant">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab product end -->


    <!-- service layout -->
    <div class="container">
        <section class="service border-section small-section">
            <div class="row">
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -117 679.99892 679">
                            <path d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0" fill="#ff4c3b"></path>
                        </svg>
                        <div class="media-body">
                            <h4>free shipping</h4>
                            <p>free shipping world wide</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve" width="512px" height="512px">
                            <g>
                                <g>
                                    <g>
                                        <path d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160 c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24 c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z" fill="#ff4c3b"></path>
                                        <path d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552 c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8 c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32 l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8 S332.418,464,328,464z" fill="#ff4c3b"></path>
                                        <path d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0 C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288 V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2 c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296 c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0 c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248 c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952 C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112 C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568 c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z" fill="#ff4c3b"></path>
                                        <path d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704 c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947 c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888 C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002 c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002 C224.781,213.464,224.781,218.53,221.658,221.654z" fill="#ff4c3b"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="media-body">
                            <h4>24 X 7 service</h4>
                            <p>online service for new customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -14 512.00001 512">
                            <path d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0" fill="#ff4c3b"></path>
                            <path d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0" fill="#ff4c3b"></path>
                            <path d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0" fill="#ff4c3b"></path>
                            <path d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0" fill="#ff4c3b"></path>
                            <path d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0" fill="#ff4c3b"></path>
                            <path d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0" fill="#ff4c3b"></path>
                        </svg>
                        <div class="media-body">
                            <h4>festival offer</h4>
                            <p>new online special festival offer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- service layout  end -->


    <!-- blog section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title1 section-t-space">
                    <h4>Recent Story</h4>
                    <h2 class="title-inner1">from the blog</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="blog p-t-0 ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-3 no-arrow slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 5941px; transform: translate3d(-1371px, 0px, 0px);">
                                <div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/blog/3.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/3.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/blog/4.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/2.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/blog/5.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/5.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 457px;">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/1.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/1.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="0">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 457px;">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/2.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/2.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="0">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 457px;">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/3.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/3.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="0">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/4.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/4.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/5.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/5.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/1.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/1.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/2.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/2.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyloaded" style="background-image: url({{ asset("front/assets/images/blog/3.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/3.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/blog/4.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/4.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 457px;" tabindex="-1">
                                    <div>
                                        <div class="col-md-12" style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="classic-effect">
                                                    <div class="bg-size blur-up lazyload" style="background-image: url({{ asset("front/assets/images/blog/5.jpg") }}); background-size: cover; background-position: center center; display: block;">
                                                        <img src="{{ asset("front/assets/images/blog/5.jpg") }}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                                    </div>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="blog-details">
                                                <h4>25 January 2018</h4>
                                                <a href="#" tabindex="-1">
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                                </a>
                                                <hr class="style1">
                                                <h6>by: John Dio , 2 Comment</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->


    <!-- instagram section -->
    <section class="instagram ratio_square">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <h2 class="title-borderless"># instagram</h2>
                    <div class="slide-7 no-arrow slick-instagram slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 5600px; transform: translate3d(-1568px, 0px, 0px);">
                                <div class="slick-slide slick-cloned" data-slick-index="-7" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/4.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/4.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-6" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/9.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/6.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/6.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/7.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/7.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/8.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/8.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/9.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/2.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/2.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/3.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/3.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/4.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/4.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/9.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/6.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/6.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/7.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/7.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="0">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/8.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/8.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/9.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/2.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/2.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/3.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/3.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/4.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/4.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/9.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/6.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/6.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/7.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/7.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="15" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/8.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/8.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="16" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/9.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/9.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="17" aria-hidden="true" tabindex="-1" style="width: 224px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <a href="#" tabindex="-1">
                                                <div class="instagram-box bg-size" style="background-image: url(&quot;assets/images/slider/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"> <img src="assets/images/slider/2.jpg" class="bg-img" alt="Avatar" style="width: 100%; display: none;">
                                                    <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->


    <!--  logo section -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-6 no-arrow slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 5038px; transform: translate3d(-1374px, 0px, 0px);">
                                <div class="slick-slide slick-cloned" data-slick-index="-6" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/3.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/4.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/5.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/6.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/7.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/8.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="0"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/1.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="0"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/2.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="0"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/3.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="0"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/4.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="0"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/5.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="0"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/6.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/7.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/8.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/1.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/2.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/3.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/4.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/5.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/6.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}assets/images/logos/7.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="15" aria-hidden="true" tabindex="-1" style="width: 229px;">
                                    <div>
                                        <div style="width: 100%; display: inline-block;">
                                            <div class="logo-block">
                                                <a href="#" tabindex="-1"><img src="{{ asset("front/assets/images/logos/8.png") }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  logo section end-->


    <!-- footer -->
    <footer class="footer-light">
        <div class="light-layout">
            <div class="container">
                <section class="small-section border-section border-top-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subscribe">
                                <div>
                                    <h4>KNOW IT ALL FIRST!</h4>
                                    <p>Never Miss Anything From Multikart By Signing Up To Our Newsletter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="form-inline subscribe-form auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                <div class="form-group mx-sm-3">
                                    <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                </div>
                                <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo"><img src="{{ asset("front/assets/images/icon/logo.png") }}" alt=""></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>my account</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">mens</a></li>
                                    <li><a href="#">womens</a></li>
                                    <li><a href="#">clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">featured</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>why we choose</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">shipping &amp; return</a></li>
                                    <li><a href="#">secure shopping</a></li>
                                    <li><a href="#">gallary</a></li>
                                    <li><a href="#">affiliates</a></li>
                                    <li><a href="#">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>store information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India 345-659
                                    </li>
                                    <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                    <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@Fiot.com</a></li>
                                    <li><i class="fa fa-fax"></i>Fax: 123456</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 themeforest powered by
                                pixelstrap</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{ asset("front/assets/images/icon/visa.png") }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset("front/assets/images/icon/mastercard.png") }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset("front/assets/images/icon/paypal.png") }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset("front/assets/images/icon/american-express.png") }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset("front/assets/images/icon/discover.png") }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!--modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="offer-content"> <img src="assets/images/Offer-banner.png" class="img-fluid blur-up lazyloaded" alt="">
                                        <h2>newsletter</h2>
                                        <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                            <div class="form-group mx-sm-3">
                                                <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                                <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal popup end-->


    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{ asset("front/assets/images/pro3/1.jpg") }}" alt="" class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Women Pink Shirt</h2>
                                <h3>$32.96</h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->


    <!-- theme setting -->
    <a href="javascript:void(0)" onclick="openSetting()">
        <div class="setting-sidebar" id="setting-icon">
            <div>
                <i class="fa fa-cog" aria-hidden="true"></i>
            </div>
        </div>
    </a>
    <div id="setting_box" class="setting-box">
        <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
        <div class="setting_box_body">
            <div onclick="closeSetting()">
                <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
            </div>
            <div class="setting-body">
                <div class="setting-title">
                    <h4>layout<span class="according-menu"></span></h4>
                </div>
                <div class="setting-contant" style="display: none;">
                    <div class="row demo-section">
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo1"></div>
                                <div class="demo-text">
                                    <h4>Fashion</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('index.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo43">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>game</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('game.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo44">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>gym</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('gym-product.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo45">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>tools</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('tools.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo46">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>marijuana</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('marijuana.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo47">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>metro</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('metro.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo48">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>pets</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('pets.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo49">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>video slider</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('video-slider.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo50">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>left menu</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('left_sidebar-demo.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo51">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>jewellery</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('jewellery.html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo2"></div>
                                <div class="demo-text">
                                    <h4>Fashion</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('fashion-2.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo3"></div>
                                <div class="demo-text">
                                    <h4>Fashion</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('fashion-3.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo4"></div>
                                <div class="demo-text">
                                    <h4>Shoes</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('shoes.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo5"></div>
                                <div class="demo-text">
                                    <h4>Bags</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('bags.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo6"></div>
                                <div class="demo-text">
                                    <h4>Watch</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('watch.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo7"></div>
                                <div class="demo-text">
                                    <h4>Kids</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('kids.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo8"></div>
                                <div class="demo-text">
                                    <h4>Flower</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('flower.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo9"></div>
                                <div class="demo-text">
                                    <h4>Nursery</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('nursery.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo10"></div>
                                <div class="demo-text">
                                    <h4>Vegetables</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('vegetables.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo11"></div>
                                <div class="demo-text">
                                    <h4>Beauty</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('beauty.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo12"></div>
                                <div class="demo-text">
                                    <h4>Instagram Shop</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('instagram-shop.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                            <div class="set-position">
                                <div class="layout-container demo13"></div>
                                <div class="demo-text">
                                    <h4>Lookbook</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('lookbook-demo.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo14"></div>
                                <div class="demo-text">
                                    <h4>Light</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('light.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo15"></div>
                                <div class="demo-text">
                                    <h4>Full Page</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('full-page.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo16"></div>
                                <div class="demo-text">
                                    <h4>Electronic-1</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('electronic-1.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo17"></div>
                                <div class="demo-text">
                                    <h4>Electronic-2</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('electronic-2.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects effect-2">
                            <div class="set-position">
                                <div class="layout-container demo18"></div>
                                <div class="demo-text">
                                    <h4>Video</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('video.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo19"></div>
                                <div class="demo-text">
                                    <h4>Goggles</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('goggles.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo20"></div>
                                <div class="demo-text">
                                    <h4>Parallax</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('parallax.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo21"></div>
                                <div class="demo-text">
                                    <h4>Furniture</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('furniture.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h4>shop<span class="according-menu"></span></h4>
                </div>
                <div class="setting-contant" style="display: none;">
                    <div class="row demo-section">
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo22"></div>
                                <div class="demo-text">
                                    <h4>left sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo24"></div>
                                <div class="demo-text">
                                    <h4>right sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(right).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo23"></div>
                                <div class="demo-text">
                                    <h4>no sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo25"></div>
                                <div class="demo-text">
                                    <h4>popup</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(sidebar-popup).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo52">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>metro</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(metro).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo53">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>full width</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(full-width).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo26"></div>
                                <div class="demo-text">
                                    <h4>infinite scroll</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(infinite-scroll).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo54"></div>
                                <div class="demo-text">
                                    <h4>three grid</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(3-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo55"></div>
                                <div class="demo-text">
                                    <h4>six grid</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(6-grid).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo56"></div>
                                <div class="demo-text">
                                    <h4>list view</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('category-page(list-view).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h4>product<span class="according-menu"></span></h4>
                </div>
                <div class="setting-contant" style="display: none;">
                    <div class="row demo-section">
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo40">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>four image </h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(4-image).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo33"></div>
                                <div class="demo-text">
                                    <h4>left sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page.html')" class="btn new-tab-btn">Preview</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo36"></div>
                                <div class="demo-text">
                                    <h4>right sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(right-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo34"></div>
                                <div class="demo-text">
                                    <h4>no sidebar</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(no-sidebar).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo41">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>bundle</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(bundle).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo42">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>image swatch</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(image-swatch).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo32"></div>
                                <div class="demo-text">
                                    <h4>left image</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(left-image).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo35"></div>
                                <div class="demo-text">
                                    <h4>right image</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(right-image).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo31">
                                    <div class="ribbon-1"><span>n</span><span>e</span><span>w</span></div>
                                </div>
                                <div class="demo-text">
                                    <h4>image outside</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(image-outside).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo27"></div>
                                <div class="demo-text">
                                    <h4>3-col left</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(3-col-left).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo28"></div>
                                <div class="demo-text">
                                    <h4>3-col right</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(3-col-right).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo29"></div>
                                <div class="demo-text">
                                    <h4>3-col bottom</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(3-column).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo37"></div>
                                <div class="demo-text">
                                    <h4>sticky</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(sticky).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects">
                            <div class="set-position">
                                <div class="layout-container demo30"></div>
                                <div class="demo-text">
                                    <h4>accordian</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(accordian).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 text-center demo-effects mb-0">
                            <div class="set-position">
                                <div class="layout-container demo38"></div>
                                <div class="demo-text">
                                    <h4>vertical tab</h4>
                                    <div class="btn-group demo-btn" role="group" aria-label="Basic example"> <button type="button" onclick="window.open('product-page(vertical-tab).html')" class="btn new-tab-btn">Preview</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h4>color picker<span class="according-menu"></span></h4>
                </div>
                <div class="setting-contant" style="display: none;">
                    <ul class="color-box">
                        <li>
                            <input id="ColorPicker1" type="color" value="#ff4c3b" name="Background">
                            <span>theme deafult color</span>
                        </li>
                    </ul>
                </div>
                <div class="setting-title">
                    <h4>RTL<span class="according-menu"></span></h4>
                </div>
                <div class="setting-contant" style="display: none;">
                    <ul class="setting_buttons">
                        <li class="active" id="ltr_btn"><a href="javascript:void(0)" class="btn setting_btn">LTR</a>
                        </li>
                        <li id="rtl_btn"><a href="javascript:void(0)" class="btn setting_btn">RTL</a></li>
                    </ul>
                </div>
                <div class="buy_btn">
                    <a href="https://themeforest.net/item/multikart-responsive-ecommerce-html-template/22809967?s_rank=1" target="_blank" class="btn btn-block purchase_btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> purchase Multikart now!</a>
                    <a href="https://themeforest.net/item/multikart-responsive-angular-ecommerce-template/22905358?s_rank=3" target="_blank" class="btn btn-block purchase_btn"><img src="assets/images/icon/angular.png" alt="" class="img-fluid"> Multikart Angular</a>
                    <a href="https://themeforest.net/item/multikart-responsive-react-ecommerce-template/23067773?s_rank=2" target="_blank" class="btn btn-block purchase_btn"><img src="assets/images/icon/react.png" alt="" class="img-fluid"> Multikart React</a>
                    <a href="https://themeforest.net/item/multikart-multipurpose-shopify-sections-theme/23093831?s_rank=1" target="_blank" class="btn btn-block purchase_btn"><img src="assets/images/icon/shopify.png" alt="" class="img-fluid"> Multikart Shopify</a>
                </div>
            </div>
        </div>
    </div>
    <!-- theme setting -->


    <!-- exit modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal exit-modal" id="exit_popup" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <div class="media">
                                        <img src="{{ asset("front/assets/images/stop.png") }}" class="stop img-fluid blur-up mr-3 lazyloaded" alt="">
                                        <div class="media-body text-left align-self-center">
                                            <div>
                                                <h2>wait!</h2>
                                                <h4>We want to give you
                                                    <b>10% discount</b>
                                                    <span>for your first order</span>
                                                </h4>
                                                <h5>Use discount code at checkout</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add to cart modal popup end-->


    <!-- facebook chat section start -->
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
        <div class="fb-customerchat fb_invisible_flow fb_iframe_widget" attribution="setup_tool" page_id="2123438804574660" theme_color="#0084ff" logged_in_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?" logged_out_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;attribution=setup_tool&amp;container_width=0&amp;locale=en_US&amp;logged_in_greeting=Hi!%20Welcome%20to%20PixelStrap%20Themes%20%20How%20can%20we%20help%20you%3F&amp;logged_out_greeting=Hi!%20Welcome%20to%20PixelStrap%20Themes%20%20How%20can%20we%20help%20you%3F&amp;page_id=2123438804574660&amp;request_time=1594566491591&amp;sdk=joey&amp;theme_color=%230084ff"><span style="vertical-align: bottom; width: 1000px; height: 0px;"><iframe name="fd9dca09eb4afc" width="1000px" height="1000px" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.12/plugins/customerchat.php?app_id=&amp;attribution=setup_tool&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1034d53be111e4%26domain%3Dthemes.pixelstrap.com%26origin%3Dhttps%253A%252F%252Fthemes.pixelstrap.com%252Ff289e0420e68c3%26relation%3Dparent.parent&amp;container_width=0&amp;locale=en_US&amp;logged_in_greeting=Hi!%20Welcome%20to%20PixelStrap%20Themes%20%20How%20can%20we%20help%20you%3F&amp;logged_out_greeting=Hi!%20Welcome%20to%20PixelStrap%20Themes%20%20How%20can%20we%20help%20you%3F&amp;page_id=2123438804574660&amp;request_time=1594566491591&amp;sdk=joey&amp;theme_color=%230084ff" style="border: none; visibility: visible; width: 288pt; height: 211px; border-radius: 9pt; bottom: 63pt; padding: 0px; position: fixed; right: 9pt; top: auto; z-index: 2147483647; max-height: 0px; min-height: 0px;" __idm_frm__="1021" class=" fb_customer_chat_bounce_out_v2" data-testid="dialog_iframe"></iframe></span></div>
        <div class="fb_dialog  fb_dialog_advanced fb_customer_chat_bubble_animated_no_badge fb_customer_chat_bubble_pop_in" style="background: none; border-radius: 50%; bottom: 18pt; display: inline; height: 45pt; padding: 0px; position: fixed; right: 18pt; top: auto; width: 45pt; z-index: 2147483646;">
            <div class="fb_dialog_content" style="background: none;"><iframe name="blank_fd9dca09eb4afc" width="60px" tabindex="-1" data-testid="bubble_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.12/plugins/customer_chat/bubble" style="border: none;"></iframe></div>
        </div>
    </div>
    <script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&amp;version=v2.12&amp;autoLogAppEvents=1"></script>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <!-- Your customer chat code -->

    <!-- facebook chat section end -->


    <!-- cart start -->
    <div class="addcart_btm_popup" id="fixed_cart_icon">
        <a href="#" class="fixed_cart">
            <i class="ti-shopping-cart"></i>
        </a>
    </div>
    <!-- cart end -->


    <!-- tap to top -->
    <div class="tap-top top-cls" style="display: block;">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{ asset("front/assets/js/jquery-3.3.1.min.js") }}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{ asset("front/assets/js/jquery-ui.min.js") }}"></script>

    <!-- exitintent jquery-->
    <script src="{{ asset("front/assets/js/jquery.exitintent.js") }}"></script>
    <script src="{{ asset("front/assets/js/exit.js") }}"></script>

    <!-- popper js-->
    <script src="{{ asset("front/assets/js/popper.min.js") }}"></script>

    <!-- slick js-->
    <script src="{{ asset("front/assets/js/slick.js") }}"></script>

    <!-- menu js-->
    <script src="{{ asset("front/assets/js/menu.js") }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset("front/assets/js/lazysizes.min.js") }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset("front/assets/js/bootstrap.js") }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset("front/assets/js/bootstrap-notify.min.js") }}"></script>

    <!-- Fly cart js-->
    <script src="{{ asset("front/assets/js/fly-cart.js") }}"></script>

    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <div class="sidebar-btn dark-light-btn">
        <div class="dark-light">
            <div class="theme-layout-version">Dark</div>
        </div>
    </div>

    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }

    </script>
</body>
</html>
