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
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Mail\mailCompra;
class ReservaController extends Controller
{

    
    public $tipoReserva;
    public $idCiudadOrigen;
    public $idCiudadDestino;
    public $datos;


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
        //$this->datos = new Reserva_datos();
        $tipoReserva = $_POST["opciones"];
        Reserva_datos::setTipoReserva($tipoReserva);
        
        if( (Reserva_datos::getTipoReserva() == "1") || (Reserva_datos::getTipoReserva() == "2") || (Reserva_datos::getTipoReserva() == "3") || (Reserva_datos::getTipoReserva() == "4") ) 
        { 
            $ciudad_origen = $_POST["ciudad_origen"];
            $pais_origen = $_POST["pais_origen"];
            $ciudad_destino = $_POST["ciudad_destino"];
            $pais_destino = $_POST["pais_destino"];
            $idOrigen = CiudadController::obtener_ciudad_pais($ciudad_origen,$pais_origen);
            $idDestino = CiudadController::obtener_ciudad_pais($ciudad_destino,$pais_destino);
            //$datos->idCiudadOrigen = $idOrigen;
            //$datos->idCiudadDestino = $idLlegada;
            $this->idCiudadOrigen = $idOrigen;
            $this->idCiudadDestino = CiudadController::obtener_ciudad_pais($ciudad_destino,$pais_destino);
            return view('vuelo',['idOrigen' => $idOrigen, 'idDestino' => $idDestino , 'tipoReserva'  => $tipoReserva]);
        } 
        //return view('cliente', compact('clientes'));
        return view('transporte');
    }


    public function continuar_reserva(Request $request)
    {
        $tipoReserva = $_POST["tipoReserva"]; //$request->tipoReserva;
        $idDestino = $_POST["idDestino"];
        $idOrigen = $_POST["idOrigen"];
        $idVuelo = $_POST["idVuelo"];
        $idTransporte = "0";
        $idHotel = "0";
        $idHabitacion = "0";

        if( ($tipoReserva == "3") || ($tipoReserva == "4") ) 
        { 
            
            return view('transporte',['idOrigen' => $idOrigen, 'idDestino' => $idDestino , 'tipoReserva'  => $tipoReserva, 'idVuelo' => $idVuelo , 'idTransporte' => $idTransporte, 'idHotel' => $idHotel , 'idHabitacion' => $idHabitacion]);
        } 
        
        if( ( $tipoReserva == "2")  ) 
        { 
            
            return view('hoteles',['idOrigen' => $idOrigen, 'idDestino' => $idDestino , 'tipoReserva'  => $tipoReserva, 'idVuelo' => $idVuelo , 'idTransporte' => $idTransporte, 'idHotel' => $idHotel , 'idHabitacion' => $idHabitacion]);
        }

        if( ($tipoReserva == "1")  ) 
        { 
            //falta la vista de verificacion
            //return view('hotels')->with('id_ciudad_llegada', ReservaController::$idCiudadDestino);
        }

        //return view('hotels')->with('id_ciudad_llegada', $this->idCiudadDestino);
    }



    public function continuar_reserva_transporte(Request $request)
    {
        $tipoReserva = $_POST["tipoReserva"];
        $idDestino = $_POST["idDestino"];
        $idOrigen = $_POST["idOrigen"];
        $idVuelo = $_POST["idVuelo"];
        $idTransporte = $_POST["idTransporte"];
        $idHotel = $_POST["idHotel"];
        $idHabitacion = $_POST["idHabitacion"];
        
        
        if( ( $tipoReserva == "4")  ) 
        { 
            
            return view('hoteles',['idOrigen' => $idOrigen, 'idDestino' => $idDestino , 'tipoReserva'  => $tipoReserva, 'idVuelo' => $idVuelo, 'idTransporte' => $idTransporte , 'idHotel' => $idHotel , 'idHabitacion' => $idHabitacion ]);
        }

        if( ($tipoReserva == "3")  ) 
        { 

            $idHabitacion = "0";
            return view('reservar' ,['idOrigen' => $idOrigen, 'idDestino' => $idDestino , 'tipoReserva'  => $tipoReserva, 'idVuelo' => $idVuelo, 'idTransporte' => $idTransporte , 'idHotel' => $idHotel , 'idHabitacion' => $idHabitacion ]);
        }

    }

    public function reserva_habitacion(Request $request)
    {
        $tipoReserva = $_POST["tipoReserva"];
        $idDestino = $_POST["idDestino"];
        $idOrigen = $_POST["idOrigen"];
        $idVuelo = $_POST["idVuelo"];
        $idTransporte = $_POST["idTransporte"];
        $idHotel = $_POST["idHotel"];
        $idHabitacion = $_POST["idHabitacion"];

        return view('habitaciones',['idOrigen' => $idOrigen, 'idDestino' => $idDestino , 'tipoReserva'  => $tipoReserva, 'idVuelo' => $idVuelo , 'idTransporte' => $idTransporte, 'idHotel' => $idHotel , 'idHabitacion' => $idHabitacion]);


    }

    public function reserva_verificar(Request $request)
    {
        $tipoReserva = $_POST["tipoReserva"];
        $idDestino = $_POST["idDestino"];
        $idOrigen = $_POST["idOrigen"];
        $idVuelo = $_POST["idVuelo"];
        $idTransporte = $_POST["idTransporte"];
        $idHotel = $_POST["idHotel"];
        $idHabitacion = $_POST["idHabitacion"];
        $correo = $_POST["email"];
        $telefono = $_POST["numero_telefono"];

        return view('reservar',['idOrigen' => $idOrigen, 'idDestino' => $idDestino , 'tipoReserva'  => $tipoReserva, 'idVuelo' => $idVuelo , 'idTransporte' => $idTransporte, 'idHotel' => $idHotel , 'idHabitacion' => $idHabitacion]);


    }

    public function finalizar_reserva(Request $request)
    {
        $tipoReserva = $_POST["tipoReserva"];
        $idDestino = $_POST["idDestino"];
        $idOrigen = $_POST["idOrigen"];
        $idVuelo = $_POST["idVuelo"];
        $idTransporte = $_POST["idTransporte"];
        $idHotel = $_POST["idHotel"];
        $idHabitacion = $_POST["idHabitacion"];
        $idUsuario = $_POST["idUsuario"];
        if (Auth::check()) {
            $idUsuario = auth()->user()->id;
        }
        

        if ($idVuelo == "0") {
            $idVuelo = NULL;
        }
        if ($idTransporte == "0") {
            $idTransporte = NULL;
        }

        if ($idHabitacion == "0") {
            $idHabitacion = NULL;
        }


$checkin = FALSE;
$pagado = FALSE;
$total = 100;
$idPaquete = NULL;
$idSeguro = NULL;
$fechaITransporte = NULL;
$fechaFTransporte = NULL;
$fechaIHabitacion = NULL;
$fechaFHabitacion = NULL;
$reservaFinal = Reserva::create([
            'tipo_reserva' => $tipoReserva,
            'checkin' => $checkin,
            'pagado' => $pagado,
            'total_reserva' => $total,
            'correo_cliente' => $correo,
            'telefono_cliente' => $telefono,
            'id_paquete' => $idPaquete,
            'id_cliente' => $idUsuario,
            'id_seguro' => $idSeguro,
            'id_transporte' => $idTransporte,
            'fecha_i_t' => $fechaITransporte,
            'fecha_f_t' => $fechaFTransporte,
            'id_habitacion' => $idHabitacion,
            'fecha_inicio_h' => $fechaIHabitacion,
            'fecha_fin_h' => $fechaFHabitacion,

        ]);

    \Mail::to($correo)->send(new mailCompra($reserva));
    return $reservaFinal;
    }


}
