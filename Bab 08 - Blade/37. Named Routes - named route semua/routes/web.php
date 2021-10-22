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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo", 
                     "Lisa Permata"];
  
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
})->name('mahasiswa');

Route::get('dosen', function () {
    $arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.","Dr. Umar Agustinus", 
                 "Dr. Syahrial, M.Kom."];
  
    return view('dosen')->with('dosen', $arrDosen);
})->name('dosen');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');
