<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo_Reservado extends Model
{
    //nombre de la tabla
    protected $table='vuelo_reservado';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_reserva', 'id_vuelo'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function vuelos(){
    	return $this->belongsTo('App\Vuelo');
    }
	public function reservas(){
    	return $this->belongsTo('App\Reserva');
    }
}
