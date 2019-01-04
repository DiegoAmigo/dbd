<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsientoRequest extends FormRequest
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
            'numero_asiento' => 'required|integer',
			'letra_asiento' => 'required|string',
			'id_avion' => 'required|integer',
			'id_clase' => 'required|integer'
        ];
    }
}
