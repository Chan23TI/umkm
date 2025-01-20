<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promo= Promo::orderBy('created_at', 'desc')->get(); //Menampilkan promo terbaru
        return view('promo.index', compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $promo = new Promo();
        $promo->judul = $request->judul;
        $promo->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $promo->gambar = $request->file('gambar')->store('images', 'public');
        }

        $promo->save();
        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('promo.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $promo->judul = $request->judul;
        $promo->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            if ($promo->gambar) {
                Storage::delete('public/' . $promo->gambar);
            }
            $promo->gambar = $request->file('gambar')->store('images', 'public');
        }

        $promo->save();
        return redirect()->route('promo.index')->with('success', 'Promo berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if ($promo->gambar) {
            Storage::delete('public/' . $promo->gambar);
        }
        $promo->delete();
        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus.');
    }
}
