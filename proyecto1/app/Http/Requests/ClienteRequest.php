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
            'tipo_documento' => 'required',
			'nombre_cl' => 'required',
			'apellido_cl' => 'required',
			'e-mail' => 'required',
			'fecha_nacimiento' => 'required',
			'contrasena' => 'required',
			'puntos_millas' => 'required',
			'id_pais' => 'required'
        ];
    }
}
