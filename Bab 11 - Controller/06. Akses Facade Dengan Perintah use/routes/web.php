<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;

Route::get('/', [PageController::class,'index']);
Route::get('/mahasiswa',[PageController::class,'tampil']);
Route::get('/coba-facade',[PageController::class,'cobaFacade']);
