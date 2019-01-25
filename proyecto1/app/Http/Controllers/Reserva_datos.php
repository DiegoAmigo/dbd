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
    
    public function getTipoReserva()
    {
        return $this->tipoReserva;
    }

    public function getIdCiudadOrigen()
    {
        return $this->tipoReserva;
    }
    public function getIdCiudadDestino()
    {
        return $this->tipoReserva;
    }

    public function setTipoReserva($tipoReserva)
    {
        $this->tipoReserva = $tipoReserva;
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
