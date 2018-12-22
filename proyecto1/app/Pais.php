<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //nombre de la tabla
    protected $table='pais';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_pais'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function ciudad(){
    	return $this->hasMany('App\Ciudad');
    }
	 public function cliente(){
    	return $this->hasMany('App\Cliente');
    }
	 public function pasajeros(){
    	return $this->hasMany('App\Pasajero');
    }
}
