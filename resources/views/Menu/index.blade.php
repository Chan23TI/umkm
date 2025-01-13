<x-app-layout>
    <head>
        <!-- Tambahkan Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>
    <!-- Full background merah -->
    <div class="w-full h-screen bg-red-500 flex items-center justify-center relative overflow-hidden">
        <!-- Ornamen lingkaran oranye -->
        <div class="absolute top-0 left-0 w-48 h-48 bg-orange-400 opacity-50 rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-orange-400 opacity-50 rounded-full translate-x-16 translate-y-16"></div>

        <!-- Ornamen garis-garis oranye -->
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center z-0 opacity-10">
            <div class="w-full h-1 bg-orange-400 mb-6"></div>
            <div class="w-full h-1 bg-orange-400 mb-6"></div>
            <div class="w-full h-1 bg-orange-400 mb-6"></div>
        </div>

        <!-- Konten -->
        <div class="w-[90%] max-w-5xl h-[80%] bg-white rounded-3xl shadow-xl overflow-hidden relative z-10 flex flex-col">
            <!-- Judul -->
            <div class="py-4 bg-orange-500 text-white text-center">
                <h1 class="text-3xl font-extrabold" style="font-family: 'Dancing Script', cursive;">
                    Daftar Menu
                </h1>
            </div>

            <!-- Konten Scrollable -->
            <div class="flex-1 overflow-y-auto p-6 space-y-6">
                <a href="{{ route('menu.create') }}"
                   class="mb-4 inline-block px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-600">Tambah Menu</a>

                @if (session('success'))
                    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($menu as $item)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="relative h-48">
                                @if ($item->gambar)
                                    <img src="{{ Storage::url($item->gambar) }}" alt="{{ $item->nama }}" class="h-full w-full object-cover">
                                @else
                                    <div class="h-full w-full flex items-center justify-center bg-gray-200">
                                        <span class="text-gray-500">Tidak ada gambar</span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <!-- Nama menu tanpa font kaligrafi -->
                                <h2 class="text-lg font-semibold text-gray-800">
                                    {{ $item->nama }}
                                </h2>
                                <p class="text-gray-600 mt-2">{{ $item->deskripsi }}</p>
                                <!-- Harga dengan warna hitam -->
                                <p class="text-black font-bold mt-4">Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                                <div class="mt-4 flex justify-between items-center">
                                    <a href="{{ route('menu.edit', $item->id) }}"
                                       class="inline-block px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">Edit</a>
                                    <form action="{{ route('menu.destroy', $item->id) }}"
                                          method="POST"
                                          class="inline-block"
                                          onsubmit="return confirm('Yakin ingin menghapus menu ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- <!-- Tombol Tambah Menu -->
            <div class="absolute bottom-4 right-4">
                <a href="{{ route('menu.create') }}"
                   class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full shadow-lg transition">
                    Tambah Menu
                </a>
            </div> --}}
        </div>
    </div>
</x-app-layout>
