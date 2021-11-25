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

Route::get('/template', function () {
    return view('template');
});

Route::get('/', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

// Petugas
Route::get('/petugas', function () {
    return view('petugas/petugas', [
        "title" => "Petugas"
    ]);
});

Route::get('/petugas-detail', function () {
    return view('petugas/petugas-detail', [
        "title" => "Detail Petugas"
    ]);
});

Route::get('/petugas-tambah', function () {
    return view('petugas/petugas-tambah', [
        "title" => "Tambah Petugas"
    ]);
});

Route::get('/petugas-edit', function () {
    return view('petugas/petugas-edit', [
        "title" => "Edit Petugas"
    ]);
});

// pemilik usaha
Route::get('/pemilik-usaha', function () {
    return view('pemilik-usaha/pemilik-usaha', [
        "title" => "Pemilik Usaha"
    ]);
});

Route::get('/pemilik-usaha-detail', function () {
    return view('pemilik-usaha/pemilik-usaha-detail', [
        "title" => "Detail Pemilik Usaha"
    ]);
});

Route::get('/pemilik-usaha-tambah', function () {
    return view('pemilik-usaha/pemilik-usaha-tambah', [
        "title" => "Tambah Pemilik Usaha"
    ]);
});

Route::get('/pemilik-usaha-edit', function () {
    return view('pemilik-usaha/pemilik-usaha-edit', [
        "title" => "Edit Pemilik Usaha"
    ]);
});



Route::get('/usaha', function () {
    return view('usaha/usaha', [
        "title" => "Usaha"
    ]);
});

Route::get('/usaha-detail', function () {
    return view('usaha/usaha-detail', [
        "title" => "Detail Usaha"
    ]);
});

Route::get('/usaha-tambah', function () {
    return view('usaha/usaha-tambah', [
        "title" => "Tambah Usaha"
    ]);
});

Route::get('/usaha-edit', function () {
    return view('usaha/usaha-edit', [
        "title" => "Edit Usaha"
    ]);
});

Route::get('/iuran', function () {
    return view('iuran/iuran', [
        "title" => "Iuran"
    ]);
});

Route::get('/iuran-detail', function () {
    return view('iuran/iuran-detail', [
        "title" => "Detail Iuran"
    ]);
});

Route::get('/iuran-tambah', function () {
    return view('iuran/iuran-tambah', [
        "title" => "Tambah Iuran"
    ]);
});

Route::get('/iuran-edit', function () {
    return view('iuran/iuran-edit', [
        "title" => "Detail Iuran"
    ]);
});

Route::get('/denda', function () {
    return view('denda/denda', [
        "title" => "Denda"
    ]);
});

Route::get('/denda-tambah', function () {
    return view('denda/denda-tambah', [
        "title" => "Tambah Denda"
    ]);
});

Route::get('/denda-edit', function () {
    return view('denda/denda-edit', [
        "title" => "Edit Denda"
    ]);
});

Route::get('/pembayaran-iuran', function () {
    return view('pembayaran-iuran', [
        "title" => "Pembayaran Iuran"
    ]);
});






