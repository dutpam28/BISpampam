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

Route::resource('infosaldo','Saldo');

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home_user', 'User@index');

Route::get('/login', 'User@login');

Route::post('/loginPost', 'User@loginPost');

Route::get('/registrasi', 'User@register');

Route::post('/registerPost', 'User@registerPost');

Route::get('/logout', 'User@logout');
