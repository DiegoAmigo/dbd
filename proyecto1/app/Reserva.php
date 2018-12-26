<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //nombre de la tabla
    protected $table='reservas';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'id_reserva', 'tipo_reserva', 'checkin', 'pagado', 'total_reserva', 'correo_cliente', 'telefono_cliente', 
		'id_cliente', 'id_habitacion', 'fecha_inicio_h', 'fecha_fin_h', 'id_paquete', 'id_transporte', 'fecha_i_t', 'fecha_f_t', 'id_seguro'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
	public function seguro(){
    	return $this->belongsTo('App\Seguro_Viaje');
    }
	public function habitaciones(){
    	return $this->belongsTo('App\Habitacion');
    }
	public function paquetes(){
    	return $this->belongsTo('App\Paquete');
    }
	public function transportes(){
    	return $this->belongsTo('App\Transporte');
    }
	public function boleta(){
        return $this->hasOne(Boleta::class);
    }
	public function asientos(){
    	return $this->belongsMany('App\Asiento');
    }
	public function vuelos(){
    	return $this->belongsToMany('App\Vuelo');
    }
	public function pasajeros(){
    	return $this->belongsToMany('App\Pasajero');
    }
}
