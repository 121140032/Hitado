<?php

use App\Http\Controllers\Homepage1Controller;
use App\Models\Homepage1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/admin-dashboard', function () {
    return view('Admin.admin-dashboard');
});

Route::get('/admin-tentang', function () {
    return view('Admin.admin-tentang');
});

Route::get('/admin-kelolamenu', function () {
    return view('Admin.admin-kelolamenu');
});

Route::get('/admin-kelolapesanan', function () {
    return view('Admin.admin-kelolapesanan');
});

Route::get('/admin-inventorimasuk', function () {
    return view('Admin.admin-inventorimasuk');
});

Route::get('/admin-inventorikeluar', function () {
    return view('Admin.admin-inventorikeluar');
});

Route::get('/admin-sisainventori', function () {
    return view('Admin.admin-sisainventori');
});

Route::get('/kasir-dashboard', function () {
    return view('Kasir.kasir-dashboard');
});

Route::get('/kasir-tentang', function () {
    return view('Kasir.kasir-tentang');
});

Route::get('/kasir-kelolamenu', function () {
    return view('Kasir.kasir-kelolamenu');
});

Route::get('/kasir-kelolapesanan', function () {
    return view('Kasir.kasir-kelolapesanan');
});

Route::get('/pelanggan-detail', function () {
    return view('Pelanggan.view.detail');
});

Route::get('/pelanggan-keranjang', function () {
    return view('Pelanggan.view.keranjang');
});

Route::get('/pelanggan-menu', function () {
    return view('Pelanggan.view.menu');
});

Route::get('/pelanggan-tentang', function () {
    return view('Pelanggan.view.tentang');
});

Route::get('/tentang', function () {
    return view('Pelanggan.view.tentang');
})->name('tentang');

Route::get('/menu', function () {
    return view('Pelanggan.view.menu');
})->name('menu');

Route::get('/keranjang', function () {
    return view('Pelanggan.view.keranjang');
})->name('keranjang');

Route::get('/test', [Homepage1Controller::class,'index'])->name('test');


