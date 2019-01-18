<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Http\Requests\CiudadRequest;
use App\Pais;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return Ciudad::all();
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
    public function store(CiudadRequest $request)
    {
		return Ciudad::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ciudad::findOrFail($id);
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
    public function update(CiudadRequest $request, $id)
    {
        $ciudad = Ciudad::findOrFail($id);
        $ciudad->fill($request->all());
        $ciudad->save();
        return $ciudad;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::findOrFail($id);
        $ciudad->delete();
        return 'eliminado';
    }

    public function pais($id)
    {
        $pais = Ciudad::where('id_ciudad',$id)->get();
        return $pais;
    }

    public static function ciudad_con_pais()
    {
        $ciudades = Ciudad::all();
        $datos = [];
        foreach ($ciudades as $ciudad) {
            $datos = array_collapse([$datos,[array_collapse([[$ciudad],Pais::where('id',$ciudad->id_pais)->get()])]]);
        }
        return $datos;
    }
}
