<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Models\Produk;
use App\Models\Kategori;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard', [
            'jumlahProduk' => Produk::count(),
            'jumlahKategori' => Kategori::count(),
        ]);
    })->name('dashboard');

    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
});
