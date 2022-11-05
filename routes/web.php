<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PengetahuanController;
use App\Http\Controllers\KonsultasiController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin');
Route::resource('admin/user', AnggotaController::class);
Route::resource('admin/penyakit', PenyakitController::class);
Route::resource('admin/gejala', GejalaController::class);
Route::resource('admin/pengetahuan', PengetahuanController::class);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/konsultasi', [App\Http\Controllers\KonsultasiController::class, 'index'])->name('konsultasi');
Route::get('/riwayat', [App\Http\Controllers\RiwayatController::class, 'index'])->name('riwayat');

Route::post('/hasil', [App\Http\Controllers\KonsultasiController::class, 'hasil_konsultasi'])->name('hasil_konsultasi');
// Route::post('/hasil2', [App\Http\Controllers\KonsultasiController::class, 'hasil'])->name('hasil');
