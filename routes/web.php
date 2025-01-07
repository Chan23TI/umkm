<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $promo = \App\Models\Promo::all();
    return view('welcome', compact('promo'));
});


Route::get('/dashboard', function () {
    $promo = \App\Models\Promo::all();
    return view('promo.index',  compact('promo'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('promo', PromoController::class);
});



require __DIR__.'/auth.php';
