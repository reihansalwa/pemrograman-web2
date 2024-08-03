<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('/store', [MahasiswaController::class, 'store']);
Route::get('/edit/{mahasiswa}', [MahasiswaController::class, 'edit']);
Route::put('/update/{mahasiswa}', [MahasiswaController::class, 'update']);
Route::delete('/delete/{mahasiswa}', [MahasiswaController::class, 'delete']);
Route::get('/profile', [ProfileController::class, 'index']);
