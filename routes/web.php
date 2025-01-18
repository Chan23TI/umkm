<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    $promo = \App\Models\Promo::all();
    $aboutUs = \App\Models\AboutUs::all();
    $kontak = \App\Models\Kontak::all();
    $gambar = \App\Models\Gambar::all();
    $menu = \App\Models\Menu::all();
    $slider = \App\Models\Slider::all();
    $review = \App\Models\Review::all();
    return view('welcome', compact('promo','aboutUs','kontak','gambar','menu','slider','review'));
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
    Route::resource('menu', MenuController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('about', AboutUsController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('kontak', kontakController::class);
    Route::resource('gambar', GambarController::class);
});


require __DIR__.'/auth.php';
