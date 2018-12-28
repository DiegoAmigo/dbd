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
			'tipo_reserva' => 'required',
			'checkin' => 'required',
			'pagado' => 'required',
			'total_reserva' => 'required',
			'correo_cliente' => 'required',
			'telefono_cliente' => 'required',
			'id_cliente' => 'required',
			'id_habitacion' => 'required',
			'fecha_inicio_h' => 'required',
			'fecha_fin_h' => 'required',
			'id_paquete' => 'required',
			'patente' => 'required',
			'fecha_i_t' => 'required',
			'fecha_f_t' => 'required',
			'id_seguro' => 'required'
        ];
    }
}
