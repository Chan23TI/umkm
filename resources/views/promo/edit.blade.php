<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <img src="/img/asset1.png" alt="asset" class="w-52 absolute top-0 right-0 rotate-180 mt-16">
        <img src="/img/asset1.png" alt="asset" class="w-52 absolute bottom-0 left-0">
        <h1 class="text-2xl font-bold mb-4">Edit Promo</h1>

            <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf


                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-medium">Judul</label>
                    <input type="text" name="judul" value="{{ $promo->judul }}"
                        class="mt-1 block w-full border-gray-300 rounded-md" required />
                    @error('judul')
                        <span class="bg-red-500  text-white px-4 py-2 rounded">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Isi promo</label>
                    <textarea name="deskripsi" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $promo->deskripsi }}</textarea>
                    @error('deskripsi')
                        <span class="bg-red-500  text-white px-4 py-2 rounded">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                    @if ($promo->gambar)
                        <img src="{{ Storage::url($promo->gambar) }}" class="h-48 mt-2" alt="Gambar Promo" />
                    @endif
                    @error('gambar')
                        <span class="bg-red-500  text-white px-4 py-2 rounded">{{ $message }}</span>
                    @enderror
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
    </script>
</x-app-layout>
