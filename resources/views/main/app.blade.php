<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Architecture , LAB, Local Architecture Bureau, Tan Tik Lam, Gemawang Swaribathoro">
    <meta name="title" content="{{ $title }}">
    <meta name="description"
        content="LAB works on a wide range architecture projects, from medium to large scale with interest to Public, Commercial & Private uses. LAB covers a think-tank process, idea development and research-based study to implementation.">
    <meta name="author" content="LAB | Local Architecture Bureau">

    <title>{{ $title }}</title>

    <!-- FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
</head>

<body>
    @yield('content')

    <!-- JS -->
    @stack('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.addEventListener('load', function () {
            $('.carousel').carousel('pause');

            $('#home-slider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
                slideshow: false,
                customDirectionNav: $(".custom-navigation a"), 
            });

            $('#about-slider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
                slideshow: true,
                customDirectionNav: $(".custom-navigation a"), 
            });
        });
    </script>
</body>

</html>