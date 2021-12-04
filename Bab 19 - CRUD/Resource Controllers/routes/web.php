<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::resource('mahasiswas', MahasiswaController::class);
