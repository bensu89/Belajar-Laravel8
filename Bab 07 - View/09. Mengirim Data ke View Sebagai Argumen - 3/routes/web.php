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

  $arrMahasiswa = [
    "mahasiswa01" => "Risa Lestari",
    "mahasiswa02" => "Rudi Hermawan",
    "mahasiswa03" => "Bambang Kusumo",
    "mahasiswa04" => "Lisa Permata"
  ];

 return view('universitas.mahasiswa', $arrMahasiswa);
});