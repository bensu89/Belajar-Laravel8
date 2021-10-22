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
  return view('universitas.mahasiswa')->with('mahasiswa01', 'Risa Lestari')->with('mahasiswa02', 'Rudi Hermawan')->with('mahasiswa03', 'Bambang Kusumo');
});