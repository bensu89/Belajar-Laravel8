<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/',            [MahasiswaController::class,'index']);
Route::get('/proses-form', [MahasiswaController::class,'prosesForm']);

