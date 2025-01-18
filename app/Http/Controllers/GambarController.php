<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambar = Gambar::all();
        return view('gambar.index', compact('gambar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $gambar = new Gambar();
        $gambar->logo = $gambar->logo;
        $gambar->gambar = $gambar->gambar;

        if ($request->hasFile('gambar')) {
            $gambar->gambar = $request->file('gambar')->store('images', 'public');
        }

        if ($request->hasFile('logo')) {
            $gambar->logo = $request->file('logo')->store('images', 'public');
        }

        $gambar->save();
        return redirect()->route('gambar.index')->with('success', 'Gambar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gambar $gambar)
    {
        return view('gambar.edit', compact('gambar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gambar $gambar)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $gambar->logo = $gambar->logo;
        $gambar->gambar = $gambar->gambar;

        if ($request->hasFile('gambar')) {
            $gambar->gambar = $request->file('gambar')->store('images', 'public');
        }

        if ($request->hasFile('logo')) {
            $gambar->logo = $request->file('logo')->store('images', 'public');
        }

        $gambar->save();
        return redirect()->route('gambar.index')->with('success', 'Gambar berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gambar $gambar)
    {
        $gambar->delete();
        return redirect()->route('gambar.index')->with('success', 'Gambar berhasil dihapus!');
    }
}
