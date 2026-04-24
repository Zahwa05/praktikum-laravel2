<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function(){
    return ("ini adalah halaman produk");
});

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/showproduk', [ProdukController::class, 'show']);

Route::get('/viewproduk', [ProdukController::class, 'view']);