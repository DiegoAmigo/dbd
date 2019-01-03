<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Cliente;
use App\Ciudad;
use App\Vuelo_Aeropuerto;
use App\Aeropuerto;
use App\Vuelo_Reservado;

class ReservaController extends Controller
{
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
    public function store(Request $request)
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
    public function update(Request $request, $id)
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
	public function Reserva_Cliente($nombre_cl, $nombre_ciudad){
        /*$reserva_1 = Reserva::where('id_cliente',$id_cliente)->get();
		$reserva_2 = Reserva::where('id_ciudad',$id_ciudad)->get();
		$transport_aux2 = Transporte::where('empresa_transporte', '=' , $empresa_transporte)->get();
        $transport = $transport_aux->concat($transport_aux2);*/
		$ciudad = Ciudad::where('nombre_ciudad',$nombre_ciudad)->get();
		$cliente = Cliente::where('nombre_cl',$nombre_cl)->get();
		$aeropuerto = Aeropuerto::where('id_ciudad','=',$ciudad->id)->get();
		$reserva = Reserva::where('id_cliente','=',$cliente->id)->get();
		$vuelo_reservado = Vuelo_Reservado::where('id_reserva','=',$reserva->id)->get();
		$vuelo_aeropuerto = Vuelo_Aeropuerto::where('id_aeropuerto','=',$aeropuerto->id)->where('id_vuelo','=',$vuelo_reservado->id_vuelo)->get();
        return $vuelo_aeropuerto;
	}
}
