<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasajeroRequest extends FormRequest
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
            'tipo_documento' => 'required',
			'fecha_nac_p' => 'required',
			'nombre_pasajero' => 'required',
			'apellido_pasajero' => 'required',
			'asistencia especial' => 'required',
			'id_pais' => 'required'
        ];
    }
}
