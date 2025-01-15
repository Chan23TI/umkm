<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class AboutUsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = AboutUs::all();
        return view('aboutus.index', compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aboutus.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([

        'isi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $aboutUs= new AboutUs();
    if ($request->hasFile('gambar')) {
        $aboutUs->gambar = $request->file('gambar')->store('images', 'public');
    }


    return redirect()->route('aboutus.index')->with('success', 'Data berhasil ditambahkan!');
}

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aboutus = AboutUs::findOrFail($id);
        return view('aboutus.edit', compact('aboutus'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'isi' => 'required|string',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
    ]);

    $aboutus = AboutUs::findOrFail($id);

    // Cek apakah ada file gambar baru yang diunggah
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($aboutus->gambar) {
            Storage::delete($aboutus->gambar);
        }

        // Simpan gambar baru
        $gambarPath = $request->file('gambar')->store('aboutus');
        $aboutus->gambar = $gambarPath;
    }

    // Update isi
    $aboutus->isi = $request->isi;
    $aboutus->save();

    return redirect()->route('aboutus.index')->with('success', 'Data berhasil diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        if ($aboutUs->gambar) {
            Storage::delete('public/' . $aboutUs->gambar);
        }

        $aboutUs->delete();
        return redirect()->route('aboutus.index')->with('success', 'Au berhasil dihapus!');
    }
}
