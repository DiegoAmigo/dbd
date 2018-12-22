<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_Cliente extends Model
{
    //nombre de la tabla
    protected $table='historial_clientes';
    //atributos
    protected $nombre_aerolinea;
    //rellenar con atributos
    protected $fillable=[
    	'fecha', 'id_cliente', 'id_tipo_accion'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
	public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
	public function acciones(){
    	return $this->belongsTo('App\Tipo_Accion');
    }
}
