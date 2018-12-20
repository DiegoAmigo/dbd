<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
     //nombre de la tabla
    protected $table='aviones';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_avion', 'marca', 'modelo', 'capacidad_asientos'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function asientos(){
    	return $this->hasMany('App\Asiento');
    }
}
