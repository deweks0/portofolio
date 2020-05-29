<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
</head>

<body>
    @yield('content')

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>
        $('.carousel').carousel({
            interval: 3000
        });

        $('.carousel').carousel('cycle');

        $('#home-slider').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: true,
            slideshow: false,
            customDirectionNav: $(".custom-navigation a"), 
        });
        $('#about-slider').flexslider({
            animation: "slide",
            controlsContainer: $(".custom-controls-container"),
        });
    </script>
</body>

</html>