<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
			'nombre_cl' => 'required|string',
			'apellido_cl' => 'required|string',
			'e-mail' => 'required|email',
			'fecha_nacimiento' => 'required|date',
			'contrasena' => 'required|string',
			'puntos_millas' => 'required|integer',
			'id_pais' => 'required|integer'
        ];
    }
}
