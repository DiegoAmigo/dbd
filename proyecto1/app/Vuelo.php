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
    	'id_vuelo', 'origen', 'hora_inicio', 'destino', 'hora_fin', 'cupos_disponibles', 'disponible_vuelo', 'atraso', 'id_aerolinea'
    ];
    //relacion con otra tabla
    // poner nombre en singular si se relaciona con 1
    public function aerolinea(){
    	$this->belongsTo('App\Aerolinea');
    }
	public function asientos(){
    	return $this->belongsToMany('App\Asiento');
    }
	public function reservas(){
    	return $this->belongsToMany('App\Reservas');
    }
	public function aeropuerto(){
    	return $this->belongsToMany('App\Aeropuerto');
    }
}
