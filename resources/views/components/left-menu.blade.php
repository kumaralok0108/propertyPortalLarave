<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Real Estate</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/dashbord-mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('assets/frontend/css/default.css') }}">
    <script src="{{ asset('assets/frontend/js/jquery-3.5.1.min.js') }}"></script>
</head>

<body class="inner-pages maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="{{('/')}}"><img src="{{ asset('assets/frontend/images/logo.svg') }}" alt=""></a>
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
                           
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="{{ asset('assets/frontend/images/testimonials/ts-1.jpg') }}" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="#"> Edit profile</a></li>
                                <li><a href="{{('/frontend/add-property')}}"> Add Property</a></li>
                                
                                <li><a href="{{('/frontend/user-change-password')}}"> Change Password</a></li>
                                <li><a href="{{ url('/') }}">Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header"><img src="{{ asset('assets/frontend/images/logo-blue.svg') }}" alt="header-logo2.png"> </div>
                            <div class="header clearfix">
                                <img src="{{ asset('assets/frontend/images/testimonials/ts-1.jpg') }}" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2>Mary Smith</h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a class="{{ request()->is('user-dashboard') ? 'active' : '' }}" href="{{ url('/frontend/user-dashboard') }}">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('user-profile') ? 'active' : '' }}"href="{{ url('/frontend/user-profile') }}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('property-list') ? 'active' : '' }}"href="{{ url('/frontend/property-list') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a class="{{ request()->is('add-property') ? 'active' : '' }}" href="{{ url('/frontend/add-property') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                   
                                    <li>
                                        <a class="{{ request()->is('user-change-password') ? 'active' : '' }}" href="{{ url('/frontend/user-change-password') }}">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('user-dashboard') ? 'active' : '' }}" href="{{ route('logout') }}">
                                            <i class="fas fa-sign-out-alt"></i>Log Out

                                            
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a class="{{ request()->is('user-dashboard') ? 'active' : '' }}" href="{{ url('/frontend/user-dashboard') }}">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->is('user-dashboard') ? 'active' : '' }}" href="{{ url('/frontend/user-dashboard') }}">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->is('property-list') ? 'active' : '' }}" href="{{ url('/frontend/property-list') }}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                      
                                        <li>
                                            <a class="{{ request()->is('add-property') ? 'active' : '' }}" href="{{ url('/frontend/add-property') }}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                                                          
                                        <li>
                                            <a class="{{ request()->is('user-dashboard') ? 'active' : '' }}" href="{{ url('/frontend/user-dashboard') }}">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>