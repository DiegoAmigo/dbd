<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //nombre de la tabla
    protected $table='clientes';
    //atributos
    //rellenar con atributos
    protected $fillable=[
		'tipo_documento', 'numero_documento' , 'nombre_cliente', 'apellido_cliente', 'correo_cliente', 'fecha_nacimiento',
		'password', 'puntos_millas', 'id_pais'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function historial(){
    	return $this->hasMany('App\Historial_Cliente');
    }
	public function reservas(){
    	return $this->hasMany('App\Reserva');
    }
	public function pais(){
    	return $this->belongsTo('App\Pais');
    }
}