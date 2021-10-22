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
// ## Route Priority ##

// Route::get('/buku/1', function () {
//     return "Buku ke-1";
// });

// Route::get('/buku/1', function () {
//     return "Buku saya ke-1";
// });

// Route::get('/buku/1', function () {
//     return "Buku kita ke-1";
// });


Route::get('/buku/{a}', function ($a) {
    return "Buku ke-$a";
});

Route::get('/buku/{b}', function ($b) {
    return "Buku saya ke-$b";
});

Route::get('/buku/{c}', function ($c) {
    return "Buku kita ke-$c";
});
