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
                Tambah Review
            </h1>
            <form method="POST" action="{{ route('review.store') }}">
                @csrf

                <textarea name="review" placeholder="Review anda" class="block w-full mt-4 border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-orange-400">{{ old('review') }}</textarea>
                <x-input-error :messages="$errors->get('review')" class="mt-2 text-red-500" />

                <x-primary-button class="mt-4 bg-orange-500 text-white hover:bg-orange-600 border-none rounded-md px-4 py-2 transition-all ease-in-out w-full">
                    Kirim Review
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
