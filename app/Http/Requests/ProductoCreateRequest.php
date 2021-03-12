<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoCreateRequest extends FormRequest
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
        $producto = $this->route('producto');

        return [
            'descripcion'=>"required|string|max:200",
            'codigo_barra'=>'unique:productos,codigo_barra,'.$this->producto.'|required',
            'precio'=>"required|numeric",
            'linea_id'=>"required",
            'marca_id'=>"required",
            'familia_id'=>"required",
            'talla_id'=>"required",
            'color_id'=>"required",
            'modelo_id'=>"required",
            'promocion_id'=>"nullable",
            'temporada_id'=>"required",
        ];
    }
}
