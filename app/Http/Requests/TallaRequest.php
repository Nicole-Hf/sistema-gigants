<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TallaRequest extends FormRequest
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
            'talla'=>"required|string|unique:tallas,talla,".$this->route('id')
        ];
    }
}
