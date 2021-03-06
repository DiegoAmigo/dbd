<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seguro_Viaje;
use App\Http\Requests\Seguro_ViajeRequest;

class Seguro_ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return Seguro_Viaje::all();
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
    public function store(Seguro_ViajeRequest $request)
    {
        return Seguro_Viaje::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Seguro_Viaje::findOrFail($id);
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
    public function update(Seguro_ViajeRequest $request, $id)
    {
        $seguro = Seguro_Viaje::findOrFail($id);
        $seguro->fill($request->all());
        $seguro->save();
        return $seguro;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seguro = Seguro_Viaje::findOrFail($id);
        $seguro->delete();
        return 'eliminado';
    }
}
