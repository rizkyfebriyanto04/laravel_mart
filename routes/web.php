<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->middleware('guest')->name('home');
Route::post('/order', [HomeController::class, 'simpanorder'])->middleware('guest')->name('simpan.order');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-aksi', [AuthController::class, 'loginaksi'])->name('login.action');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
    Route::post('/simpan-produk', [ProdukController::class, 'simpanproduk'])->name('simpan.produk');
    Route::get('/edit-produk/{id}', [ProdukController::class, 'editProduk'])->name('edit.produk');
    Route::put('/update-produk/{id}', [ProdukController::class, 'updateProduk'])->name('update.produk');
    Route::delete('/delete-produk/{id}', [ProdukController::class, 'deleteproduk'])->name('delete.produk');

    Route::get('/laporan-penjualan', [ProdukController::class, 'lappenjualan'])->name('lap.penjualan');

    Route::get('/logoutaksi', [AuthController::class, 'logoutaksi'])->name('logoutaksi');
});


