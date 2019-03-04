<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vuelo_Aeropuerto;
use App\Vuelo;
use App\Http\Requests\Vuelo_AeropuertoRequest;
use App\Http\Controllers\AeropuertoController;

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
    public function store(Vuelo_AeropuertoRequest $request)
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
    public function update(Vuelo_AeropuertoRequest $request, $id)
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



    public static function encontrar_vuelos($id_aeropuerto_salida,$id_aeropuerto_destino)
    {
        $vuelos = Vuelo_Aeropuerto::where([
    ['id_aeropuerto',$id_aeropuerto_salida],
    ['origen',true],])->get();
        $datosVuelos = [];
        foreach ($vuelos as $vuelo) {
            if (count(Vuelo_Aeropuerto::where([
    ['id_vuelo',$vuelo->id_vuelo],
    ['origen',false],])->get()) != 0) {
                $datosVuelos = array_collapse([$datosVuelos,[array_collapse([[$vuelo],Vuelo_Aeropuerto::where([
                    ['id_vuelo',$vuelo->id_vuelo],
                    ['origen',false],])->get()])]]);
            }
            
        }
        
        foreach ($datosVuelos as $vuelo) {
            if ($vuelo[1]->id_aeropuerto == $id_aeropuerto_destino) {
                return $vuelo;
            }
            else {
                $vuelos2 = Vuelo_Aeropuerto::where([
    ['id_aeropuerto',$vuelo[1]->id_aeropuerto],
    ['origen',true],])->get();
        $datosVuelos2 = [];
        foreach ($vuelos2 as $vuelo2) {
            if (count(Vuelo_Aeropuerto::where([
    ['id_vuelo',$vuelo2->id_vuelo],
    ['origen',false],])->get()) != 0) {
                $datosVuelos2 = array_collapse([$datosVuelos2,[array_collapse([[$vuelo2],Vuelo_Aeropuerto::where([
                    ['id_vuelo',$vuelo2->id_vuelo],
                    ['origen',false],])->get()])]]);
            }
            
        }
        
            foreach ($datosVuelos2 as $vuelo3) {
                    if ($vuelo3[1]->id_aeropuerto == $id_aeropuerto_destino) {
                            return array_collapse([$vuelo,$vuelo3]);
                    }
                    


            }
            }
            
        }

        return [];
    }


    public static function encontrar_vuelos_ciudad($id_ciudad_salida,$id_ciudad_destino)
    {
        $aeropuertos_salida = AeropuertoController::obtenerAeropuertos($id_ciudad_salida);
        $aeropuertos_destino = AeropuertoController::obtenerAeropuertos($id_ciudad_destino);
        $vuelos = [];
        foreach ($aeropuertos_salida as $salida) 
        {
            foreach ($aeropuertos_destino as $destino)
            {
                $vuelos = array_collapse([$vuelos,Vuelo_AeropuertoController::encontrar_vuelos($salida->id,$destino->id)]);
            }
        }
        $vueloFinal = [];
        $idVueloAnterior = 0;
        foreach ($vuelos as $vuelo) {
            if ($idVueloAnterior != $vuelo->id_vuelo) {
                $vueloFinal = array_collapse([$vueloFinal,Vuelo::where('id',$vuelo->id_vuelo)->get()]);
                $idVueloAnterior = $vuelo->id_vuelo;
            }
            
        }
        return $vueloFinal;
    }

}
