<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vuelo_Reservado;
use App\Http\Requests\Vuelo_ReservadoRequest;

class Vuelo_ReservadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return Vuelo_Reservado::all();
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
    public function store(Vuelo_ReservadoRequest $request)
    {
		return Vuelo_Reservado::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vuelo_Reservado::findOrFail($id);
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
    public function update(Vuelo_ReservadoRequest $request, $id)
    {
        $vuelo_reservado = Vuelo_Reservado::findOrFail($id);
        $vuelo_reservado->fill($request->all());
        $vuelo_reservado->save();
        return $vuelo_reservado;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vuelo_reservado = Vuelo_Reservado::findOrFail($id);
        $vuelo_reservado->delete();
        return 'eliminado';
    }
	public function vuelos_r($id)
    {
        $vuelos_r = Vuelo_Reservado::where('id_reserva',$id)->get();
        $datosVuelos_r = [];
        foreach ($vuelos_r as $vuelo) {
            $datosVuelos_r = array_collapse([$datosVuelos_r,Vuelo::where('id',$vuelo->id_vuelo)->get()]);
        }
        return $datosVuelos_r;
    }
}
