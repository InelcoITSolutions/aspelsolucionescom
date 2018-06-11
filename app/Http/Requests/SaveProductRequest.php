<?php

namespace aspelsoluciones\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
            'nombre'        => 'required',
            'clave'         => 'required',
            'etiqueta'      => 'required',
            'descrip_corta' => 'required',
            'descrip'       => 'required',
            'descrip_larga' => 'required',
            'incluye1'      => 'required',
            'incluye2'      => 'required',
            'precio'        => 'required',
            'imagen'        => 'required',
            'categoria_id'  => 'required',
        ];
    }
}
