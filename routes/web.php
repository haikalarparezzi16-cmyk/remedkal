<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'beranda']);
Route::get('/menu', [FrontController::class, 'menu']);
Route::get('/kontak', [FrontController::class, 'kontak']);
Route::get('/pemesanan/{id}', [FrontController::class, 'detailPemesanan'])
    ->name('pemesanan.detail');
