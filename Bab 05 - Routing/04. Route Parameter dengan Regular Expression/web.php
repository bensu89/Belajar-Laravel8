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
// ## Route Parameter dengan Regular Expression ##

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');