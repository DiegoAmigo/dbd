<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    //nombre de la tabla
    protected $table='paquetes';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'codigo_paquete', 'cupos', 'cantidad_noches', 'cantidad_dias', 'id_ciudad'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function reservas(){
    	return $this->hasMany('App\Reserva');
    }
	public function ciudad(){
    	return $this->belongsTo('App\Ciudad');
    }
}
