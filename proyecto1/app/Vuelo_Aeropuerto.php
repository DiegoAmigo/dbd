<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo_Aeropuerto extends Model
{
    //nombre de la tabla
    protected $table='vuelo_aeropuertos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_aeropuerto', 'id_vuelo', 'origen'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function vuelos(){
    	return $this->belongsTo('App\Vuelo');
    }
	public function aeropuerto(){
    	return $this->belongsTo('App\Aeropuerto');
    }
}
