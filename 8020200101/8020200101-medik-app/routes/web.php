<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;


/* Route::get('profil', [ProfilController::class,'index'])->name('user');
Route::get('profil/create', [ProfilController::class,'create'])->name('user');
Route::get('pelanggan', [PelangganController::class,'index'])->name('user');
 */


Route::get('dokter', [DokterController::class,'index'])->name('dokterindex');
Route::get('dokter/create', [DokterController::class,'create'])->name('doktercreate');
Route::get('dokter/1/edit', [DokterController::class,'edit'])->name('dokter1edit');
Route::get('dokter/2', [DokterController::class,'show'])->name('dokter2show');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
