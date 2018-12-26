<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
     //nombre de la tabla
    protected $table='clase';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'tipo_clase', 'descripcion_clase'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function asientos(){
    	return $this->hasMany('App\Asiento');
    }
}
