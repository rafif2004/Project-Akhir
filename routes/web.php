<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baca_Controller;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\riwayat_Controller;
use App\Http\Controllers\riwayatguru_Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\register_Controller;
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
//     return view('Login.Login');
// });
// Route::get('/Register', function () {
//     return view('Login.Register');
// });
// Route::get('/Login', function () {
//     return view('Login.Login');
// });
// Route::get('/Baca', function () {
//     return view('Master.Baca');
// });
// Route::get('/Riwayat', function () {
//     return view('Master.Riwayat');
// });

Route::middleware('guest')->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/register', [register_Controller::class, 'index'])->name('register');
});

Route::middleware('auth')->group(function(){
    Route::resource('dashboard', dashboard_Controller::class);
    Route::resource('riwayat', riwayat_Controller::class);
    Route::resource('riwayatguru', riwayatguru_Controller::class);
    Route::resource('baca', baca_Controller::class);
    Route::post('logout', [LoginController::class, 'logout']);
    // Route::post('/dashboard/destroy/{id}', [dashboard_Controller::class, 'destroy']);
    Route::get('/dashboard/hapus/{id}', [dashboard_Controller::class, 'hapus'])->name('dashboard.hapus');
    Route::post('/dashboard/update/{id}', [dashboard_Controller::class, 'update'])->name('dashboard.edit');
});