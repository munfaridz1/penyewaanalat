<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaptopController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/kategori', [KategoriController::class, 'list']);
Route::get('/laptop', [LaptopController::class, 'list']);
Route::get('/kategori/{id}', [LaptopController::class, 'list_kategori']);
Route::get('/laptop/{id}', [LaptopController::class, 'detail']);