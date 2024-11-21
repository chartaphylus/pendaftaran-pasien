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

// Halaman depan
Route::get('/', function () {
    return view('/halamanDepan');
});

// Halaman login
Route::get('/login', function () {
    return view('/auth/login');
});

// Route autentikasi
Auth::routes();

// Route utama
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', DashboardController::class)->name('index');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Resource routes untuk dokter, pasien, dan nomor antrian
Route::resource('dokters', DokterController::class);
Route::get('/dokters', [DokterController::class, 'dokters'])->name('dokters.dokters');
Route::resource('pasiens', PasienController::class);
Route::get('/pendaftaran', [DokterController::class, 'dokters'])->name('pasiens.pasiens');
Route::resource('nomorantrians', NomorAntrianController::class);

// Group routes untuk admin dengan middleware isAdmin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', DashboardController::class)->name('admin.index');
    
    // Admin specific routes
    Route::get('/pendaftaran', [AdminController::class, 'pendaftaran'])->name('admin.pendaftaran');
    Route::get('/celender', [AdminController::class, 'celender'])->name('admin.celender');
    Route::get('/pendaftaran', [PasienController::class, 'create'])->name('pendaftaran');
    Route::get('/nomor-antrian', [NomorAntrianController::class, 'NomorAntrian'])->name('admin.NomorAntrian');
    Route::get('/data-pasien', [PasienController::class, 'pasiens'])->name('admin.data-pasien');
    
    // Nomor Antrian routes
    Route::prefix('nomorantrians')->group(function () {
        Route::get('/nomor-antrian', [NomorAntrianController::class, 'NomorAntrian'])->name('nomorantrians.NomorAntrian');
    });

    // Dokter management routes
    Route::prefix('admin-role')->group(function () {
        Route::get('/dokters', [DokterController::class, 'index'])->name('admin-role.dokters');
    });

    // Admin specific doktor route
    Route::prefix('admin')->group(function () {
        Route::get('/dokters', [DokterController::class, 'dokters'])->name('admin.dokters');
    });
});

// Group routes untuk user dengan middleware isUser
Route::prefix('user')->middleware(['auth', 'isUser'])->name('user.')->group(function () {
    Route::get('/', DashboardController::class)->name('index');
    
    // User specific routes
    Route::get('/pendaftaran', [UserController::class, 'pendaftaran'])->name('pendaftaran');
    Route::get('/celender', [AdminController::class, 'celender'])->name('celender');
    Route::get('/dokter', [DokterController::class, 'showForUser'])->name('user.dokter');
    Route::get('/pendaftaran', [PasienController::class, 'create'])->name('pendaftaran');
});
