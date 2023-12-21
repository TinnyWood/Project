<?php

use App\Http\Controllers\DepartemenWijayaController;
use App\Http\Controllers\JabatanWijayaController;
use App\Http\Controllers\TunjanganWijayaController;
use App\Http\Controllers\pejabatAjaxController;
use App\Http\Controllers\ProdakController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Route::get('/', [JabatanWijayaController::class, 'dashboard']);



Route::resource('jabatanwijaya', JabatanWijayaController::class);
Route::post('/update-jabatan', [JabatanWijayaController::class, 'updatejabatan'])->name('update.jabatan');
Route::resource('DepartemenWijaya', DepartemenWijayaController::class);
Route::resource('TunjanganWijaya', TunjanganWijayaController::class);

Route::resource('pejabatAjax', pejabatAjaxController::class);

Route::get('prodak', [ProdakController::class, 'prodaks'])->name('prodaks');
// Route::put('/add-prodak', [ProdakController::class, 'addprodak'])->name('add.prodak');
Route::match(['post', 'put'], '/add-prodak', [ProdakController::class, 'addprodak'])->name('add.prodak');


Route::post('/update-prodak', [ProdakController::class, 'updateprodak'])->name('update.prodak');
Route::post('/delete_prodak', [ProdakController::class, 'deleteProdak'])->name('delete.prodak');
// routes/web.php
Route::get('get-prodak', 'ProdakController@getProdak')->name('get.prodak');

Route::get('latihan', [LatihanController::class, 'latihans'])->name('latihans');
Route::post('/add-latihan', [ProdakController::class, 'addLatihan'])->name('add.latihan');


Route::get('/sesi', [sessionController::class, 'index']);



Auth::routes();

// Rute yang memerlukan otentikasi
Route::middleware(['auth'])->group(function () {
    // Tambahkan rute yang memerlukan otentikasi di sini
    // Contoh: Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
