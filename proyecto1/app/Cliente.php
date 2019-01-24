<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Cliente extends Authenticatable
{
    use Notifiable;
    //nombre de la tabla
    protected $table='clientes';
    //atributos
    //rellenar con atributos
    protected $fillable=[
		'tipo_documento', 'numero_documento' , 'nombre_cliente', 'apellido_cliente', 'email', 'fecha_nacimiento',
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