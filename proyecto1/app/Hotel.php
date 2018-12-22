<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //nombre de la tabla
    protected $table='hoteles';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_hotel', 'monto', 'id_ciudad', 'direccion_hotel', 'cantidad_estrellas', 'id_ciudad'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function habitaciones(){
    	return $this->hasMany('App\Habitacion');
    }
	public function ciudad(){
    	return $this->belongsTo('App\Ciudad');
    }
}
