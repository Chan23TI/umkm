<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Nasi Ekonomi Makmur') }}</title>
        <link rel="icon" href="img/logo.png" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans  text-gray-900 antialiased ">
        <div class="w-full h-screen bg-red-500 flex items-center sm:pt-0 sm:justify-center relative overflow-hidden">
            <!-- Ornamen oranye -->
            <div class="absolute top-0 left-0 w-48 h-48 bg-orange-400 opacity-50 rounded-full -translate-x-16 -translate-y-16"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-orange-400 opacity-50 rounded-full translate-x-16 translate-y-16"></div>
            <div class="flex  w-[800px] h-[400px] bg-white shadow-lg rounded-lg overflow-hidden">

                <div class="flex justify-end items-start">
                    <div>
                        <img src="{{ asset('img/logo.png') }}" alt="logo nasi ekonomi makmur" class="w-[200px] rounded-xl mr-48">
                    </div>


                    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg mr-20">
                        {{ $slot }}
                    </div>
                </div>

            {{-- </div> --}}
        </div>

    </body>
</html>
