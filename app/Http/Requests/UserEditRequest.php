<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        /*$user = $this->route('user');
        return [
            'name'=>'unique:users,name,'.$this->user.'|required',
            'email'=>'unique:users,email,'.$this->user.'|required',
            'password'=>'sometimes'
        ];*/

        return [
            'carnet_identidad'=>"required|unique:personas,carnet_identidad,".$this->route('id'),
            'nombre'=>"required|string|max:60",
            'apellidos'=>"required|string|max:60",
            'telefono'=>"nullable",
            'direccion'=>"nullable|string|max:100",
            'email'=>"required|unique:personas,email,".$this->route('id'),
            'password'=>"sometimes"
        ];
    }
}
