<!doctype html>
<html class="fixed">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>Real Estate Portal Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Vendor CSS -->

    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/morris/morris.css') }}" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/jquery-ui/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/select2/css/select2.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/dropzone/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/dropzone/dropzone.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/codemirror/theme/monokai.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/theme.css') }}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('assets/admin/assets/vendor/modernizr/modernizr.js') }}"></script>
</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('assets/admin/assets/img/logo.png') }}" width="75" height="35"
                        alt="Porto Admin">
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                {{-- <form action="pages-search-results.html" class="search nav-form">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
						</div>
					</form> --}}


                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="{{ url('/') }}" data-bs-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="{{ asset('assets/admin/assets/img/!logged-user.jpg') }}" alt="Joseph Doe"
                                class="rounded-circle"
                                data-lock-picture="{{ asset('assets/admin/assets/img/!logged-user.jpg') }}" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">Administrator</span>
                        </div>
                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="bx bx-user-circle"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                        class="bx bx-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"><i
                                        class="bx bx-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
                        data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">
                                <li>
                                    <a class="nav-link" href="{{ url('/admin') }}">
                                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="nav-parent nav-expanded nav-active">
                                    <a class="nav-link">
                                        <i class="bx bx-layout" aria-hidden="true"></i>
                                        <span>Location</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a class="nav-link" href="{{ '/admin/add-location' }}">Add Country</a>
                                        </li>
										<li>
                                            <a class="nav-link" href="{{ '/admin/add-state' }}">Add State</a>
                                        </li>

										<li>
                                            <a class="nav-link" href="{{ '/admin/add-city' }}">Add City</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ '/admin/list-city' }}">View City</a>
                                        </li>

                                        <li class="nav-active">
                                            <a class="nav-link" href="{{ '/admin/list-location' }}">View Country</a>
                                        </li>
										<li class="nav-active">
                                            <a class="nav-link" href="{{ '/admin/list-state' }}">View State</a>
                                        </li>
                                </li>
                            </ul>
                            </li>
                            <li class="nav-parent nav-expanded nav-active">
                                <a class="nav-link" href="#">
                                    <i class="bx bx-detail" aria-hidden="true"></i>
                                    <span>Feature</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ '/admin/add-feature' }}">Add Feature</a>
                                    </li>
                                    <li class="nav-active">
                                        <a class="nav-link" href="{{ '/admin/list-feature' }}">View Feature</a>
                                    </li>
                            </li>
                            </ul>

                            </li>

                            <li class="nav-parent nav-expanded nav-active">
                                <a class="nav-link" href="#">
                                    <i class="bx bx-detail" aria-hidden="true"></i>
                                    <span>Users</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ '/admin/add-users' }}">Add Users</a>
                                    </li>
                                    <li class="nav-active">
                                        <a class="nav-link" href="{{ '/admin/list-users' }}">View Users</a>
                                    </li>
                            </li>
                            </ul>
                            </li>
                            <li class="nav-parent nav-expanded nav-active">
                                <a class="nav-link" href="#">
                                    <i class="bx bx-detail" aria-hidden="true"></i>
                                    <span>Property type</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ '/admin/add-property-type' }}">Add
                                            Property type</a>
                                    </li>
                                    <li class="nav-active">
                                        <a class="nav-link" href="{{ '/admin/list-property-type' }}">View
                                            Property type</a>
                                    </li>
                            </li>
                            </ul>
                            </li>
                            <li class="nav-parent nav-expanded nav-active">
                                <a class="nav-link" href="#">
                                    <i class="bx bx-detail" aria-hidden="true"></i>
                                    <span>Asset Type</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ '/admin/add-asset-type' }}">Add Asset
                                            Type</a>
                                    </li>
                                    <li class="nav-active">
                                        <a class="nav-link" href="{{ '/admin/list-asstet-type' }}">View Asset
                                            Type</a>
                                    </li>
                            </li>
                            </ul>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"><i
                                        class="bx bx-power-off"></i> Logout</a>
                            </li>
                            </ul>
                        </nav>
                    </div>

                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>
                </div>
            </aside>
            <!-- end: sidebar -->
