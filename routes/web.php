<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Permission;
use App\Http\Controllers\Apps\UserController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\BerkasRnController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\WasdalController;
use App\Http\Controllers\BerkasController;

Route::group(['middleware' => 'auth'], function () {
    // Dashboard Route
    Route::get('/', function () {
        return view('pages.app.dashboard');
    })->name('home');

    
    Route::resource('users', UserController::class);
    Route::resource('lembaga', LembagaController::class);
    Route::resource('tamu', TamuController::class);
    Route::resource('berkas-rn', BerkasRnController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('penghuni', PenghuniController::class);
    Route::resource('wasdal', WasdalController::class);
    Route::resource('berkas', BerkasController::class);

    Route::controller(WasdalController::class)->group(function () {
        Route::get('ubah-data-penghuni', 'ubahDataPenghuni')->name('wasdal.penghuni');
        Route::get('ubah-data-teknis', 'ubahDataTeknis')->name('wasdal.teknis');
        Route::get('ubah-data-angsuran', 'ubahDataAngsuran')->name('wasdal.angsuran');
        Route::get('ubah-data-lokasi', 'ubahDataLokasi')->name('wasdal.lokasi');
        Route::get('ubah-data-foto', 'ubahDataFoto')->name('wasdal.foto');
    });
});
