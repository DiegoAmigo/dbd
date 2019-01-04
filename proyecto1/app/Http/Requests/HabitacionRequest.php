<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitacionRequest extends FormRequest
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
            'capacidad_habitacion' => 'required|integer',
			'monto' => 'required|integer',
			'disponibilidad_habitacion' => 'required|boolean',
			'numero_habitacion' => 'required|integer',
			'id_hotel' => 'required|integer'
        ];
    }
}
