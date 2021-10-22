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
// ## Route Group ##

Route::get('/admin/mahasiswa', function () {
    return "<h1>Daftar Mahasiswa</h1>";
});

Route::get('/admin/dosen', function () {
    return "<h1>Daftar Dosen</h1>";
});

Route::get('/admin/karyawan', function () {
     return "<h1>Daftar Karyawan</h1>";
});


Route::prefix('/admin')->group(function () {

    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });

    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function () {
    echo "<h1>Daftar Karyawan</h1>";
    });

});
