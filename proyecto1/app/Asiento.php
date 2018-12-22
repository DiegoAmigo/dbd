<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
     //nombre de la tabla
    protected $table='asientos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_asiento', 'numero_asiento', 'letra_asiento', 'id_avion', 'id_clase'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function aviones(){
    	return $this->belongsTo('App\Avion');
    }
	public function clase(){
    	return $this->belongsTo('App\Clase');
    }
	public function reservas(){
    	return $this->belongsToMany('App\Reserva');
    }
	public function vuelos(){
    	return $this->belongsToMany('App\Vuelo');
    }
}
