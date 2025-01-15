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

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
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
                    Daftar Review
                </h1>
            </div>

            <!-- Konten Scrollable -->
            <div class="flex-1 overflow-y-auto p-6 space-y-6">
                @foreach ($review as $review)
                    <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                        <p class="mb-4">{{ $review->review }}</p>
                        <div class="flex space-x-4">
                            <!-- Tombol Edit -->
                            <a href="{{ route('review.edit', $review->id) }}"
                                class="inline-flex items-center px-3 py-2 bg-yellow-400 text-white text-sm font-medium rounded-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2M7 7h10l-1 14H8L7 7z" />
                                </svg>
                                Edit
                            </a>
                            <!-- Tombol Delete -->
                            <form action="{{ route('review.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="inline-flex items-center px-3 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tombol Tambah Review -->
            <div class="absolute bottom-4 right-4">
                <a href="{{ route('review.create') }}"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-full shadow-lg transition">
                    Tambah Review
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
