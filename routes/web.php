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

Route::get('/', function ($id) {
    return view('user.home');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/about', function () {
        return view('user.about', [
            "title" => "about"
        ]);
    });

    Route::get('/apply', function () {
        return view('user.services', [
            "title" => "apply"
        ]);
    });

    Route::get('/services', function () {
        return view('user.services', [
            "title" => "services"
        ]);
    });

    Route::get('/contact', function () {
        return view('user.contact', [
            "title" => "contact"
        ]);
    });
});
