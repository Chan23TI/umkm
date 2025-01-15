<x-app-layout>
    <head>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>

    <div class="w-full h-screen bg-red-500 flex items-center justify-center relative overflow-hidden">
        <!-- Ornamen Oranye -->
        <div class="absolute top-0 left-0 w-48 h-48 bg-orange-400 opacity-50 rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-orange-400 opacity-50 rounded-full translate-x-16 translate-y-16"></div>

        <!-- Form Edit About Us -->
        <div class="max-w-2xl w-full mx-auto p-6 bg-white rounded-lg shadow-lg relative z-10">
            <h1 class="text-3xl font-extrabold text-orange-500 mb-6 text-center" style="font-family: 'Dancing Script', cursive;">
                Edit About Us
            </h1>
            <form method="POST" action="{{ route('aboutus.update', $aboutus->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mt-4">
                    <label for="aboutus" class="block text-sm font-medium text-gray-700">About Us</label>
                    <textarea name="isi" id="isi" rows="4"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm">{{ $aboutus->isi }}</textarea>
                    <x-input-error :messages="$errors->get('isi')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" id="gambar" name="gambar"
                        class="block w-full mt-1 border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                    @if ($aboutus->gambar)
                        <img src="{{ Storage::url($aboutus->gambar) }}" alt="Gambar" class="w-32 mt-2">
                    @endif
                </div>

                <button type="submit" class="mt-4 bg-orange-500 text-white hover:bg-orange-600 rounded-md px-4 py-2">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
