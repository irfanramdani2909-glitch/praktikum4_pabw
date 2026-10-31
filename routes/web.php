
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

// Halaman utama
Route::get('/', function () {
    return redirect()->route('laporan.create');
});

// Form laporan tanpa login
Route::get('/form-laporan', [LaporanController::class, 'form'])
    ->name('laporan.create');

// Proses menyimpan laporan
Route::post('/simpan-laporan', [LaporanController::class, 'store'])
    ->name('laporan.store');

    Route::get('/konfirmasi-laporan', [LaporanController::class, 'konfirmasi'])
    ->name('laporan.konfirmasi');

// Authentication
Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->name('logout');

// Halaman khusus petugas
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/daftar-laporan', [LaporanController::class, 'index'])
        ->name('daftar-laporan');

    Route::get('/profile', [HomeController::class, 'profile'])
        ->name('profile');
});
