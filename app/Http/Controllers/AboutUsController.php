<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('aboutus.index', compact('aboutUs'));
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
            'isidua' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $aboutUs = new AboutUs();
        $aboutUs->isi = $request->isi;
        $aboutUs->isidua = $request->isidua;

        if ($request->hasFile('gambar')) {
            $aboutUs->gambar = $request->file('gambar')->store('images', 'public');
        }

        $aboutUs->save();
        return redirect()->route('about.index')->with('success', 'About berhasil ditambahkan.');
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
        $aboutUs = AboutUs::findOrFail($id);
        return view('aboutus.edit', compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'isi' => 'string|required',
            'isidua' => 'string|required',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $aboutUs = AboutUs::findOrFail($id);


        if ($request->hasFile('gambar')) {
            if ($aboutUs->gambar) {
                Storage::delete('public/' . $aboutUs->gambar);
            }
            $aboutUs->gambar = $request->file('gambar')->store('images', 'public');
        }

        $aboutUs->isi = $request->isi;
        $aboutUs->isidua = $request->isidua;
        $aboutUs->save();
        return redirect()->route('about.index')->with('success', 'About berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs, $id)
    {   $aboutUs = AboutUs::findOrFail($id);
        if ($aboutUs->gambar) {
            Storage::delete('public/' . $aboutUs->gambar);
        }

        $aboutUs->delete();
        return redirect()->route('about.index')->with('success', 'About berhasil dihapus.');
    }
}
