<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/menu', function () {
    return view('menu');
});

Route::resource('menu', MenuController::class)->only(['index','create','store','edit','destroy','update']);
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::resource('menu', MenuController::class)->except(['show']);
Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');

require __DIR__.'/auth.php';
