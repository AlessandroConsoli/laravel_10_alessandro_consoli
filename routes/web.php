<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// ROTTE DI TIPO GET

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'newProduct'])->name('product.create');



// ROTTE DI TIPO POST

Route::post('product/create', [ProductController::class, 'store'])->name('product.store');
