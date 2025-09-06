<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

// ===================
// Guest Routes
// ===================
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

// ===================
// Auth Routes
// ===================
Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Pasien
    Route::prefix('data-pasien')->group(function () {
        Route::get('/', [PasienController::class,'index'])->name('pasien.index');
        Route::get('/create', [PasienController::class,'create'])->name('pasien.create');
        Route::post('/create', [PasienController::class,'store'])->name('pasien.store');
        Route::get('/edit/{pasien}', [PasienController::class,'edit'])->name('pasien.edit');
        Route::put('/edit/{pasien}', [PasienController::class,'update'])->name('pasien.update');
        Route::delete('/delete/{pasien}', [PasienController::class,'destroy'])->name('pasien.destroy');
    });

    // Rumah Sakit
    Route::prefix('data-rumah-sakit')->group(function () {
        Route::get('/', [RumahSakitController::class,'index'])->name('rumahSakit.index');
        Route::get('/create', [RumahSakitController::class,'create'])->name('rumahSakit.create');
        Route::post('/create', [RumahSakitController::class,'store'])->name('rumahSakit.store');
        Route::get('/edit/{id}', [RumahSakitController::class,'edit'])->name('rumahSakit.edit');
        Route::put('/edit/{id}', [RumahSakitController::class,'update'])->name('rumahSakit.update');
        Route::delete('/delete/{id}', [RumahSakitController::class,'destroy'])->name('rumahSakit.destroy');
    });

});