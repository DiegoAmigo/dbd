<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asiento_Reservado;
use App\Http\Requests\Asiento_ReservadoRequest;

class Asiento_ReservadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Asiento_Reservado::all();
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
    public function store(Asiento_Reservado $request)
    {
        return Asiento_Reservado::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Asiento_Reservado::findOrFail($id);
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
    public function update(Asiento_Reservado $request, $id)
    {
        $asiento_reservado = Asiento_Reservado::find($id);
        $asiento_reservado->fill($request->all());
        $asiento_reservado->save();
        return $asiento_reservado;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asiento_reservado = Asiento_Reservado::findOrFail($id);
        $asiento_reservado->delete();
        return 'eliminado';
    }
	public function asientos_r($id)
    {
        $asiento_r = Asiento_Reservado::where('id_reserva',$id)->get();
        $datosAsientos_r = [];
        foreach ($asiento_r as $asientos) {
            $datosAsientos_r = array_collapse([$datosAsientos_r,Asiento::where('id',$asientos->id_asiento)->get()]);
        }
        return $datosAsientos_r;
    }
}
