<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vuelo_Aeropuerto;

class Vuelo_AeropuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return Vuelo_Aeropuerto::all();
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
		return Vuelo_Aeropuerto::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vuelo_Aeropuerto::findOrFail($id);
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
        $vuelo_aeropuerto = Vuelo_Aeropuerto::find($id);
        $vuelo_aeropuerto->fill($request->all());
        $vuelo_aeropuerto->save();
        return $vuelo_aeropuerto;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vuelo_aeropuerto = Vuelo_Aeropuerto::findOrFail($id);
        $vuelo_aeropuerto->delete();
        return 'eliminado';
    }
    public function vuelos($id)
    {
        $vuelos = Vuelo_Aeropuerto::where('id_aeropuerto',$id)->get();
        $datosVuelos = [];
        foreach ($vuelos as $vuelo) {
            $datosVuelos = array_collapse([$datosVuelos,Vuelo::where('id',$vuelo->id_vuelo)->get()]);
        }
        return $datosVuelos;
    }
}
