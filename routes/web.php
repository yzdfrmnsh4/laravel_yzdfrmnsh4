<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/data-pasien', [PasienController::class,'index'])->name('pasien.index');
Route::get('/data-pasien/create', [PasienController::class,'create'])->name('pasien.create');
Route::post('/data-pasien/create', [PasienController::class,'store'])->name('pasien.store');
Route::get('/data-pasien/edit/{pasien}', [PasienController::class,'edit'])->name('pasien.edit');
Route::put('/data-pasien/edit/{pasien}', [PasienController::class,'update'])->name('pasien.update');
Route::delete('/data-pasien/delete/{pasien}', [PasienController::class,'destroy'])->name('pasien.destroy');


Route::get('/data-rumah-sakit', [RumahSakitController::class,'index'])->name('rumahSakit.index');
Route::get('/data-rumah-sakit/create', [RumahSakitController::class,'create'])->name('rumahSakit.create');
Route::post('/data-rumah-sakit/create', [RumahSakitController::class,'store'])->name('rumahSakit.store');
Route::get('/data-rumah-sakit/edit/{id}', [RumahSakitController::class,'edit'])->name('rumahSakit.edit');
Route::put('/data-rumah-sakit/edit/{id}', [RumahSakitController::class,'update'])->name('rumahSakit.update');
Route::delete('/data-rumah-sakit/delete/{id}', [RumahSakitController::class,'destroy'])->name('rumahSakit.destroy');


// Route::get('login', [AuthController::class, 'showLogin'])->name('login');

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');