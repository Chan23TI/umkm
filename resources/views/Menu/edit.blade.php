<x-app-layout>
<<<<<<< HEAD
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Menu</h1>
        <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama Makanan</label>
                <input type="text" name="nama_menu" value="{{ $menu->nama }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Harga</label>
                <input type="text" name="harga" value="{{ $menu->harga }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $menu->deskripsi }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @if ($menu->gambar)
                    <img src="{{ Storage::url($menu->gambar) }}" class="h-48 mt-2" alt="Gambar Menu" />
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
=======
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
                Edit Menu
            </h1>

            <!-- Tampilkan Pesan Error atau Sukses -->
            @if (session('success'))
                <div class="bg-green-500 text-white p-3 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @elseif ($errors->any())
                <div class="bg-red-500 text-white p-3 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Makanan</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $menu->nama) }}"
                           class="block w-full mt-1 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" required />
                </div>

                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" id="harga" name="harga" value="{{ old('harga', $menu->harga) }}"
                           class="block w-full mt-1 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" required />
                </div>

                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea id="editor" name="deskripsi" rows="5"
                              class="block w-full mt-1 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" required>{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                </div>

                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" id="gambar" name="gambar"
                           class="block w-full mt-1 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400 p-3 transition-all" accept="image/*" />
                    @if ($menu->gambar)
                        <img src="{{ Storage::url($menu->gambar) }}" class="h-48 mt-4 rounded-lg shadow-md" alt="Gambar Menu" />
                    @endif
                </div>

                <button type="submit" class="px-6 py-2 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition-all duration-300 ease-in-out w-full">
                    Update
                </button>
            </form>
        </div>
    </div>

    <!-- Script untuk ClassicEditor -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error('Editor Error:', error);
                });
        });
>>>>>>> 56ba6fb (yola ok)
    </script>
</x-app-layout>
