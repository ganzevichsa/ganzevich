<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/basic.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/blogs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/gradient.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/new-skin.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/dark.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/people/blue.css') }}" rel="stylesheet">
    <link href="{{ asset('css/people/white.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/orange.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/people/style.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>
@yield('content')

<script src="{{ asset('js/people/jquery.min.js') }}"></script>
<script src="{{ asset('js/people/jquery.validate.js') }}"></script>
<script src="{{ asset('js/people/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/people/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('js/people/isotope.pkgd.js') }}"></script>
<script src="{{ asset('js/people/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/people/owl.carousel.js') }}"></script>
<script src="{{ asset('js/people/scripts.js') }}"></script>

</body>
</html>
