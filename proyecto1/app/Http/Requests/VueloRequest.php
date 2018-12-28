<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VueloRequest extends FormRequest
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
            'hora_inicio' => 'required',
			'hora_fin' => 'required',
			'cupos_disponibles' => 'required',
			'disponible_vuelo' => 'required',
			'atraso' => 'required',
			'id_aerolinea' => 'required'
        ];
    }
}
