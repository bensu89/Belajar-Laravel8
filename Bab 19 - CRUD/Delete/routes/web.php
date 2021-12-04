<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswas', [MahasiswaController::class,'index'])
->name('mahasiswas.index');

Route::get('/mahasiswas/create', [MahasiswaController::class,'create'])
->name('mahasiswas.create');

Route::post('/mahasiswas', [MahasiswaController::class,'store'])
->name('mahasiswas.store');

Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class,'show'])
->name('mahasiswas.show');

Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class,'edit'])
->name('mahasiswas.edit');

Route::patch('/mahasiswas/{mahasiswa}', [MahasiswaController::class,'update'])
->name('mahasiswas.update');

Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class,'destroy'])
->name('mahasiswas.destroy');
