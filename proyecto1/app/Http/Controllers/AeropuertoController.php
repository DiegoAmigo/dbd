<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aeropuerto;

class AeropuertoController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$aeropuerto = Aeropuerto::get();
        return view('aeropuerto.index')->with('aeropuerto', $aeropuerto);
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
        return view('aeropuerto.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$aeropuerto = Aeropuerto::create($request->all());
        return redirect()->route('aeropuerto.index');
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
        return Aeropuerto::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aeropuerto = Ciudad::find($id);
        return view('aeropuerto.edit')->with('aeropuerto',$aeropuerto);
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
        $aeropuerto = Aeropuerto::find($id);
        $aeropuerto->fill($request->all());
        $aeropuerto->save();
        return redirect()->route('aeropuerto.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aeropuerto = Aeropuerto::find($id);
        $aeropuerto->delete();
		Aeropuerto::destroy($id);
        return redirect()->route('aeropuerto.index');
        /*return "lo eliminé";*/
    }
}
