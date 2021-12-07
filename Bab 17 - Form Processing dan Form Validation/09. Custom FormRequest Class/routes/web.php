<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/',             [MahasiswaController::class,'index']);
Route::post('/proses-form', [MahasiswaController::class,'prosesForm']);
Route::post('/proses-form-validator',[MahasiswaController::class,
'prosesFormValidator']);
Route::post('/proses-form-request', [MahasiswaController::class,
'prosesFormRequest']);
