<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ url('assets/images/logos/favicon.ico') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome FREE Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FullCalendar -->
    <link type="text/css" href="{{ url('assets/vendor/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ url('assets/js/script.js') }}" defer></script>
    <script src="{{ url('assets/js/turn.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('title')
</head>

<body>

    <header>
        <nav id="main-menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <img src="{{ url('assets/images/logos/logo.png') }}" alt="Site Logo" width="150px">
                    </a>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('fltc') }}">FLTC</a>
                </li>
                <li>
                    <a href="{{ route('apostolichub') }}">Apostolic Hubs</a>
                </li>
                <li class="ministry">
                    <a href="#">Ministry</a>
                    <i class="fa fa-chevron-down"></i>
                    <ul class="dropdown">
                        <li>
                            <a href="{{ route('lecturesspeakers') }}">Speaker-Teacher</a>
                        </li>
                        <li>
                            <a href="{{ route('ministry') }}">Author</a>
                        </li>
                        <li>
                            <a href="{{ route('conference') }}">Designs Of Excelence</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://kingdominspirations.org/" target="_blank">Kingdom Inspirations</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                @if (Auth::guest())
                    <li>
                        <button class="btn-task">
                            <a href="{{ route('admin.login') }}">
                                Login
                            </a>
                        </button>
                    </li>
                @else
                    <li>
                        <a href="{{ route(Auth::user()->role) }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                @endif
            </ul>
        </nav>

        <nav class="menu-extras">
            <input type="checkbox" id="check">
            <ul class="d-flex align-items-center justify-content-between" id="my-nav">
                <li>
                    <i class="fas fa-grin-beam"></i>
                    <a href="{{ route('home') }}"> <img src="{{ url('assets/images/logos/logo.png') }}" alt="logo"
                            width="100px"> </a>
                </li>
                <li>
                    <label for="check">
                        <span class="mx-3" style="cursor: pointer;">
                            <i class="fa fa-bars" id="hamberger"></i>
                        </span>
                    </label>
                </li>
            </ul>
            <ul id="menu-extra">
                <li class="py-3 mx-3">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="py-3 mx-3">
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li class="py-3 mx-3">
                    <a href="{{ route('fltc') }}">FLTC</a>
                </li>
                <li class="py-3 mx-3">
                    <a href="{{ route('apostolichub') }}">Apostolic Hubs</a>
                </li>
                <li class="ministry py-3 mx-3">
                    <input type="checkbox" id="mCheck">
                    <label for="mCheck">
                        <a id="ministry">Ministry
                            <i class="fa fa-chevron-down"></i>
                        </a>
                    </label>
                    <ul class="mob-dorpdown">
                        <li>
                            <a href="{{ route('lecturesspeakers') }}">Speaker-Teacher</a>
                        </li>
                        <li>
                            <a href="{{ route('ministry') }}">Author</a>
                        </li>
                        <li>
                            <a href="{{ route('conference') }}">Designs Of Excelence</a>
                        </li>
                    </ul>
                </li>
                <li class="py-3 mx-3">
                    <a href="https://kingdominspirations.org/" target="_blank">Kingdom Inspirations</a>
                </li>
                <li class="py-3 mx-3">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="py-3 mx-3">
                    <button class="btn-task">
                        <a href="{{ route('admin.login') }}">
                            Login
                        </a>
                    </button>
                </li>
            </ul>
        </nav>
    </header>
