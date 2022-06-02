<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Agents</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/timedropper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/datedropper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('assets/frontend/css/default.css') }}">

        <!-- LEAFLET MAP -->
   <link rel="stylesheet" href="{{ asset('assets/frontend/css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/leaflet-gesture-handling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/leaflet.markercluster.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/leaflet.markercluster.default.css') }}">
</head>

<body class="inner-pages agents homepage-4 hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/frontend/images/logo-red.svg') }}" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ url('/') }}">Home</a> </li>
                                    <li><a href="{{ url ('/frontend/residential') }}">Residential</a> </li>
                                    <li><a href="{{ url ('/frontend/commercial') }}">Commercial</a></li>
                                    <li><a href="{{ url ('/frontend/agents-listing-grid') }}">Agent View</a></li>
                                    <li><a href="{{ url ('/') }}">Blog</a></li>
                                    <li><a href="{{ url ('/frontend/contact-us') }}">Contact</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="{{ url ('/frontend/login') }}">Login</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="{{ url ('/frontend/frontend/add-property') }}" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                                 </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="{{ url ('/frontend/add-property') }}" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    <!-- <div class="header-user-menu user-menu add"> 
                        <div class="header-user-name">

                        </div>
                        <ul>
                            <li><a href="user-profile.html"> Edit profile</a></li>
                            <li><a href="add-property.php"> Add Property</a></li>
                            <li><a href="payment-method.html">  Payments</a></li>
                            <li><a href="change-password.html"> Change Password</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div> -->
                    <!-- Right Side Content / End -->

                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"><a href="{{ url ('/')}}">Sign In</a></div>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->
                    <!-- lang-wrap-->
                    <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                        <div class="lang-wrap">
                            <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                            <ul class="lang-tooltip lang-action no-list-style">
                                <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                                <li><a href="#" data-lantext="Fr">Aurbic</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- lang-wrap end-->
                </div>
            </div>
            <!-- Header / End -->
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->