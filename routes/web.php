<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BanjarController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TempekanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CompanyScaleController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TransactionDetailController;

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

// login admin
Route::middleware('auth')->group(function(){

    // dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard-index');


    // transaksi
    Route::get('/transaksi', [TransactionDetailController::class, 'index'])->name('transaksi-index');
    Route::get('/transaksi-edit/{id}', [TransactionDetailController::class, 'edit'])->name('transaksi-edit');

    // iuran cuma bisa diubah jumlahnya
    Route::get('/iuran', [SubscriptionController::class, 'index'])->name('iuran-index');
    Route::get('/iuran-edit/{id}', [SubscriptionController::class, 'edit'])->name('iuran-edit');
    Route::post('/iuran-update/{id}', [SubscriptionController::class, 'update'])->name('iuran-update');
    
    // usaha / company
    Route::get('/usaha', [CompanyController::class, 'index'])->name('usaha-index');
    Route::get('/usaha-tambah', [CompanyController::class, 'create'])->name('usaha-tambah');
    Route::post('/usaha-store', [CompanyController::class, 'store'])->name('usaha-store');
    Route::get('/usaha-detail/{id}', [CompanyController::class, 'show'])->name('usaha-detail');
    Route::get('/usaha-edit/{id}', [CompanyController::class, 'edit'])->name('usaha-edit');
    Route::post('/usaha-update/{id}', [CompanyController::class, 'update'])->name('usaha-update');
    Route::get('/usaha-delete/{id}', [CompanyController::class, 'destroy'])->name('usaha-hapus');
    Route::get('/usaha-sampah', [CompanyController::class, 'trash'])->name('usaha-sampah');
    Route::get('/usaha-restore-all', [CompanyController::class, 'restore_all'])->name('usaha-restore-all');
    Route::get('/usaha-restore/{id}', [CompanyController::class, 'restore'])->name('usaha-restore');
    Route::get('/usaha-force-delete-all', [CompanyController::class, 'force_delete_all'])->name('usaha-force-delete-all');
    Route::get('/usaha-force-delete/{id}', [CompanyController::class, 'force_delete'])->name('usaha-force-delete');


    // pemilik usaha / owner
    Route::get('/pemilik-usaha', [OwnerController::class, 'index'])->name('pemilik-usaha-index');
    Route::get('/pemilik-usaha-tambah', [OwnerController::class, 'create'])->name('pemilik-usaha-tambah');
    Route::post('/pemilik-usaha-store', [OwnerController::class, 'store'])->name('pemilik-usaha-store');
    Route::get('/pemilik-usaha-detail/{id}', [OwnerController::class, 'show'])->name('pemilik-usaha-detail');
    Route::get('/pemilik-usaha-edit/{id}', [OwnerController::class, 'edit'])->name('pemilik-usaha-edit');
    Route::post('/pemilik-usaha-update/{id}', [OwnerController::class, 'update'])->name('pemilik-usaha-update');
    Route::get('/pemilik-usaha-delete/{id}', [OwnerController::class, 'destroy'])->name('pemilik-usaha-hapus');
    Route::get('/pemilik-usaha-sampah', [OwnerController::class, 'trash'])->name('pemilik-usaha-sampah');
    Route::get('/pemilik-usaha-restore-all', [OwnerController::class, 'restore_all'])->name('pemilik-usaha-restore-all');
    Route::get('/pemilik-usaha-restore/{id}', [OwnerController::class, 'restore'])->name('pemilik-usaha-restore');
    Route::get('/pemilik-usaha-force-delete-all', [OwnerController::class, 'force_delete_all'])->name('pemilik-usaha-force-delete-all');
    Route::get('/pemilik-usaha-force-delete/{id}', [OwnerController::class, 'force_delete'])->name('pemilik-usaha-force-delete');

    // petugas / staff
    Route::get('/petugas', [StaffController::class, 'index'])->name('petugas-index');
    Route::get('/petugas-tambah', [StaffController::class, 'create'])->name('petugas-tambah');
    Route::post('/petugas-store', [StaffController::class, 'store'])->name('petugas-store');
    Route::get('/petugas-detail/{id}', [StaffController::class, 'show'])->name('petugas-detail');
    Route::get('/petugas-edit/{id}', [StaffController::class, 'edit'])->name('petugas-edit');
    Route::post('/petugas-update/{id}', [StaffController::class, 'update'])->name('petugas-update');
    Route::get('/petugas-delete/{id}', [StaffController::class, 'destroy'])->name('petugas-hapus');
    Route::get('/petugas-sampah', [StaffController::class, 'trash'])->name('petugas-sampah');
    Route::get('/petugas-restore-all', [StaffController::class, 'restore_all'])->name('petugas-restore-all');
    Route::get('/petugas-restore/{id}', [StaffController::class, 'restore'])->name('petugas-restore');
    Route::get('/petugas-force-delete-all', [StaffController::class, 'force_delete_all'])->name('petugas-force-delete-all');
    Route::get('/petugas-force-delete/{id}', [StaffController::class, 'force_delete'])->name('petugas-force-delete');



    // banjar
    Route::get('/banjar', [BanjarController::class, 'index'])->name('banjar-index');
    Route::get('/banjar-tambah', [BanjarController::class, 'create'])->name('banjar-tambah');
    Route::get('/banjar-detail/{id}', [BanjarController::class, 'show'])->name('banjar-detail');
    Route::get('/banjar-edit/{id}', [BanjarController::class, 'edit'])->name('banjar-edit');
    Route::post('/banjar-store', [BanjarController::class, 'store'])->name('banjar-store');
    Route::post('/banjar-update/{id}', [BanjarController::class, 'update'])->name('banjar-update');
    Route::get('/banjar-delete/{id}', [BanjarController::class, 'destroy'])->name('banjar-hapus');
    Route::get('/banjar-sampah', [BanjarController::class, 'trash'])->name('banjar-sampah');
    Route::get('/banjar-restore-all', [BanjarController::class, 'restore_all'])->name('banjar-restore-all');
    Route::get('/banjar-restore/{id}', [BanjarController::class, 'restore'])->name('banjar-restore');
    Route::get('/banjar-force-delete-all', [BanjarController::class, 'force_delete_all'])->name('banjar-force-delete-all');
    Route::get('/banjar-force-delete/{id}', [BanjarController::class, 'force_delete'])->name('banjar-force-delete');



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
    


    

    
    
    
});
