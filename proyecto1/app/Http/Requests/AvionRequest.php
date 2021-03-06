<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvionRequest extends FormRequest
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
            'marca' => 'required|string',
			'modelo' => 'required|string',
			'capacidad_avion' => 'required|integer'
        ];
    }
}
