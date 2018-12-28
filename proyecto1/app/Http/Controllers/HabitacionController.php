<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitacion;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Habitacion::all();
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
        //por alguna razon me dice que no funciona con postman
        //supuesto ejemplo de comoo guardar
        return Habitacion::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Habitacion::find($id);
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
        $habitacions = Habitacion::find($id);
        $habitacions->fill($request->all());
        $habitacions->save();
        return $habitacions;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //me dijieron que tengo que modificar un archivo, pero no se acuerdan cual para que funcione el delete, pero este funciona si lo pruebo sin el postman
        $habitacions = Habitacion::find($id);        
        $habitacions->delete();
        return 'eliminado';
    }


    public function habitaciones($id)
    {
        $habitacions = Habitacion::where('id_hotel',$id)->get();
        return $habitacions;
    }
}
