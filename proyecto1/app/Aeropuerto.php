<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    //nombre de la tabla
    protected $table='aeropuertos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_aeropuerto', 'capacidad_aviones', 'id_ciudad'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function ciudades(){
    	return $this->belongsTo('App\Ciudad');
    }
	public function vuelos(){
    	return $this->belongsToMany('App\Vuelo');
    }
}
