<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransporteRequest extends FormRequest
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
            'patente' => 'required|string',
			'tipo_transporte' => 'required|integer',
			'empresa_transporte' => 'required|string',
			'monto' => 'required|integer',
			'precio_total' => 'required|integer',
			'capacidad_transporte' => 'required|integer',
			'id_ciudad' => 'required|integer'
        ];
    }
}
