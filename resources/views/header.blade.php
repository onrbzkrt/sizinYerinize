<!doctype html>
<html lang="tr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Sizin Yerinize | @yield('title')</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{ url("") }}"> <img class="me-3 d-inline-block" src="{{ asset('assets/img/gallery/logo.png') }}" alt="" /></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto pt-2 pt-lg-0 font-base">
                    <li class="nav-item px-2"><a class="nav-link fw-bold active" aria-current="page" href="{{ url('/') }}">{{ Lang::get("home.homepage") }}</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-bold" href="{{ url('sendMail') }}">{{ Lang::get("home.sendAnon") }}</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-bold" href="#feature">Developers</a></li>
                    <li class="nav-item px-2"><a class="nav-link fw-bold" href="#testimonial">Pricing</a></li>
                </ul>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Lang::getLocale() == "tr" ? "Turkish" : "English" }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownLang">
                        <li><a class="dropdown-item" href="{{ url("lang/tr") }}" {{ Lang::getLocale() == "tr" ? "selected" : "" }}>Turkish</a></li>
                        <li><a class="dropdown-item" href="{{ url("lang/en") }}" {{ Lang::getLocale() == "en" ? "selected" : "" }}>English</a></li>
                    </ul>
                </div>
                <form class="ps-lg-5">
                    @if(!Auth::check())
                        <a class="btn btn-link text-danger fw-bold order-1 order-lg-0" href="{{ url('login') }}" type="button">Giris Yap</a>
                        <a class="btn hover-top btn-collab" href="{{ url('register') }}">Kayit Ol</a>
                    @else
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('user/profile') }}">{{ Lang::get("home.profile") }}</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><button class="dropdown-item" onclick="uniqueSubm()">{{ Lang::get("home.logout") }}</button></li>
                            </ul>
                            <input type="hidden" id="getMessage" value="{{ session("lang_msg") }}">
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </nav>
</head>

<body class="bg-light">
@yield('content')

<form method="POST" id="uniqueForm" action="{{ route('logout') }}">
    @csrf

</form>

<script src="{{ asset('js/jquery-3.6.min.js') }}"></script>
{{--<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/popper.min.js') }}"></script>--}}

<footer class="footer">
@extends('footer')

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
{{--    <script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>/--}}
{{--    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;300;400;500;600;700&amp;family=Montserrat:wght@200;300&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;300;400;500;600;700&amp;family=Montserrat:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <script>
        function uniqueSubm()
        {
            event.preventDefault();
            $('#uniqueForm').submit();
        }
    </script>

    <script>
        $( document ).ready(function() {
            var msg = $("#getMessage").val();

            if (msg != '' && msg != undefined)
            {
                toastr.success(msg);
            }
        });
    </script>
    @yield('footer')
</footer>

</body>

</html>