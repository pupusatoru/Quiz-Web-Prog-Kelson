<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    CategoryController,
    WriterController,
    DetailController,
    AboutController,
    PopularController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writer.show');
Route::get('/detail/{id}', [DetailController::class, 'show'])->name('detail');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/popular', [PopularController::class, 'index']);
