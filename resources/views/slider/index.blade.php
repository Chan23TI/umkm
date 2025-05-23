<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Slider</h1>
    <img src="/img/asset1.png" alt="asset" class="w-52 absolute top-0 right-0 rotate-180 mt-16">
    <img src="/img/asset1.png" alt="asset" class="w-52 fixed bottom-0 left-0">
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('slider.create') }}" class="inline-block bg-red-600 text-white px-4 py-2 rounded mb-4">
            Tambah Slider
        </a> <!-- Tombol untuk menambah slider -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($slider as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Slider" />
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <p class="text-gray-600 mt-2">{!! Str::limit($item->deskripsi, 200) !!}</p>
                        <div class="mt-4">
                            <a href="{{ route('slider.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('slider.destroy', $item->id) }}" method="POST" class="inline">
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
