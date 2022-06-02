<!doctype html>
<html class="fixed">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/theme.css') }}" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/skins/default.css') }}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/custom.css') }}">
    <!-- Head Libs -->
    <script src="{{ asset('assets/admin/assets/vendor/modernizr/modernizr.js') }}"></script>

</head>

<body>
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="{{ '/' }}" class="logo float-left">
                <img src="{{ asset('assets/admin/assets/img/logo.png') }}" height="70" alt="Porto Admin" />
            </a>
            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0">
                        <i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> <a
                            href="{{ route('login') }}"> Sign In
                    </h2></a>
                    <h2 class="title text-uppercase font-weight-bold m-0">
                        <i class="bx bx-user-circle me-1 text-6 position-relative top-5"></i>
                        <a href="{{ route('register') }}">Register
                    </h2></a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-3 col-form-label text-md-end">{{ __('User Type') }}</label>
                            <div class="col-md-8">
                                <select name="type" class="form-control">
                                    <option value="">Select User Type</option>
                                    {{-- <option value="1">Admin</option> --}}
                                    <option value="2">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-3 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <p> If you already have account <a href="{{ route('login') }}">Click Here</a> to Login
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
        </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="{{ asset('assets/admin/assets/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/common/common.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('assets/admin/assets/js/theme.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('assets/admin/assets/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('assets/admin/assets/js/theme.init.js') }}"></script>

</body>

</html>
