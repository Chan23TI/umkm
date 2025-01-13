<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>

    <link rel="shortcut icon" href="{{asset('dist/assets/images/favicon.ico')}}">
    <link href="{{ asset('dist/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dist/assets/libs/aos/aos.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    @include('components.navbar')
    @yield('content')
    @include('component.footer')

    <script src="{{{{ asset('dist/assets/libs/@frostui/tailwindcss/frostui.js') }}}}"></script>
    <script src="{{{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}}}"></script>

    <script src="{{{{ asset('assets/libs/aos/aos.js') }}}}"></script>
    <script src="{{{{ asset('dist/assets/js/theme.min.js') }}}}"></script>


</body>
</html>
