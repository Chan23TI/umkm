<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = Review::all();
        return view('review.index', compact('review'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        $review = new Review;
        $review->review=$request->review;
        $review->nama=$request->nama;

        $review->save();
        return redirect()->route('review.index')->with('success', 'Review berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('review.edit', compact('review'));
        //edit pun gabisa ya buat tes
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'review' => 'required|string|max:255',
        ]);

        $review->review = $request->review;
        $review->nama=$request->nama;
        $review->save();
        return redirect()->route('review.index')->with('success', 'Review berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('review.index')->with('success', 'Review berhasil dihapus');
    }
}
