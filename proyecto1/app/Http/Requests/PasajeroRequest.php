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
            'tipo_documento' => 'required|integer',
			'fecha_nacimiento' => 'required|date',
			'nombre_pasajero' => 'required|string',
			'apellido_pasajero' => 'required|string',
			'asistencia_especial' => 'required|boolean',
			'id_pais' => 'required|integer'
        ];
    }
}
