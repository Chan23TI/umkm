<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth focus:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nasi Ekonomi Makmur</title>

    {{-- title icon --}}
    <link rel="icon" href="img/logo.png" type="image/png">

    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: { // untuk menambah aturan sendiri
                    spacing: {
                        13: '3.25rem',
                    },
                    fontfamily: {
                        inter: ['Inter'],
                    },
                    colors: {
                        magenta: '#abc68d',
                    },
                    .mt: {
                        '600px': '600px',
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-red-500 to-red-700 shadow-lg text-white ">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="#home" class="text-xl font-inter font-bold">
                <img src="/img/logo.png" alt="logo" class="w-[100px]"></a>
            <ul class="flex space-x-10">
                <li><a href="#home" class=" hover:text-yellow-400">Home</a></li>
                <li><a href="#menu" class="hover:text-yellow-400">Menu</a></li>
                <li><a href="#promo" class="hover:text-yellow-400">Promo</a></li>
                <li><a href="#review" class="hover:text-yellow-400">Review</a></li>
                <li><a href="#about" class="hover:text-yellow-400">About</a></li>
                <li><a href="#contact" class="hover:text-yellow-400">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('promo.index') }}" class="hover:text-yellow-400">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-yellow-400">
                            Log in
                        </a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hover:text-yellow-300">
                                Register
                            </a>
                        @endif --}}
                    @endauth
                @endif
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-gray-100 bg-blend-multiply py-10 bg-cover  h-[600px]"
        style="background-image :url('/img/umkm3.png'); background-size: 1525px 600px;">
        <div class="container mt-[430px] mx-auto text-center ">
            {{-- <h1 class="text-4xl font-sans font-bold mb-4">Selamat Datang di Nasi Ekonomi Makmur</h1>
            <p class="text-lg mb-6">Nikmati hidangan lezat kami dengan suasana yang nyaman.</p> --}}
            <a href="#menu" class="bg-red-600 text-white text-lg px-8 py-4 rounded-xl shadow-lg hover:text-yellow-400">Lihat Menu</a>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-16 relative">
        <img src="/img/asset1.png" alt="asset" class="w-52 absolute top-0 right-0 rotate-180">
        <div class="container pb-8 relative">
                <h1 class="text-4xl font-bold text-center mb-10">Top Menu </h1>
            <div class=" grid grid-cols-1 md:grid-cols-3 mx-6 gap-12">
                <!-- Menu Item -->
                <div class="bg-white shadow-md rounded-xl p-6 hover:scale-90 transition-all duration-300 ">
                    <img src="/img/makanan4.webp" alt="Makanan" class="w-full h-60 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Nasi Goreng Spesial</h3>
                    <p class="text-gray-600">Nasi goreng dengan rempah pilihan dan tambahan lauk pauk.</p>
                    <div class="py-4 flex justify-end">
                        <a href="https://wa.me/+6282373784348" class="bg-red-600 text-white px-4 py-2 rounded-3xl">Pesan</a>
                    </div>
                </div>
                <!-- Menu Item -->
                <div class="bg-white shadow-md rounded-xl p-6  hover:scale-90 transition-all duration-300 ">
                    <img src="/img/makanan3.jpg" alt="Makanan" class="w-full h-60 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-semibold">Ayam Bakar</h3>
                    <p class="text-gray-600 ">Ayam bakar dengan bumbu khas dan sambal yang menggugah selera.</p>
                    <div class="py-4 flex justify-end">
                        <a href="https://wa.me/+6282373784348" class="bg-red-600 text-white px-4 py-2 rounded-3xl"> Pesan</a>
                    </div>

                </div>
                <!-- Menu Item -->
                <div class="bg-white shadow-md rounded-xl p-6 hover:scale-90 transition-all duration-300 ">
                    <img src="/img/esteh.jpeg" alt="Minuman"
                        class="w-full h-60 object-cover rounded-lg mb-4 object-top">
                    <h3 class="text-xl font-semibold">Es Teh Manis</h3>
                    <p class="text-gray-600">Segarnya es teh manis untuk menemani santapan Anda.</p>
                    <div class="py-4 flex justify-end">
                        <a href=https://wa.me/+6282373784348"" class="bg-red-600 text-white px-4 py-2 rounded-3xl"> Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- Carousel Section -->
        <div id="default-carousel" class="relative w-full " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[500px] md:h-[600px] overflow-hidden rounded-lg md:h-96 ">
                <!-- Item 1 -->
                <div class=" duration-700 ease-in-out active" data-carousel-item>
                    <img src="/img/gorengan.jpg"
                        class=" absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="bg-black bg-opacity-30 absolute inset-0"></div>
                    <div
                        class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl md:text-3xl">
                        Gorengan Murah Meriah</div>
                </div>
                <!-- Item 2 -->
                <div class=" duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/geprex.jpg"
                        class=" absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="bg-black bg-opacity-30 absolute inset-0"></div>
                    <div
                        class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl md:text-3xl">
                        Ayam Geprek Makmur</div>
                </div>
                <!-- Item 3 -->
                <div class=" duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/intel goreng.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="bg-black bg-opacity-30 absolute inset-0"></div>
                    <div
                        class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl md:text-3xl">
                        Intel Goreng Spesial</div>
                </div>
                <!-- Item 4 -->
                <div class="  duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/sate.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="bg-black bg-opacity-30 absolute inset-0"></div>
                    <div
                        class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl md:text-3xl">
                        Sate Khas Makmur</div>
                </div>
                <!-- Item 5 -->
                <div class="  duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/sopayam.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="bg-black bg-opacity-30 absolute inset-0"></div>
                    <div
                        class="absolute inset-0 flex items-center justify-center text-white font-bold text-xl md:text-3xl">
                        Sop Ayam Nagih</div>
                </div>
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <!-- Promo Section -->
    <section id="promo" class="py-16">
        <div class="container mx-34 mb-6 ">
            <h2 class="text-3xl font-bold text-center mb-10">Promo Beredar</h2>
            <div class="grid mt-10 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                @foreach ($promo as $item)
                    <div
                        class="bg-white shadow-md rounded-lg overflow-hidden mx-6 my-6 hover:scale-90 transition-all duration-300">
                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover"
                            alt="Gambar Promo" />
                        <div class="p-4">
                            <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                            <p class="text-gray-600 mt-2">{!! Str::limit($item->deskripsi, 200) !!}</p>
                            <div class="mt-4">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Review Section -->
    <section id="review">
        <h2 class="text-3xl font-bold text-center mb-10">Apa Kata Mereka?</h2>
        <div class="relative w-full glide-08">
            <!-- Slides -->
            <div class="overflow-hidden text-center  bg-white rounded shadow-2xl shadow-slate-200 text-slate-500 "
                data-glide-el="track">
                <ul
                    class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                    <li>
                        <div class="w-full">
                            <!-- Start Testimonial -->
                            <div class="overflow-hidden">
                                <div class="relative p-6">
                                    <figure class="relative z-10">
                                        <blockquote class="p-6 text-lg leading-loose lg:text-xl">
                                            <p class="w-108">"Enak dan terjangkau! Nasi Ekonomi Makmur selalu jadi
                                                pilihan saat ingin makan nasi rumahan yang lezat. Harganya pas di
                                                kantong dan porsinya cukup mengenyangkan. Cita rasa tradisionalnya enak
                                                banget!"</p>
                                        </blockquote>
                                        <figcaption
                                            class="flex flex-col items-center gap-2 p-6 text-sm text-emerald-500">
                                            <span class="flex gap-1 text-amber-400" role="img"
                                                aria-label="Rating: 3 out of 5 stars">
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg></span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg></span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                        </div>
                    </li>
                    <li>
                        <div class="w-full">
                            <!-- Start Testimonial -->
                            <div class="overflow-hidden ">
                                <div class="relative p-6">
                                    <figure class="relative z-10">
                                        <blockquote class="p-6 text-lg leading-loose lg:text-xl">
                                            <p>"Sudah langganan sejak lama! Makanan di sini selalu enak dan bikin
                                                kangen. Porsi besar, rasa mantap, dan harganya bersahabat. Tempatnya
                                                sederhana, tapi selalu nyaman. Recommended banget!"
                                            </p>
                                        </blockquote>
                                        <figcaption
                                            class="flex flex-col items-center gap-2 p-6 text-sm text-emerald-500">
                                            <span class="flex gap-1 text-amber-400" role="img"
                                                aria-label="Rating: 3 out of 5 stars">
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg></span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg></span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                    </svg>
                                                </span>
                                            </span>

                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                        </div>
                    </li>
                    <li>
                        <div class="w-full">
                            <!-- Start Testimonial -->
                            <div class="overflow-hidden">
                                <div class="relative p-6">
                                    <figure class="relative z-10">
                                        <blockquote class="p-6 text-lg leading-loose lg:text-xl">
                                            <p>"Rasanya oke, harga murah, tapi tempatnya kadang terlalu ramai. Makanan
                                                enak dengan harga terjangkau, tapi kadang harus sabar menunggu meja
                                                kosong. Cocok untuk makan cepat dan murah."
                                            </p>
                                        </blockquote>
                                        <figcaption
                                            class="flex flex-col items-center gap-2 p-6 text-sm text-emerald-500">
                                            <span class="flex gap-1 text-amber-400" role="img"
                                                aria-label="Rating: 3 out of 5 stars">
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg></span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                        <path fill-rule="evenodd"
                                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                            clip-rule="evenodd" />
                                                    </svg></span>
                                                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- End Testimonial -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Indicators -->
            <div class="flex items-center justify-center w-full gap-2 pt-6" data-glide-el="controls[nav]">
                <button class="p-4 group" data-glide-dir="=0" aria-label="goto slide 1"><span
                        class="block w-2 h-2 transition-colors duration-300 rounded-full opacity-70 ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                <button class="p-4 group" data-glide-dir="=1" aria-label="goto slide 2"><span
                        class="block w-2 h-2 transition-colors duration-300 rounded-full opacity-70 ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
                <button class="p-4 group" data-glide-dir="=2" aria-label="goto slide 3"><span
                        class="block w-2 h-2 transition-colors duration-300 rounded-full opacity-70 ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

        <script>
            var glide07 = new Glide('.glide-08', {
                type: 'slider',
                focusAt: 'center',
                perView: 1,
                autoplay: 3500,
                animationDuration: 700,
                gap: 0,
                classes: {
                    activeNav: '[&>*]:bg-slate-700',
                },
            });

            glide07.mount();
        </script>
    </section>


    <!-- About Section -->
    <section id="about" class="py-20 relative">
        <img src="/img/asset1.png" alt="asset" class="w-72 absolute top-0 right-0 z-[-1] -rotate-180">
        <div class="items-center container mx-auto">
            <h2 class="text-3xl font-bold mb-16 text-center">Tentang Kami</h2>
            <div class="flex flex-col justify-evenly lg:flex-row items-center lg:items-start gap-8 lg:gap-8">
                <!-- Gambar -->
                <div
                    class="rounded-md overflow-hidden w-60 h-60 lg:w-2/5 lg:h-full shadow-lg hover:scale-90 transition-all duration-300">
                    <img src="img/ekonomi.jpg" alt="About Us Image"
                        class="w-full h-full hover:scale-125 hover:rotate-6 transition-all duration-300" />
                </div>
                <!-- Deskripsi -->
                <div class="text-center lg:text-left max-w-lg">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        <span class="font-bold text-xl">Nasi Ekonomi Makmur</span> adalah UMKM yang bergerak di bidang
                        kuliner,
                        khususnya penyediaan makanan rumahan dengan cita rasa tradisional yang lezat dan harga
                        terjangkau. <br /><br />
                        Berdiri sejak tahun <span class="font-bold">2003</span>,
                        warung ini telah menjadi pilihan utama masyarakat sekitar untuk menikmati hidangan sederhana
                        namun menggugah selera.
                        <br><br>
                        <span class="font-bold">Tentunya Murah, Enak dan Kenyang!</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-red-600 text-white py-6">
        <div class="container mx-auto text-center">
            <img src="img/logo.png" alt="logo" class="w-32 mx-auto mb-4">
            <p>Hubungi kami sekarang :</p>
            <div class="flex items-center justify-center gap-4">
                <a href="https://instagram.com/" >
                    <img src="img/instagram.png" class="w-8" alt="instagram">
                </a>
                <a href="https://wa.me/+6282373784348" >
                    <img src="img/whatsapp.png" class="w-6" alt="whatsapp">
                </a>
                <a href="mailto:EkonomiMakmur@gmail.com">
                    <img src="img/gmail.png" class="w-8" alt="email">
                </a>
            </div>
            <p>&copy; Copyright 2025 <b>Nasi Ekonomi Makmur</b> All rights reserved.</p>
            </p>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</html>
