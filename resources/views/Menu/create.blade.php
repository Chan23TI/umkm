<x-app-layout>
    <head>
        <!-- Tambahkan Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>
    <!-- Full background merah -->
    <div class="w-full h-screen bg-red-500 flex items-center justify-center relative overflow-hidden">
        <!-- Ornamen oranye -->
        <div class="absolute top-0 left-0 w-48 h-48 bg-orange-400 opacity-50 rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-orange-400 opacity-50 rounded-full translate-x-16 translate-y-16"></div>

        <!-- Form di tengah -->
        <div class="max-w-2xl w-full mx-auto p-6 bg-white rounded-lg shadow-lg relative z-10">
            <h1 class="text-3xl font-extrabold text-orange-500 mb-6 text-center" style="font-family: 'Dancing Script', cursive;">
                Tambah Menu
            </h1>
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Makanan</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                           class="block w-full mt-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" required />
                </div>
                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" id="harga" name="harga" value="{{ old('harga') }}"
                           class="block w-full mt-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" required />
                </div>
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"
                              class="block w-full mt-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" required>{{ old('deskripsi') }}</textarea>
                </div>
                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" id="gambar" name="gambar"
                           class="block w-full mt-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" accept="image/*" />
                </div>
                <button type="submit" class="w-full py-3 bg-orange-500 text-white font-semibold rounded-md hover:bg-orange-600 transition-all">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
