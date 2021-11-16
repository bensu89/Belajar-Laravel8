<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/',                [MahasiswaController::class,'index']);
Route::get('/insert-sql',      [MahasiswaController::class,'insertSql']);
Route::get('/insert-timestamp',[MahasiswaController::class,'insertTimestamp']);
Route::get('/insert-prepared', [MahasiswaController::class,'insertPrepared']);
Route::get('/insert-binding',  [MahasiswaController::class,'insertBinding']);
Route::get('/update',          [MahasiswaController::class,'update']);
Route::get('/delete',          [MahasiswaController::class,'delete']);
Route::get('/select',          [MahasiswaController::class,'select']);
Route::get('/select-tampil',   [MahasiswaController::class,'selectTampil']);
Route::get('/select-view',     [MahasiswaController::class,'selectView']);
Route::get('/select-where',    [MahasiswaController::class,'selectWhere']);
Route::get('/statement',       [MahasiswaController::class,'statement']);
