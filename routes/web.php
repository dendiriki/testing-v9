<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\BarangController::class, 'index'])->name('Barang');

Route::post('input', [App\Http\Controllers\BarangController::class, 'tambah_barang'])->name('tambah_barang');

Route::get('transaksi', function () {
    return view('transaksi');
});
