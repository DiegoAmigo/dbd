<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    //nombre de la tabla
    protected $table='pasajeros';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'tipo_documento', 'fecha_nacimiento', 'nombre_pasajero', 'apellido_pasajero', 'asistencia_especial', 'id_pais'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function vuelos(){
    	return $this->hasMany('App\Vuelo');
    }
	public function pais(){
    	return $this->belongsTo('App\Pais');
    }
	public function pasajero_reserva(){
    	return $this->hasMany('App\Pasajero_Reserva');
    }
}
