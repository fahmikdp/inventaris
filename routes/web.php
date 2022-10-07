<?php

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