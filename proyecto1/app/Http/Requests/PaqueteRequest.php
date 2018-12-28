<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaqueteRequest extends FormRequest
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
            'codigo_paquete' => 'required',
			'cupos' => 'required',
			'cantidad_noches' => 'required',
			'cantidad_dias' => 'required',
			'id_ciudad' => 'required'
        ];
    }
}
