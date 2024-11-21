<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NomorAntrianController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', DashboardController::class)->name('index');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('dokters', DokterController::class);
Route::get('/dokters', [DokterController::class, 'dokters'])->name('dokters.dokters');
Route::resource('pasiens', PasienController::class);
Route::get('/pendaftaran', [DokterController::class, 'dokters'])->name('pasiens.pasiens');
Route::resource('nomorantrians', NomorAntrianController::class);


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', DashboardController::class)->name('admin.index');
    Route::get('/pendaftaran', [AdminController::class, 'pendaftaran'])->name('admin.pendaftaran');
    Route::get('/celender', [AdminController::class, 'celender'])->name('admin.celender');
    Route::get('/pendaftaran', [PasienController::class, 'create'])->name('pendaftaran');
    Route::get('/nomor-antrian', [NomorAntrianController::class, 'NomorAntrian'])->name('admin.NomorAntrian');
    Route::get('/data-pasien', [PasienController::class, 'pasiens'])->name('admin.data-pasien');
    
    Route::prefix('pasiens')->group(function () {
        Route::get('/nomor-antrian', [PasienController::class, 'showNomorAntrian'])->name('NomorAntrianPasien');
    });
    
    Route::prefix('dokters')->group(function () {
        Route::get('/nomor-antrian', [DokterController::class, 'showNomorAntrian'])->name('NomorAntrianDokter');
    });    
    
    Route::prefix('admin-role')->group(function () {
        Route::get('/dokters', [DokterController::class, 'index'])->name('admin-role.dokters');
    });
    
    Route::prefix('admin')->group(function () {
        Route::get('/dokters', [DokterController::class, 'dokters'])->name('admin.dokters');
    });
});

Route::prefix('user')->middleware(['auth', 'isUser'])->name('user.')->group(function () {
    Route::get('/', DashboardController::class)->name('index');
    Route::get('/pendaftaran', [UserController::class, 'pendaftaran'])->name('pendaftaran');
    Route::get('/celender', [AdminController::class, 'celender'])->name('celender');
    Route::get('/dokter', [DokterController::class, 'showForUser'])->name('user.dokter');
    Route::get('/pendaftaran', [PasienController::class, 'create'])->name('pendaftaran');
});
