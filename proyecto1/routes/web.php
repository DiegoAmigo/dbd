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

Route::get('/aerolineas/all', 'AerolineaController@index');
Route::get('/aerolineas/show/{id}', 'AerolineaController@show');
Route::post('/aerolineas/destroy/{id}', 'AerolineaController@destroy');
Route::get('/aerolineas/store', 'AerolineaController@store');

Route::get('/aeropuertos/all', 'AeropuertoController@index');
Route::get('/aeropuertos/show/{id}', 'AeropuertoController@show');
Route::post('/aeropuertos/destroy/{id}', 'AeropuertoController@destroy');
Route::get('/aeropuertos/store', 'AeropuertoController@store');

Route::get('/asientos/all', 'AsientoController@index');
Route::get('/asientos/show/{id}', 'AsientoController@show');
Route::post('/asientos/destroy/{id}', 'AsientoController@destroy');
Route::get('/asientos/store', 'AsientoController@store');

Route::get('/aviones/all', 'AvionController@index');
Route::get('/aviones/show/{id}', 'AvionController@show');
Route::post('/aviones/destroy/{id}', 'AvionController@destroy');
Route::get('/aviones/store', 'AvionController@store');

Route::get('/hoteles/all', 'HotelController@index');
Route::get('/hoteles/show/{id}', 'HotelController@show');
Route::post('/hoteles/destroy/{id}', 'HotelController@destroy');
Route::get('/hoteles/store', 'HotelController@store');