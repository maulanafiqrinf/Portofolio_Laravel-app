<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enums\statusController;
use App\Http\Controllers\Enums\kategoriController;
use App\Http\Controllers\Enums\kategori_keahlianController;
use App\Http\Controllers\Backoffice\proyekController;
use App\Http\Controllers\Backoffice\layananController;
use App\Http\Controllers\Backoffice\sertifikatController;
use App\Http\Controllers\Backoffice\pendidikanController;
use App\Http\Controllers\Backoffice\pengaturanController;
use App\Http\Controllers\Backoffice\tentangSayaController;
use App\Http\Controllers\Backoffice\keahlianController;
use App\Http\Controllers\Frontend\IndexController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('backoffice.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('status', statusController::class);
    Route::resource('kategori', kategoriController::class);
    Route::resource('kategori_keahlian', kategori_keahlianController::class);
    Route::resource('proyek', proyekController::class);
    Route::resource('layanan', layananController::class);
    Route::resource('sertifikat', sertifikatController::class);
    Route::resource('pendidikan', pendidikanController::class);
    Route::resource('pengaturan', pengaturanController::class);
    Route::resource('tentang-saya', tentangSayaController::class);
    Route::resource('keahlian', keahlianController::class);
});

require __DIR__.'/auth.php';
