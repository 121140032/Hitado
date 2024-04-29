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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/kelolamenu', function () {
    return view('kelolamenu');
});

Route::get('/kelolapesanan', function () {
    return view('kelolapesanan');
});