<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transporte;
use App\Reserva;
use App\Http\Requests\TransporteRequest;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Transporte::all();
    }


    public static function obtener_transporte()
    {
        return Transporte::all();
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
    public function store(TransporteRequest $request)
    {
        return Transporte::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Transporte::findOrFail($id);
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
    public function update(TransporteRequest $request, $id)
    {
        $transporte = Transporte::find($id);
        $transporte->fill($request->all());
        $transporte->save();
        return $transporte;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transporte= Transporte::findOrFail($id);
        $transporte->delete();
        return 'eliminado';
    }
	public function TransportInCity($id_ciudad, $empresa_transporte){
		$transport = collect();
        $transport_aux = Transporte::where('id_ciudad', '=' , $id_ciudad)->get();
		$transport_aux2 = Transporte::where('empresa_transporte', '=' , $empresa_transporte)->get();
        $transport = $transport_aux->concat($transport_aux2);
        return $transport;
	}
	
    public function Transport_city($id_ciudad,$fecha_inicio,$fecha_fin){
        $transport = Transporte::where('id_ciudad', $id_ciudad)->get();
        $transportes = [];
        foreach ($transport as $transporte) {
            if ( count(Reserva::where([['id_transporte',$transporte->id],])->get()) != 0 ) {
                $reservas = Reserva::where([['id_transporte',$transporte->id],])->get();
                foreach ($reservas as $reserva) {
                    if( ($reserva->fecha_f_t < $fecha_inicio)  &&  ($reserva->fecha_i_t > $fecha_fin) )
                    {
                        array_push ($transportes,$transporte);
                    }
                }

            }
            else
            {
                array_push ($transportes,$transporte);
            }

        }

        return $transportes;
    }

}
