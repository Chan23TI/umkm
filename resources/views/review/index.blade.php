<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Daftar review</h1>
    <img src="/img/asset1.png" alt="asset" class="w-52 absolute top-0 right-0 rotate-180 mt-16">
    <img src="/img/asset1.png" alt="asset" class="w-52 fixed bottom-0 left-0">
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('review.create') }}" class="inline-block bg-red-600 text-white px-4 py-2 rounded mb-4">
            Tambah Review
        </a> <!-- Tombol untuk menambah review -->

        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4">
            @foreach ($review as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h3 class="text-lg font-bold">{{ $item->nama }}</h3>
                        <p class="text-gray-600 mt-2">{{ $item->review }}</p>

                        <div class="mt-4">
                            <a href="{{ route('review.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('review.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline ml-2">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
