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
// ## Route Bawaan Laravel ##

Route::get('/', function () {
    return view('welcome');
});



// ====================
// ## Membuat Route ##

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/fasilkom/anto', function () {
    echo '<h2 style="text-align: center"><u>Welcome Anto</u></h2>';
});