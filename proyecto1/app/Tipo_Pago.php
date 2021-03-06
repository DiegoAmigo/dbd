<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Pago extends Model
{
    //nombre de la tabla
    protected $table='tipo_pagos';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_tipo', 'detalle_pago'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function boleta(){
    	return $this->hasMany('App\Boleta');
    }
}
