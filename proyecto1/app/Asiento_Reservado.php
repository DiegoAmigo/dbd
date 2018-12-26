<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento_Reservado extends Model
{
    //nombre de la tabla
    protected $table='asiento_reservado';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_reserva', 'id_asiento'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function asientos(){
    	return $this->belongsTo('App\Asiento');
    }
	public function reservas(){
    	return $this->belongsTo('App\Reserva');
    }
}
