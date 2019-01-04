<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Asiento_VueloRequest extends FormRequest
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
            'id_vuelo' => 'required|integer',
			'id_asiento' => 'required|integer',
			'disponible_asiento' => 'required|boolean'
        ];
    }
}
