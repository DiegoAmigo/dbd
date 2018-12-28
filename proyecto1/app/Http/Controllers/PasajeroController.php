<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajero;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pasajero::all();
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
       /* return Pasajero::create($request->all());*/
	   $pasajero = new Pasajero;
       $pasajero->tipo_documento = $request->tipo_documento;
		$pasajero->fecha_nac_p = $request->fecha_nac_p;
		$pasajero->nombre_pasajero = $request->nombre_pasajero;
		$pasajero->apellido_pasajero = $request->apellido_pasajero;
		$pasajero->asistencia especial = $request->asistencia especial;
		$pasajero->id_pais = $request->id_pais;
        $pasajero->save();
        return $pasajero;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pasajero::findOrFail($id);
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
        $pasajero = Pasajero::findOrFail($id);
        $pasajero->fill($request->all());
        $pasajero->save();
        return $pasajero;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasajero=Pasajero::findOrFail($id);
        $pasajero->delete();
        return 'elimina3';
    }
}
