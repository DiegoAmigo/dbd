<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aeropuerto;
use App\Http\Requests\AeropuertoRequest;

class AeropuertoController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return Aeropuerto::all();
       /* $aeropuerto = Aeropuerto::all();
        return $aeropuerto;*/
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AeropuertoRequest $request)
    {
        return Aeropuerto::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Aeropuerto::findOrFail($id);
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
    public function update(AeropuertoRequest $request, $id)
    {
        $aeropuerto = Aeropuerto::findOrFail($id);
        $aeropuerto->fill($request->all());
        $aeropuerto->save();
        return $aeropuerto;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aeropuerto = Aeropuerto::findOrFail($id);
        $aeropuerto->delete();
        return 'eliminado';
    }


    public static function obtenerAeropuertos($idCiudad)
    {
        $aeropuertos = Aeropuerto::where('id_ciudad', $idCiudad)->get();
        return $aeropuertos;
    }


}
