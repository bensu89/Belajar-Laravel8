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
// ## Melihat Daftar Route ##

Route::get('/', function () {
  return view('welcome');
});

Route::get('hello', function () {
  return 'Hello World';
});

Route::get('belajar', function () {
  echo '<h1>Hello World</h1>';
  echo '<p>Sedang belajar Laravel</p>';
});

Route::get('mahasiswa/fasilkom/anto', function () {
  return '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
});

Route::get('mahasiswa/{nama}', function ($nama) {
  return "Tampilkan data mahasiswa bernama $nama";
});
