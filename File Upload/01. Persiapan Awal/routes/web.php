<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

Route::get('/file-upload',  [FileUploadController::class,'fileUpload']);
Route::post('/file-upload', [FileUploadController::class,'prosesfileUpload']);
