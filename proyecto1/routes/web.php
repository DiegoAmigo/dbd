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

Route::resource('habitacion', 'HabitacionController');
/*
Route::get('/habitaciones/all', 'HabitacionController@index');
Route::get('/habitaciones/show/{id}', 'HabitacionController@show');
Route::post('/habitaciones/destroy/{id}', 'HabitacionController@destroy');
*/
Route::resource('ciudad', 'CiudadController');
/*
Route::get('/ciudades/all', 'CiudadController@index');
Route::get('/ciudades/show/{id}', 'CiudadController@show');
Route::post('/ciudades/destroy/{id}', 'CiudadController@destroy');
*/
Route::resource('clase', 'ClaseController');
/*
Route::get('/clases/all', 'ClaseController@index');
Route::get('/clases/show/{id}', 'ClaseController@show');
Route::post('/clases/destroy/{id}', 'ClaseController@destroy');
*/
Route::resource('cliente', 'ClienteController');
/*
Route::get('/clientes/all', 'ClienteController@index');
Route::get('/clientes/show/{id}', 'ClienteController@show');
Route::post('/clientes/destroy/{id}', 'ClienteController@destroy');
*/
Route::resource('paquete', 'PaqueteController');
/*
Route::get('/paquetes/all', 'PaqueteController@index');
Route::get('/paquetes/show/{id}', 'PaqueteController@show');
Route::post('/paquetes/destroy/{id}', 'PaqueteController@destroy');
*/
Route::resource('pasajero', 'PasajeroController');
/*
Route::get('/pasajero/all', 'PasajeroController@index');
Route::get('/pasajero/show/{id}', 'PasajeroController@show');
Route::post('/pasajero/destroy/{id}', 'PasajeroController@destroy');
*/
Route::resource('seguro', 'Seguro_viajeController');
/*
Route::get('/seguros/all', 'Seguro_viajeController@index');
Route::get('/seguros/show/{id}', 'Seguro_viajeController@show');
Route::post('/seguros/destroy/{id}', 'Seguro_viajeController@destroy');
*/
Route::resource('accion', 'Tipo_AccionController');
/*
Route::get('/acciones/all', 'Tipo_AccionController@index');
Route::get('/acciones/show/{id}', 'Tipo_AccionController@show');
Route::post('/acciones/destroy/{id}', 'Tipo_AccionController@destroy');
*/
Route::resource('pais', 'PaisController');
/*
Route::get('/paises/all', 'PaisController@index');
Route::get('/paises/show/{id}', 'PaisController@show');
Route::get('/paises/store', 'PaisController@store');
Route::post('/paises/destroy/{id}', 'PaisController@destroy');
*/
Route::resource('asiento', 'AsientoController');
/*
Route::get('/asientos/all', "AsientoController@index");
Route::get('/asientos/show/{id}', "AsientoController@show");
Route::post('/asientos/destroy/{id}', "AsientoController@destroy");
*/
Route::resource('aeropuerto', 'AeropuertoController');
/*
Route::get('/aeropuertos/all', 'AeropuertoController@index');
Route::get('/aeropuertos/show/{id}', 'AeropuertoController@show');
Route::post('/aeropuertos/destroy/{id}', 'AeropuertoController@destroy');
Route::get('/aeropuertos/store', 'AeropuertoController@store');
*/

