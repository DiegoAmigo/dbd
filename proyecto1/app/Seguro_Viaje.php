<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro_Viaje extends Model
{
    //nombre de la tabla
    protected $table='seguro_viajes';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'descripcion', 'tipo_plan'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function reservas(){
    	return $this->hasMany('App\Reserva');
    }
}
