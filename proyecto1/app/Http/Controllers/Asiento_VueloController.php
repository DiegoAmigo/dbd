<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asiento_Vuelo;

class Asiento_VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Asiento_Vuelo::all();
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
        return Asiento_Vuelo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Asiento_Vuelo::findOrFail($id);
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
        $asiento_vuelo = Asiento_Vuelo::find($id);
        $asiento_vuelo->fill($request->all());
        $asiento_vuelo->save();
        return $asiento_vuelo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vuelo = Asiento_Vuelo::findOrFail($id);
        $asiento_vuelo->delete();
        return 'eliminado';
    }
	public function asientos($id)
    {
        $asiento = Asiento_Vuelo::where('id_vuelo',$id)->get();
        $datosAsientos = [];
        foreach ($asiento as $asientos) {
            $datosAsientos = array_collapse([$datosAsientos,Asiento::where('id',$asientos->id_asiento)->get()]);
        }
        return $datosAsientos;
    }

    public function asientos_disponibles($id)
    {
        $asientos = Asiento_Vuelo::where([
    ['id_vuelo',$id],
    ['disponible_asiento',true],])->get();
        
        return $asientos;
    }
}
