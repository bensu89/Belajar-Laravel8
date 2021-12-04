<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/daftar-mahasiswa', [MahasiswaController::class,'daftarMahasiswa'])
->middleware('auth');

Route::get('/tabel-mahasiswa',  [MahasiswaController::class,'tabelMahasiswa'])
->middleware('auth');

Route::get('/blog-mahasiswa',   [MahasiswaController::class,'blogMahasiswa'])
->middleware('auth');


use App\Http\Controllers\JurusanController;

Route::get('/', [JurusanController::class,'index'])->middleware('auth');

Route::resource('jurusans',JurusanController::class)->middleware('auth');