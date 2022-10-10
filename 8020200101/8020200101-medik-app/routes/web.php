<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;


Route::get('profil', [ProfilController::class,'index'])->name('user');

Route::get('profil/create', [ProfilController::class,'create'])->name('user');
Route::get('pelanggan', [PelangganController::class,'index'])->name('user');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
