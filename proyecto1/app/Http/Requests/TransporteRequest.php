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
            'patente' => 'required',
			'tipo_transporte' => 'required',
			'empresa_transporte' => 'required',
			'monto' => 'required',
			'precio_total' => 'required',
			'capacidad_transporte' => 'required',
			'id_ciudad' => 'required'
        ];
    }
}
