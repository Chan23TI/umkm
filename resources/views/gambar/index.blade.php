<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Gambar</h1>
    <img src="/img/asset1.png" alt="asset" class="w-52 absolute top-0 right-0 rotate-180 mt-16">
    <img src="/img/asset1.png" alt="asset" class="w-52 fixed bottom-0 left-0">
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($gambar->count() > 0)
            {{-- Akses data pertama untuk ID --}}
            <a href="{{ route('gambar.edit', $gambar->first()->id) }}" class="inline-block bg-red-600 text-white px-4 py-2 rounded mb-4">Edit gambar</a>
        @else
            {{-- Jika tidak ada data --}}
            <a href="{{ route('gambar.create') }}" class="inline-block bg-red-600 text-white px-4 py-2 rounded mb-4">Tambah gambar</a>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
            @foreach ($gambar as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h4 class=" font-bold mb-4">Logo UMKM</h4>
                        <img src="{{ Storage::url($item->logo) }}" class="w-full h-48 object-cover" alt="Logo" />
                        <h4 class=" font-bold mb-4">Gambar UMKM</h4>
                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar" />
                        <div class="mt-4">
                            <form action="{{ route('gambar.destroy', $item->id) }}" method="POST" class="inline">
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
