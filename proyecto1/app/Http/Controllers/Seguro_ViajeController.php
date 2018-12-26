<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Seguro_ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$seguro = Seguro_Viaje::get();
        return view('seguro.index')->with('seguro', $seguro);
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
        return view('seguro.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$seguro = Seguro_Viaje::create($request->all());
        return redirect()->route('seguro.index');
       /* return Aeropuerto::create($request->all());*/
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Seguro_Viaje::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seguro = Seguro_Viaje::find($id);
        return view('seguro.edit')->with('seguro',$seguro);
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
        $seguro = Seguro_Viaje::find($id);
        $seguro->fill($request->all());
        $seguro->save();
        return redirect()->route('seguro.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seguro = Seguro_Viaje::find($id);
        $seguro->delete();
		Seguro_Viaje::destroy($id);
        return redirect()->route('seguro.index');
        /*return "lo eliminé";*/
    }
}
