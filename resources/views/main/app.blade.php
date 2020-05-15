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

    <script>
        $('.carousel').carousel({
            interval: 3000
        });

        $('.carousel').carousel('cycle');

        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: false,
            customDirectionNav: $(".custom-navigation a")
        });
    </script>
</body>

</html>