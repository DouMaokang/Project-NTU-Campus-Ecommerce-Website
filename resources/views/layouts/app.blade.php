<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/all.min.js') }}"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6b83845b20.js" crossorigin="anonymous"></script>


    <!-- typeahead -->
    <script src="/js/typeahaed/js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">


    <style>

        html, body {

            /* Allows content to fill the viewport and go beyond the bottom */
            height: 100% !important;

            /* Allows you to scroll below the viewport; default value is visible */
            overflow-y: scroll !important;

            /* To smooth any scrolling behavior */
            -webkit-overflow-scrolling: touch !important;
        }
    </style>

</head>
<body>
    @include('inc.header')
    @include('inc.messages')

    <main>

        @yield('content')

    </main>



    @yield('extra-js')
</body>

</html>

