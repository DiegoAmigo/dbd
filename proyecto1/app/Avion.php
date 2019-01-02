<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
     //nombre de la tabla
    protected $table='avions';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'marca', 'modelo', 'capacidad_a'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function asientos(){
    	return $this->hasMany('App\Asiento');
    }
}
