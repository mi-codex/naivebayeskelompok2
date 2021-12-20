<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HitunganNaive;
use App\Http\Controllers\InputdataMahasiswa;
use App\Http\Controllers\HasilBeasiswa;
use App\Http\Controllers\Panduan;
use App\Http\Controllers\ExcelDownloadController;
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
    return view('v_login');
});

Auth::routes();

Route::get('/beranda', [HomeController::class, 'index'])->name('home');
Route::get('/panduan', [Panduan::class, 'index']);

//! Admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/perhitungan', [HitunganNaive::class, 'index']);
});
//-------------------------------------------

//! User
Route::group(['middleware' => 'user'], function () {
    Route::get('/inputdatamhs', [InputdataMahasiswa::class, 'index'])->name('input');
    Route::post('/inputdatamhs/store', [InputdataMahasiswa::class, 'store']);
    Route::get('/hasilbeasiswa', [HasilBeasiswa::class, 'index']);
});
//-------------------------------------------


// Download File Excel Data Set
// Route::get('/downloadfile', [ExcelDownloadController::class, 'downloadFile']);
