<?php

use App\Http\Controllers\LokasiController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Tabung;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/supplier',  [SupplierController::class, 'index']);
Route::get('/supplier/tambah',  [SupplierController::class, 'form']);
Route::post('/supplier/process',  [SupplierController::class, 'process']);
Route::get('/supplier/detail/{id}',  [SupplierController::class, 'detail']);

// Routes hitung volume tabung
Route::get('/volumetabung',  [Tabung::class, 'index']);
Route::get('/volumetabung/tambah',  [Tabung::class, 'form']);
Route::post('/volumetabung/process',  [Tabung::class, 'process']);

// CRUD LOKASI

// Read
Route::get('/lokasi', [LokasiController::class, 'index']);
// Create
Route::get('/lokasi/tambah', [LokasiController::class, 'create']);
Route::post('/lokasi/store', [LokasiController::class, 'store']);
// Update
Route::get('/lokasi/edit/{id}', [LokasiController::class, 'edit']);
Route::post('/lokasi/edit/update', [LokasiController::class, 'update']);
// Delete
Route::get('/lokasi/hapus/{id}', [LokasiController::class, 'destroy']);
