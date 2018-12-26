<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    //nombre de la tabla
    protected $table='habitacions';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'capacidad_habitacion', 'disponibilidad_habitacion', 'numero_habitacion', 'id_hotel'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function reservas(){
    	return $this->hasMany('App\Reserva');
    }
	public function hoteles(){
    	return $this->belongsTo('App\Hotel');
    }
}
