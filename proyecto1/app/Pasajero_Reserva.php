<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero_Reserva extends Model
{
    //nombre de la tabla
    protected $table='pasajero_reserva';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_pasajero', 'id_asiento'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function pasajeros(){
    	return $this->belongsTo('App\Pasajero');
    }
	public function reservas(){
    	return $this->belongsTo('App\Reserva');
    }
}
