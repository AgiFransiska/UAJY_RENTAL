<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\TransaksiController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Login', function () {
//     return view('Login.LoginDashboard');
// });


Route::get('home', function () {
    return view('dashboard.dashboard');
});

Route::get('/', function () {
    return view('Login');
});

Route::post('login', 'App\Http\Controllers\Api\AuthController@login');
Route::post('logout', 'App\Http\Controllers\Api\AuthController@logout');


//Route::get('loginuser', LoginController::class)->middleware('guest')->name('Loginuser');
//Route::get('registeruser', RegisterController::class)->middleware('guest')->name('Registeruser');

//Route::get('/search', 'PegawaiController@search');

//Route::get('pegawai', function () {
//    return view('PegawaiCRUD.index');
//});

///Route::get('pegawai', [PegawaiController::class, 'index']);

Route::resource('pegawai', PegawaiController::class);
Route::resource('customer', CustomerController::class);
Route::resource('promo', PromoController::class);
Route::resource('driver', DriverController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('schedule', ScheduleController::class);
Route::resource('mitra', MitraController::class);
Route::resource('transaksi', TransaksiController::class);
