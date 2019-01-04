<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'tipo_reserva' => 'required|integer',
			'checkin' => 'required|boolean',
			'pagado' => 'required|boolean',
			'total_reserva' => 'required|integer',
			'correo_cl' => 'required|email',
			'telefono_cl' => 'required|string',
			'id_cliente' => 'required|string',
			'id_habitacion' => 'required|integer',
			'fecha_inicio_h' => 'required|date',
			'fecha_fin_h' => 'required|date',
			'id_paquete' => 'required|integer',
			'id_transporte' => 'required|integer',
			'fecha_i_t' => 'required|date',
			'fecha_f_t' => 'required|date',
			'id_seguro' => 'required|integer'
        ];
    }
}
