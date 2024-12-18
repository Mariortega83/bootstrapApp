<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [MainController::class, 'main'])->name('main');
Route::resource('product', ProductController::class);
