<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Accion extends Model
{
    //nombre de la tabla
    protected $table='tipo_accions';
    //atributos
    protected $nombre_aerolinea;
    //rellenar con atributos
    protected $fillable=[
    	'accion', 'descripcion_accion'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function historial(){
    	return $this->hasMany('App\Historial_Cliente');
    }
}
