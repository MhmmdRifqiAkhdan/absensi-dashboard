<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\ImportDataController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KontakController;

// Rute untuk tampilan login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Rute untuk dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk Master Data
Route::get('/master-data', [MasterDataController::class, 'index'])->name('masterdata.index');
Route::get('/master-data/create', [MasterDataController::class, 'create'])->name('masterdata.create');
Route::post('/master-data', [MasterDataController::class, 'store'])->name('masterdata.store');
Route::get('/master-data/{id}/edit', [MasterDataController::class, 'edit'])->name('masterdata.edit');
Route::put('/master-data/{id}', [MasterDataController::class, 'update'])->name('masterdata.update');
Route::delete('/master-data/{id}', [MasterDataController::class, 'destroy'])->name('masterdata.destroy');

// Rute untuk Import Data
Route::get('/import-data', [ImportDataController::class, 'index'])->name('importdata.index');
Route::get('/import-data/create', [ImportDataController::class, 'create'])->name('importdata.create');
Route::post('/import-data', [ImportDataController::class, 'store'])->name('importdata.store');
Route::get('/import-data/{id}/edit', [ImportDataController::class, 'edit'])->name('importdata.edit');
Route::put('/import-data/{id}', [ImportDataController::class, 'update'])->name('importdata.update');
Route::delete('/import-data/{id}', [ImportDataController::class, 'destroy'])->name('importdata.destroy');

// Rute untuk Absensi
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');

// Rute untuk Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

// Rute untuk Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');



