<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aerolinea extends Model
{ 
	//nombre de la tabla
    protected $table='aerolineas';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_aerolinea', 'nombre_aerolinea'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function vuelos(){
    	return $this->hasMany('App\Vuelo');
    }
}
