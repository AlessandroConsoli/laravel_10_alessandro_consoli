<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

        //*! ROTTE DI TIPO GET
//*? PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//*? ProductController
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'newProduct'])->name('product.create')->middleware('auth');

//? ArticleController
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

        //*! ROTTE DI TIPO POST
//*? ProductController
Route::post('product/create', [ProductController::class, 'store'])->name('product.store')->middleware('auth');

//? ArticleController
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
