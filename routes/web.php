<?php

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
    return view('Login.Login');
});
Route::get('/Register', function () {
    return view('Login.Register');
});
Route::get('/Login', function () {
    return view('Login.Login');
});
Route::get('/Dashboard', function () {
    return view('Master.Dashboard');
});
Route::get('/Baca', function () {
    return view('Master.Baca');
});
Route::get('/Riwayat', function () {
    return view('Master.Riwayat');
});