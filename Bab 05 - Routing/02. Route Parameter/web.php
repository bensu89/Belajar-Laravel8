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


// ====================
// ## Route Parameter ##

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a,$b) {
    echo "Cek sisa stok untuk $a $b";
});