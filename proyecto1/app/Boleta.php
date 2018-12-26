<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    //nombre de la tabla
    protected $table='boletas';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_boleta', 'monto_total', 'fecha_pago', 'id_tipo_pago','id_reserva'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function reservas(){
    	return $this->belongsTo('App\Reserva');
    }
	public function pago(){
    	return $this->belongsTo('App\Tipo_Pago');
    }
}
