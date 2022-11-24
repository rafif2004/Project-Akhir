<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baca_Controller;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\riwayat_Controller;
use App\Http\Controllers\login_Controller;
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
Route::resource('/', login_Controller::class);
Route::resource('Register', register_Controller::class);
Route::resource('Dashboard', Dashboard_Controller::class);
Route::resource('Baca', baca_Controller::class);
Route::resource('Riwayat', riwayat_Controller::class);