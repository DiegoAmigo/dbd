<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
	//nombre de la tabla
    protected $table='vuelos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'hora_inicio', 'hora_fin', 'cupos_disponibles', 'disponible_v', 'atraso', 'id_aerolinea'
    ];
    //relacion con otra tabla
    // poner nombre en singular si se relaciona con 1
    public function aerolinea(){
    	$this->belongsTo('App\Aerolinea');
    }
	public function asiento_reservado(){
    	$this->hasMany('App\Asiento_Vuelo');
    }
	public function vuelo_reservado(){
    	return $this->hasMany('App\Vuelo_Reservado');
    }
	public function vuelo_aeropuerto(){
    	return $this->hasMany('App\Vuelo_Aeropuerto');
    }
}
