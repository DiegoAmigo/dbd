<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use APP\Pasajero;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::all();
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
        return Cliente::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::findOrFail($id);
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
        $clientes = Cliente::findOrFail($id);
        $clientes->fill($request->all());
        $clientes->save();
        return $clientes;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes= Cliente::findOrFail($id);
        $clientes->delete();
        return 'eliminado';
    }

    public function pais($id)
    {
        $pais = Cliente::where('id_pais',$id)->get();
        return $pais;
    }
	public function clientesPasajeros(){
		$cliente = Cliente::get();
		$pasajero = Pasajero::where($cliente->nombre_cliente,'=',$pasajero->nombre_pasajero)->where($cliente->apellido_cliente,'=',$pasajero->apellido_pasajero)->where($cliente->fecha_nacimiento,'=',$pasajero->fecha_nacimiento)->get();
        return $pasajero;
	}
}
