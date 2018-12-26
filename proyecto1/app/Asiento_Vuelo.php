<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento_Vuelo extends Model
{
    //nombre de la tabla
    protected $table='asiento_vuelo';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_asiento', 'id_vuelo', 'disponible_asiento'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function vuelos(){
    	return $this->belongsTo('App\Vuelo');
    }
	public function asientos(){
    	return $this->belongsTo('App\Asiento');
    }
}
