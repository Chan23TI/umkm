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
            <!-- Judul -->
            <h1 class="text-3xl font-extrabold text-orange-500 mb-6 text-center" style="font-family: 'Dancing Script', cursive;">
                Edit Review
            </h1>
            <!-- Form -->
            <form method="POST" action="{{ route('review.update', $review->id) }}">
                @csrf
                @method('PUT')

                <div class="mt-4">
                    <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                    <textarea name="review" id="review" rows="4"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $review->review }}</textarea>
                    <x-input-error :messages="$errors->get('review')" class="mt-2" />
                </div>

                <!-- Tombol Edit dan Delete -->
                <div class="mt-6 flex justify-end space-x-4">
                    <!-- Tombol Edit -->
                    <button type="submit" class="bg-orange-500 text-white hover:bg-orange-600 border-none rounded-md px-4 py-2 transition-all ease-in-out">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

            <!-- Form untuk Delete -->
            <form method="POST" action="{{ route('review.destroy', $review->id) }}" class="mt-2 flex justify-end" onsubmit="return confirm('Apakah Anda yakin ingin menghapus review ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white hover:bg-red-600 border-none rounded-md px-4 py-2 transition-all ease-in-out">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
