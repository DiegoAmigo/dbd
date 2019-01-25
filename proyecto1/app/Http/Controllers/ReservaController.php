<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Cliente;
use App\Ciudad;
use App\Vuelo_Aeropuerto;
use App\Aeropuerto;
use App\Vuelo_Reservado;
use App\Http\Requests\ReservaRequest;
use App\Http\Controllers\VueloController;

class ReservaController extends Controller
{


    static $tipoReserva;
    static $idCiudadOrigen;
    static $idCiudadDestino;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reserva::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservaRequest $request)
    {
        /*return Reserva::create($request->all());*/
		return Reserva::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Reserva::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservaRequest $request, $id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->fill($request->all());
        $reserva->save();
        return $reserva;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva= Reserva::findOrFail($id);
        $reserva->delete();
        return 'eliminado';
    }
	public function Reserva_Viaje($nombre_cl, $nombre_ciudad){
		$ciudad = Ciudad::where('nombre_ciudad',$nombre_ciudad)->get();
		$cliente = Cliente::where('nombre_cl',$nombre_cl)->get();
		$aeropuerto = Aeropuerto::where('id_ciudad','=',$ciudad->id)->get();
		$reserva = Reserva::where('id_cliente','=',$cliente->id)->get();
		$vuelo_reservado = Vuelo_Reservado::where('id_reserva','=',$reserva->id)->get();
		$vuelo_aeropuerto = Vuelo_Aeropuerto::where('id_aeropuerto','=',$aeropuerto->id)->where('origen','=',false)->where('id_vuelo','=',$vuelo_reservado->id_vuelo)->get();
        return $vuelo_aeropuerto;
	}


    public function reservar_habitacion($id_habitacion,$fecha_inicio,$fecha_fin)
    {
        $habitacions = Reserva::where('id_habitacion',$id_habitacion)->get();
        $disponible = "true";
        foreach ($habitacions as $habitacion) {
            if ( ( ($habitacion->fecha_inicio_h <= $fecha_inicio) and ($habitacion->fecha_fin_h >= $fecha_inicio) ) or ( ($habitacion->fecha_inicio_h <= $fecha_fin) and ($habitacion->fecha_fin_h >= $fecha_fin) ) or ( ($habitacion->fecha_inicio_h >= $fecha_inicio) and ($habitacion->fecha_fin_h <= $fecha_fin) ) ) {
                $disponible = "false";
            }
        }
        return $disponible;
    }

    public function transporte_disponible($id_transporte,$fecha_inicio,$fecha_fin)
    {
        $transportes = Reserva::where('id_transporte',$id_transporte)->get();
        $disponible = true;
        foreach ($transportes as $transporte) {
            if ( ( ($transporte->fecha_i_t <= $fecha_inicio) and ($transporte->fecha_f_t >= $fecha_inicio) ) or ( ($transporte->fecha_i_t <= $fecha_fin) and ($transporte->fecha_f_t >= $fecha_fin) ) or ( ($transporte->fecha_i_t >= $fecha_inicio) and ($transporte->fecha_f_t <= $fecha_fin) ) ) {
                $disponible = false;
            }
        }
        return $disponible;
    }

    public function iniciar_reserva(Request $request)
    {
        //$datos = $request->all():
        ReservaController::$tipoReserva = $_POST["opciones"];
        if( ($_POST["opciones"] == "1") || ($_POST["opciones"] == "2") || ($_POST["opciones"] == "3") || ($_POST["opciones"] == "4") ) 
        { 
            $ciudad_origen = $_POST["ciudad_origen"];
            $pais_origen = $_POST["pais_origen"];
            $ciudad_destino = $_POST["ciudad_destino"];
            $pais_destino = $_POST["pais_destino"];
            $idOrigen = CiudadController::obtener_ciudad_pais($ciudad_origen,$pais_origen);
            $idLlegada = CiudadController::obtener_ciudad_pais($ciudad_destino,$pais_destino);
            ReservaController::$idCiudadOrigen = $idOrigen;
            ReservaController::$idCiudadDestino = $idLlegada;
            return view('vuelo')->with('idOrigen', $idOrigen)->with('idLlegada', $idLlegada);
        } 
        //return view('cliente', compact('clientes'));
        return view('transporte');
    }


    public function continuar_reserva(Request $request)
    {
        if( (ReservaController::$tipoReserva == "3") || (ReservaController::$tipoReserva == "4") ) 
        { 
            
            return view('transporte')->with('id_ciudad_llegada', ReservaController::$idCiudadDestino);
        } 
        
        if( (ReservaController::$tipoReserva == "2")  ) 
        { 
            
            return view('hotels')->with('id_ciudad_llegada', ReservaController::$idCiudadDestino);
        }

        if( (ReservaController::$tipoReserva == "1")  ) 
        { 
            //falta la vista de verificacion
            //return view('hotels')->with('id_ciudad_llegada', ReservaController::$idCiudadDestino);
        }

    }




}
