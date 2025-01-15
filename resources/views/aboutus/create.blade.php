<x-app-layout>
    <head>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>

    <div class="w-full h-screen bg-red-500 flex items-center justify-center relative overflow-hidden">
        <!-- Ornamen Oranye -->
        <div class="absolute top-0 left-0 w-48 h-48 bg-orange-400 opacity-50 rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-orange-400 opacity-50 rounded-full translate-x-16 translate-y-16"></div>

        <!-- Form Tambah About Us -->
        <div class="max-w-2xl w-full mx-auto p-6 bg-white rounded-lg shadow-lg relative z-10">
            <h1 class="text-3xl font-extrabold text-orange-500 mb-6 text-center" style="font-family: 'Dancing Script', cursive;">
                Tambah About Us
            </h1>
            <form method="POST" action="{{ route('aboutus.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Input Isi -->
                <div>
                    <label for="isi" class="block text-sm font-medium text-gray-700">Isi</label>
                    <textarea name="isi" id="isi" placeholder="Masukkan deskripsi" class="block w-full mt-2 border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-orange-400">{{ old('isi') }}</textarea>
                    <x-input-error :messages="$errors->get('isi')" class="mt-2 text-red-500" />
                </div>

                <!-- Input Gambar -->
                <div class="mt-4">
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" id="gambar" name="gambar"
                        class="block w-full mt-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" accept="image/*" />
                    <x-input-error :messages="$errors->get('gambar')" class="mt-2 text-red-500" />
                </div>

                <!-- Tombol Submit -->
                <x-primary-button class="mt-4 bg-orange-500 text-white hover:bg-orange-600 border-none rounded-md px-4 py-2 transition-all ease-in-out w-full">
                    Simpan
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
