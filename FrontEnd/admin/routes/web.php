<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/inventorimasuk', function () {
    return view('inventorimasuk');
});

Route::get('/inventorikeluar', function () {
    return view('inventorikeluar');
});

Route::get('/sisainventori', function () {
    return view('sisainventori');
});