<?php

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
    return view('modul.dheo.home');
});

Route::get('/pertanyaan', function () {
    return view('modul.guruh.question');
});

Route::get('/home', function () {
    return view('modul.guruh.home');
});
Route::get('/form', function () {
    return view('modul.dheo.form');
});
Route::get('/profilku', function () {
    return view('modul.profil.profilku');
});

