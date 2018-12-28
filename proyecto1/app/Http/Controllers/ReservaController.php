<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;

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
		$reserva = new Reserva;
       $reserva->tipo_reserva = $request->tipo_reserva;
		$reserva->checkin = $request->checkin;
		$reserva->pagado = $request->pagado;
		$reserva->total_reserva = $request->total_reserva;
		$reserva->correo_cliente = $request->correo_cliente;
		$reserva->telefono_cliente = $request->telefono_cliente;
		$reserva->id_cliente = $request->id_cliente;
		$reserva->id_habitacion = $request->id_habitacion;
		$reserva->fecha_inicio_h = $request->fecha_inicio_h;
		$reserva->fecha_fin_h = $request->fecha_fin_h;
		$reserva->id_paquete = $request->id_paquete;
		$reserva->patente = $request->patente;
		$reserva->fecha_i_t = $request->fecha_i_t;
		$reserva->fecha_f_t = $request->fecha_f_t;
		$reserva->id_seguro = $request->id_seguro;
        $reserva->save();
        return $reserva;
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
}
