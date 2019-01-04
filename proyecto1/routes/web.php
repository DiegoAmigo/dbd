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



Route::get('/aerolinea/all', 'AerolineaController@index');
Route::get('/aerolinea/show/{id}', 'AerolineaController@show');
Route::get('/aerolinea/destroy/{id}', 'AerolineaController@destroy');
Route::get('/aerolinea/store', 'AerolineaController@store');


Route::get('/avion/all', 'AvionController@index');
Route::get('/avion/show/{id}', 'AvionController@show');
Route::get('/avion/destroy/{id}', 'AvionController@destroy');
Route::get('/avion/store', 'AvionController@store');


Route::get('/boleta/all', 'BoletaController@index');
Route::get('/boleta/show/{id}', 'BoletaController@show');
Route::get('/boleta/destroy/{id}', 'BoletaController@destroy');
Route::get('/boleta/store', 'BoletaController@store');


Route::get('/ciudad/all', 'CiudadController@index');
Route::get('/ciudad/show/{id}', 'CiudadController@show');
Route::get('/ciudad/destroy/{id}', 'CiudadController@destroy');
Route::get('/ciudad/store', 'CiudadController@store');


Route::get('/clase/all', 'ClaseController@index');
Route::get('/clase/show/{id}', 'ClaseController@show');
Route::get('/clase/destroy/{id}', 'ClaseController@destroy');
Route::get('/clase/store', 'ClaseController@store');


Route::get('/cliente/all', 'ClienteController@index');
Route::get('/cliente/show/{id}', 'ClienteController@show');
Route::get('/cliente/destroy/{id}', 'ClienteController@destroy');
Route::get('/cliente/store', 'ClienteController@store');


Route::get('/habitacion/all', 'HabitacionController@index');
Route::get('/habitacion/show/{id}', 'HabitacionController@show');
Route::get('/habitacion/destroy/{id}', 'HabitacionController@destroy');
Route::get('/habitacion/store', 'HabitacionController@store');
Route::get('/habitacion/obtener/{id}', 'HabitacionController@habitaciones');


Route::get('/historial_cliente/all', 'Historial_ClienteController@index');
Route::get('/historial_cliente/show/{id}', 'Historial_ClienteController@show');
Route::get('/historial_cliente/destroy/{id}', 'Historial_ClienteController@destroy');
Route::get('/historial_cliente/store', 'Historial_ClienteController@store');


Route::get('/hotel/all', 'HotelController@index');
Route::get('/hotel/show/{id}', 'HotelController@show');
Route::get('/hotel/destroy/{id}', 'HotelController@destroy');
Route::get('/hotel/store', 'HotelController@store');


Route::get('/pais/all', 'PaisController@index');
Route::get('/pais/show/{id}', 'PaisController@show');
Route::get('/pais/store', 'PaisController@store');
Route::get('/pais/destroy/{id}', 'PaisController@destroy');


Route::get('/paquete/all', 'PaqueteController@index');
Route::get('/paquete/show/{id}', 'PaqueteController@show');
Route::get('/paquete/destroy/{id}', 'PaqueteController@destroy');
Route::get('/paquete/store', 'PaqueteController@store');


Route::get('/pasajero/all', 'PasajeroController@index');
Route::get('/pasajero/show/{id}', 'PasajeroController@show');
Route::get('/pasajero/destroy/{id}', 'PasajeroController@destroy');
Route::get('/pasajero/store', 'PasajeroController@store');


Route::get('/reserva/all', 'ReservaController@index');
Route::get('/reserva/show/{id}', 'ReservaController@show');
Route::get('/reserva/store', 'ReservaController@store');
Route::get('/reserva/destroy/{id}', 'ReservaController@destroy');

Route::get('/reserva/reservar_habitacion/{id_habitacion}/{fecha_inicio}/{fecha_fin}', 'ReservaController@reservar_habitacion');


Route::get('/seguro/all', 'Seguro_viajeController@index');
Route::get('/seguro/show/{id}', 'Seguro_viajeController@show');
Route::get('/seguro/destroy/{id}', 'Seguro_viajeController@destroy');
Route::get('/seguro/store', 'Seguro_viajeController@store');

Route::get('/accion/all', 'Tipo_AccionController@index');
Route::get('/accion/show/{id}', 'Tipo_AccionController@show');
Route::get('/accion/destroy/{id}', 'Tipo_AccionController@destroy');
Route::get('/accion/store', 'Tipo_AccionController@store');


Route::get('/tipo_pago/all', 'Tipo_PagoController@index');
Route::get('/tipo_pago/show/{id}', 'Tipo_PagoController@show');
Route::get('/tipo_pago/destroy/{id}', 'Tipo_PagoController@destroy');
Route::get('/tipo_pago/store', 'Tipo_PagoController@store');


Route::get('/transporte/all', 'TransporteController@index');
Route::get('/transporte/show/{id}', 'TransporteController@show');
Route::get('/transporte/destroy/{id}', 'TransporteController@destroy');
Route::get('/transporte/store', 'TransporteController@store');


Route::get('/vuelo/all', 'VueloController@index');
Route::get('/vuelo/show/{id}', 'VueloController@show');
Route::get('/vuelo/destroy/{id}', 'VueloController@destroy');
Route::get('/vuelo/store', 'VueloController@store');


Route::get('/asiento/all', "AsientoController@index");
Route::get('/asiento/show/{id}', "AsientoController@show");
Route::get('/asiento/destroy/{id}', "AsientoController@destroy");
Route::get('/asiento/store', 'AsientoController@store');


Route::get('/aeropuerto/all', 'AeropuertoController@index');
Route::get('/aeropuerto/show/{id}', 'AeropuertoController@show');
Route::get('/aeropuerto/destroy/{id}', 'AeropuertoController@destroy');
Route::get('/aeropuerto/store', 'AeropuertoController@store');


Route::get('/vuelo_aeropuerto/all', 'Vuelo_AeropuertoController@index');
Route::get('/vuelo_aeropuerto/vuelos/{id}', 'Vuelo_AeropuertoController@vuelos');

Route::get('/vuelo_aeropuerto/encontrar_vuelos/{id_aeropuerto_salida}/{id_aeropuerto_destino}', 'Vuelo_AeropuertoController@encontrar_vuelos');

