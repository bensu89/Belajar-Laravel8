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
// ## Route Redirect ##

Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});

Route::redirect('/contact-us', '/hubungi-kami');
