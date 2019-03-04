<?php

namespace App\Http\Controllers;



class Reserva_datos 
{


    public static $tipoReserva;
    public static $idCiudadOrigen;
    public static $idCiudadDestino;

    function __construct()
  {
    
    return true;
  }
    
    public static function getTipoReserva()
    {
        return self::$tipoReserva;
    }

    public function getIdCiudadOrigen()
    {
        return $this->tipoReserva;
    }
    public function getIdCiudadDestino()
    {
        return $this->tipoReserva;
    }

    public static function setTipoReserva($tipoReserva)
    {
        self::$tipoReserva = $tipoReserva;
    }

    public function setIdCiudadOrigen($idCiudadOrigen)
    {
        $this->idCiudadOrigen = $idCiudadOrigen;
    }

    public function setIdCiudadDestino($idCiudadDestino)
    {
        $this->idCiudadDestino = $idCiudadDestino;
    }

}
