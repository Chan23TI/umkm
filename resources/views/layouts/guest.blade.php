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
            <div class="flex w-[900px] h-[550px] bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Kolom Kiri (Gambar) -->
                <div class="w-1/2">
                    <img src="{{ asset('img/makanan.jpeg') }}" alt="Gambar Nasi Ekonomi" class="w-full h-full object-cover">
                </div>

                <!-- Kolom Kanan (Logo + Form) -->
                <div class="w-1/2 flex flex-col items-center justify-center px-8 py-6">
                    <!-- Logo -->
                    <div class="mb-4">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo Nasi Ekonomi Makmur" class="w-36">
                    </div>

                    <!-- Form Login -->
                    <div class="w-full">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
