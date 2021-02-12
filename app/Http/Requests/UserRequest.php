<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'carnet_identidad'=>"required|unique:personas,carnet_identidad,".$this->route('id'),
            'nombre'=>"required|string|min:5|max:60",
            'apellidos'=>"required|string|min:5|max:60",
            'telefono'=>"nullable",
            'direccion'=>"nullable|string|min:10|max:100",
            'email'=>"required|unique:personas,email,".$this->route('id'),
            'password'=>"required"
        ];
    }
}
