<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\PengambilanController;
use App\Http\Controllers\SimpananController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);
Route::resource('register', RegisterController::class)->middleware('guest');
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('/home', function () {
    return view('user.home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('user.about', [
        "title" => "about"
    ]);
});

Route::get('/services', function () {
    return view(
        'user.services',
        [
            "title" => "services"
        ]
    );
});

Route::resource('apply', ApplyController::class)->middleware('auth');


Route::get('simpanan',[ApplyController::class, 'simpanan'])->name('simpanan')->middleware('auth');
Route::post('simpan',[ApplyController::class, 'simpan'])->name('simpan')->middleware('auth');

Route::get('penarikan',[ApplyController::class, 'penarikan'])->name('penarikan')->middleware('auth');
Route::post('tarik',[ApplyController::class, 'tarik'])->name('tarik')->middleware('auth');

Route::get('angsuran',[ApplyController::class, 'angsuran'])->name('angsuran')->middleware('auth');
Route::post('angsur',[ApplyController::class, 'angsur'])->name('angsur')->middleware('auth');

Route::get('/contact', function () {
    return view('user.contact', [
        "title" => "contact"
    ]);
});

Route::resource('account', AccountController::class)->middleware('auth');
Route::post('change', [AccountController::class, 'change'])->name('change')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::resource('anggota', AnggotaController::class)->middleware('auth');
Route::get('cetak-anggota', [AnggotaController::class, 'cetak'])->name('cetak-anggota')->middleware('auth');

Route::resource('deposit', SimpananController::class)->middleware('auth');
Route::get('cetak-simpanan', [SimpananController::class, 'cetak'])->name('cetak-simpanan')->middleware('auth');

Route::resource('pengambilan', PengambilanController::class)->middleware('auth');
Route::get('cetak-pengambilan', [PengambilanController::class, 'cetak'])->name('cetak-pengambilan')->middleware('auth');

Route::resource('peminjaman', PeminjamanController::class)->middleware('auth');
Route::get('cetak-peminjaman', [PeminjamanController::class, 'cetak'])->name('cetak-peminjaman')->middleware('auth');

Route::resource('cicilan', AngsuranController::class)->middleware('auth');
Route::get('cetak-angsuran', [AngsuranController::class, 'cetak'])->name('cetak-angsuran')->middleware('auth');
