<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Seguro_ViajeRequest extends FormRequest
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
            'descripcion' => 'required|string',
			'tipo_plan' => 'required|integer'
        ];
    }
}
