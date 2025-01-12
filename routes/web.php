<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;




Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/categories', [BlogController::class, 'categoryIndex'])->name('blog.categoryIndex');
Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
