<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
     //nombre de la tabla
    protected $table='ciudad';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_ciudad', 'id_pais'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function aeropuerto(){
    	return $this->hasMany('App\Aeropuerto');
    }
	public function transportes(){
    	return $this->hasMany('App\Transporte');
    }
	public function paquetes(){
    	return $this->hasMany('App\Paquete');
    }
	public function hoteles(){
    	return $this->hasMany('App\Hotel');
    }
	public function pais(){
    	return $this->belongsTo('App\Pais');
    }
}
