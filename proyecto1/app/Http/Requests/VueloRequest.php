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
            'hora_inicio' => 'required|date_format:"H:i:s"',
			'hora_fin' => 'required|date_format:"H:i:s"',
			'cupos_disponibles' => 'required|integer',
			'disponible_v' => 'required|boolean',
			'atraso' => 'required|boolean',
			'id_aerolinea' => 'required|integer'
        ];
    }
}
