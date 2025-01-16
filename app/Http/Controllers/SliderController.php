<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        return view('slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $slider = new Slider();
        $slider->judul = $request->judul;
        $slider->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $slider->gambar = $request->file('gambar')->store('images', 'public');
        }

        $slider->save();
        return redirect()->route('slider.index')->with('success', 'Slider berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'judul' => 'string|max:255|nullable',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $slider->judul = $request->judul;
        $slider->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            if ($slider->gambar) {
                Storage::delete('public/' . $slider->gambar);
            }
            $slider->gambar = $request->file('gambar')->store('images', 'public');
        }

        $slider->save();
        return redirect()->route('slider.index')->with('success', 'Slider berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        if ($slider->gambar) {
            Storage::delete('public/' . $slider->gambar);
        }
        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'Slider berhasil dihapus.');
    }
}
