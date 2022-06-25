<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('apply', [CustomAuthController::class, 'apply']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'register'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/services', function () {
    return view('user.services', 
    [
        "title" => "services"
    ]);
});

Route::get('/apply', function () {
    return view('user.apply', [
        "title" => "apply"
    ]);
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

Route::get('/contact', function () {
    return view('user.contact', [
        "title" => "contact"
    ]);
});
/*
Route::get('/login', function () {
    return view('auth.login', [
        "title" => "login"
    ]);
});

Route::get('/register', function () {
    return view('auth.register', [
        "title" => "register"
            ]);
});

Route::get('/anggota', function () {
    return view('admin.anggota', []);
});

Route::get('/angsuran', function () {
    return view('admin.angsuran', []);
});

Route::get('/peminjaman', function () {
    return view('admin.peminjaman', []);
});

Route::get('/pengambilan', function () {
    return view('admin.pengambilan', []);
});

Route::get('/simpanan', function () {
    return view('admin.simpanan', []);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', []);
});

