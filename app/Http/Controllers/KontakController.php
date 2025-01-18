<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::all();
        return view('kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ig' => 'required|string|max:255',
            'wa' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tahun' => 'required|string|max:255',
        ]);

        $kontak = new Kontak();
        $kontak->ig=$request->ig;
        $kontak->wa = $request->wa;
        $kontak->email = $request->email;
        $kontak->alamat = $request->alamat;
        $kontak->tahun = $request->tahun;

        $kontak->save();
        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        return view('kontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'ig' => 'required|string|max:255',
            'wa' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'tahun' => 'required|string|max:255',
        ]);

        $kontak->ig = $request->ig;
        $kontak->wa = $request->wa;
        $kontak->email = $request->email;
        $kontak->alamat = $request->alamat;
        $kontak->tahun = $request->tahun;

        $kontak->save();
        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('kontak.index')->with('success', 'Kontak berhasil dihapus!');

    }
}
