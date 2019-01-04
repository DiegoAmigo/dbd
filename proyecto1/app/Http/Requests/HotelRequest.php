<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'nombre_hotel' => 'required|string',
			'direccion_hotel' => 'required|string',
			'cant_estrellas' => 'required|integer|max:5',
			'id_ciudad' => 'required|integer'
        ];
    }
}
