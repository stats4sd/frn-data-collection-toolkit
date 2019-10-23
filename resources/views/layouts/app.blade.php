
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Farmer Research Netorks - Data Collection Tools">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('header')
</head>

<body>

    <!-- Header section -->
    <header class="header-section">
        <!--<a href="./index.html" class="site-logo"><img src="./img/logo.png" alt=""></a>-->
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="nav-warp">
            <!-- <div class="user-panel">
                <a href="#">Login</a> /
                <a href="#">Register</a>
            </div> -->
            <ul class="main-menu" style="padding-right: 70px;">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about') }}">About</a></li>
                <li><a href="{{ url('tools') }}">Tools</a></li>
                <li><a href="{{ url('collaborate') }}">Collaborate</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- Header section end -->

    @yield('content')

        <!-- Footer section -->
        <footer class="footer-section">
            <div class="container">
                <ul class="footer-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">About</a></li>
                    <li><a href="{{ url('tools') }}">Tools</a></li>
                    <li><a href="{{ url('collaborate') }}">Collaborate</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
                <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
            </div>
        </footer>
        <!-- Footer top section end -->


        <!--====== Javascripts & Jquery ======-->
        <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
