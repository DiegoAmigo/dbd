<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    //nombre de la tabla
    protected $table='transportes';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'patente', 'tipo_transporte', 'empresa_transporte', 'monto', 'capacidad_transporte', 'id_ciudad'
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
