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
    return view('welcome');
});

Auth::routes();
Route::resource('register', 'RegisterUsersController');



Route::get('/consultar', function () {
    return view('consultar.consultar');
});

 Route::get('/search', 'SearchController@search' );

Route::resource('service', 'CrearServicioController');