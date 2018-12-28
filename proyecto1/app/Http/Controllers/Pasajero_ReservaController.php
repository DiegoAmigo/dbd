<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasajero_Reserva;

class Pasajero_ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return Pasajero_Reserva::all();
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
		return Pasajero_Reserva::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pasajero_Reserva::find($id);
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
        $pasajero_reserva = Pasajero_Reserva::find($id);
        $pasajero_reserva->fill($request->all());
        $pasajero_reserva->save();
        return $pasajero_reserva;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasajero_reserva = Pasajero_Reserva::find($id);
        $pasajero_reserva->delete();
        return 'eliminado';
    }
	public function pasajeros($id)
    {
        $pasajeros = Pasajero_Reserva::where('id_reserva',$id)->get();
        $datosPasajeros = [];
        foreach ($pasajeros as $pasajero) {
            $datosPasajeros = array_collapse([$datosPasajeros,Pasajero::where('id',$pasajero->id_pasajero)->get()]);
        }
        return $datosPasajeros;
    }
}
