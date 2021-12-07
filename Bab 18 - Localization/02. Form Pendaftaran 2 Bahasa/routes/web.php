<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-pendaftaran',[MahasiswaController::class,'formPendaftaran']);
Route::post('/proses-form',    [MahasiswaController::class,'prosesForm']);
