<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BanjarController;
use App\Http\Controllers\TempekanController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CompanyScaleController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/template', function () {
    return view('template');
});

Route::middleware('auth')->group(function(){

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
    
    Route::get('/iuran-tambah', function () {
        return view('iuran/iuran-tambah', [
            "title" => "Tambah Iuran"
        ]);
    });
    
    Route::get('/iuran-edit', function () {
        return view('iuran/iuran-edit', [
            "title" => "Edit Iuran"
        ]);
    });
    

    // banjar
    Route::get('/banjar', [BanjarController::class, 'index'])->name('banjar-index');
    Route::get('/banjar-tambah', [BanjarController::class, 'create'])->name('banjar-tambah');
    Route::get('/banjar-detail/{id}', [BanjarController::class, 'show'])->name('banjar-detail');
    Route::get('/banjar-edit/{id}', [BanjarController::class, 'edit'])->name('banjar-edit');
    Route::post('/banjar-store', [BanjarController::class, 'store'])->name('banjar-store');
    Route::post('/banjar-update/{id}', [BanjarController::class, 'update'])->name('banjar-update');
    Route::get('/banjar-delete/{id}', [BanjarController::class, 'destroy'])->name('banjar-hapus');

    // tempekan
    Route::get('/tempekan-tambah/{id}', [TempekanController::class, 'create'])->name('tempekan-tambah');
    Route::post('/tempekan-store', [TempekanController::class, 'store'])->name('tempekan-store');
    Route::get('/tempekan-edit/{id}', [TempekanController::class, 'edit'])->name('tempekan-edit');
    Route::post('/tempekan-update/{id}', [TempekanController::class, 'update'])->name('tempekan-update');
    Route::get('/tempekan-delete/{id}', [TempekanController::class, 'destroy'])->name('tempekan-hapus');

    // jenis usaha
    Route::get('/jenis-usaha', [CompanyTypeController::class, 'index'])->name('jenis-usaha-index');
    Route::get('/jenis-usaha-tambah', [CompanyTypeController::class, 'create'])->name('jenis-usaha-tambah');
    Route::post('/jenis-usaha-store', [CompanyTypeController::class, 'store'])->name('jenis-usaha-store');
    Route::get('/jenis-usaha-edit/{id}', [CompanyTypeController::class, 'edit'])->name('jenis-usaha-edit');
    Route::post('/jenis-usaha-update/{id}', [CompanyTypeController::class, 'update'])->name('jenis-usaha-update');

    // skala usaha
    Route::get('/skala-usaha', [CompanyScaleController::class, 'index'])->name('skala-usaha-index');
    Route::get('/skala-usaha-tambah', [CompanyScaleController::class, 'create'])->name('skala-usaha-tambah');
    Route::post('/skala-usaha-store', [CompanyScaleController::class, 'store'])->name('skala-usaha-store');
    Route::get('/skala-usaha-edit/{id}', [CompanyScaleController::class, 'edit'])->name('skala-usaha-edit');
    Route::post('/skala-usaha-update/{id}', [CompanyScaleController::class, 'update'])->name('skala-usaha-update');
    


    

    
    // transaksi
    Route::get('/transaksi', [TransactionController::class, 'index']);
    
    Route::get('/transaksi-tambah', function () {
        return view('transaksi/transaksi-tambah', [
            "title" => "Tambah Transaksi"
        ]);
    });
    
    Route::get('/transaksi-edit', function () {
        return view('transaksi/transaksi-edit', [
            "title" => "Edit Transaksi"
        ]);
    });
    
    Route::get('/transaksi-detail', function () {
        return view('transaksi/transaksi-detail', [
            "title" => "Detail Transaksi"
        ]);
    });
    
});
