<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/about', function () {
    return view('login');
});

Route::get('/services', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
