<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;


/* Route::get('profil', [ProfilController::class,'index'])->name('user');
Route::get('profil/create', [ProfilController::class,'create'])->name('user');
Route::get('pelanggan', [PelangganController::class,'index'])->name('user');
 */


Route::get('dokter', [DokterController::class,'index'])->name('dokter.index');
Route::get('dokter/create', [DokterController::class,'create'])->name('dokter.create');
//kurung kurawal menunjukkan id yang dinamis
Route::get('dokter/{id}/edit', [DokterController::class,'edit'])->name('dokter.edit');
Route::get('dokter/{id}', [DokterController::class,'show'])->name('dokter.show');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
