
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


</head>

<body>



    @yield('content')

        <!-- Footer section -->
        <footer class="footer-section w-100">
        <nav class="navbar navbar-expand-sm navbar-dark justify-content-end">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse pr-4" id="main-menu">
                <ul class="navbar-nav ml-auto justify-content-end">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ url('tools') }}" class="nav-link">Tools</a></li>
                    <li class="nav-item"><a href="{{ url('collaborate') }}" class="nav-link">Collaborate</a></li>
                    <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
        <!-- Footer top section end -->


        <!--====== Javascripts & Jquery ======-->
        <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
