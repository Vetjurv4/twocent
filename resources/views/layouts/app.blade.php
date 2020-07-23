<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Velile Vamba" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->


        <link href="{{ asset('css/custom-bs.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/icomoon/style.css') }}" rel="stylesheet">
        <link href="{{ asset('fonts/line-icons/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
        <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
        <script src="{{ asset("js/stickyfill.min.js") }}"></script>
        <script src="{{ asset("js/jquery.flexslider-min.js") }}"></script>
        <script src="{{ asset("js/jquery.fancybox.min.js") }}"></script>
        <script src="{{ asset("js/jquery.easing.1.3.js") }}"></script>
        <script src="{{ asset("js/jquery.waypoints.min.js") }}"></script>
        <script src="{{ asset("js/jquery.animateNumber.min.js") }}"></script>
        <script src="{{ asset("js/custom.js") }}"></script>


    </head>
    <body id="app">
        <div class="site-wrap">
            @include('../templates/nav')
            @yield('content')
            @include('../templates/footer')
        </div>
        <!-- SCRIPTS -->


    </body>
</html>
