<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    //nombre de la tabla
    protected $table='aeropuerto';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_aeropuerto', 'capacidad_aviones', 'id_ciudad'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function vuelos(){
    	return $this->belongsTo('App\Ciudad');
    }
	public function vuelos(){
    	return $this->belongsToMany('App\Vuelo');
    }
}
