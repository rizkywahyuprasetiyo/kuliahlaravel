<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('hai');
});

Route::get('/mobil', function () {
    return view('/mobil/data_mobil');
});

Route::get('/hai', [TestController::class, 'hai']);

Route::get('/sapanama', [TestController::class, 'sapadata']);

Route::get('produk/{id}', [TestController::class, 'produk']);

Route::get('/halaman1', [HalamanController::class, 'halaman1']);
Route::get('/halaman2', [HalamanController::class, 'halaman2']);
Route::get('/halaman3', [HalamanController::class, 'halaman3']);
