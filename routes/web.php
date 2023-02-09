<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baca_Controller;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\riwayat_Controller;
use App\Http\Controllers\riwayatguru_Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\register_Controller;
use App\Http\Controllers\profil_Controlller;
use App\Http\Controllers\tambahpoint_Controlller;

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
    // Route::post('/register', [register_Controller::class, 'index'])->name('register');
    Route::resource('register', register_Controller::class);
});

Route::middleware('auth')->group(function(){
    Route::resource('dashboard', dashboard_Controller::class);
    Route::resource('riwayat', riwayat_Controller::class);
    Route::resource('riwayatguru', riwayatguru_Controller::class);
    Route::resource('baca', baca_Controller::class);
    Route::resource('profil', profil_Controlller::class);
    Route::post('logout', [LoginController::class, 'logout']);
    // Route::post('/profil/destroy/{id}', [profil_Controlller::class, 'destroy']);
    Route::get('/dashboard/hapus/{id}', [dashboard_Controller::class, 'hapus'])->name('dashboard.hapus');
    Route::get('/riwayat/hapus/{id}', [riwayat_Controller::class, 'hapus'])->name('riwayat.hapus');
    Route::get('/riwayatguru/hapus/{id}', [riwayatguru_Controller::class, 'hapus'])->name('riwayatguru.hapus');
    Route::put('/dashboard/update/{id}', [dashboard_Controller::class, 'update'])->name('dashboard.editin');
    Route::put('/riwayat/update/{id}', [riwayat_Controller::class, 'update'])->name('riwayat.editin');
    Route::put('/riwayatguru/update/{id}', [riwayatguru_Controller::class, 'update'])->name('riwayatguru.editin');
    Route::put('/profil/update/{id}', [profil_Controlller::class, 'update'])->name('profil.editin');
});