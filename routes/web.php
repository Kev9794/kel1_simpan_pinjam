<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/services', function () {
    return view('user.services', [
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

Route::get('/login', function () {
    return view('auth.login', [
        "title" => "login"
    ]);
});