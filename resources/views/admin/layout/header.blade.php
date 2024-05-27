<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link rel="shortcut icon" href="{{ url('assets/images/logos/logo_2.png') }}" type="image/x-icon">

    <!-- App CSS -->
    <link type="text/css" href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/css/app.rtl.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ url('assets/css/vendor-material-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/css/vendor-material-icons.rtl.css') }}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ url('assets/css/vendor-fontawesome-free.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">


    <!-- Flatpickr -->
    <link type="text/css" href="{{ url('assets/css/vendor-flatpickr.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/css/vendor-flatpickr.rtl.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/css/vendor-flatpickr-airbnb.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ url('assets/css/vendor-flatpickr-airbnb.rtl.css') }}" rel="stylesheet">

    <!-- FullCalendar -->
    <link type="text/css" href="{{ url('assets/vendor/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    @stack('title')

</head>

<body class="layout-default">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->

                <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall"
                    data-retarget-mouse-scroll="false">
                    <div class="mdk-header__content">

                        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0"
                            id="navbar" data-primary>
                            <div class="container-fluid page__container pr-0">

                                <!-- Navbar toggler -->
                                <button class="navbar-toggler navbar-toggler-custom  d-lg-none d-flex mr-navbar"
                                    type="button" data-toggle="sidebar">
                                    <span class="material-icons icon-14pt">menu</span>
                                </button>

                                <form class="ml-auto search-form search-form--light d-none d-sm-flex flex"
                                    action="index.html">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                                </form>

                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" data-caret="false"
                                        class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar">
                                        <span class="material-icons">laptop</span> My Dashboard
                                    </a>
                                    <div id="company_menu"
                                        class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                        <div
                                            class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">
                                            <span class="flex d-flex flex-column">
                                                <strong class="h5 m-0">{{ session()->get('username') }}</strong>
                                                <small
                                                    class="text-muted text-uppercase">{{ session()->get('role') }}</small>
                                            </span>

                                        </div>
                                        <div class="dropdown-divider"></div>
                                        @guest
                                            <a class="dropdown-item d-flex align-items-center py-2"
                                                href="{{ route('edit.account', ['id' => 0]) }}">
                                            @else
                                                <a class="dropdown-item d-flex align-items-center py-2"
                                                    href="{{ route('edit.account', ['id' => Auth::user()->id]) }}">
                                                    <span class="material-icons mr-2">account_circle</span> Edit Account
                                                </a>
                                        @endguest
                                            <a class="dropdown-item d-flex align-items-center py-2"
                                                href="{{ route('admin.logout') }}">
                                                <span class="material-icons mr-2">exit_to_app</span> Logout
                                            </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- // END Header -->
