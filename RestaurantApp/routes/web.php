<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

/* Route::get('/', function () {
    return view('welcome');
}); */



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/cart/add', [CartController::class, 'add']);
    // Ajoute aussi les autres routes si besoin (update, remove, etc.)
});

require __DIR__.'/auth.php';

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class,'index'])->name('menu');
Route::get('/category/{category}',[ProductController::class,'byCategory']);