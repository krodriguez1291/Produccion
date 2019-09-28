<?php

namespace App\Http\Requests;

use App\Rules\ValidaCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class validacionMenu extends FormRequest
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
            'nombre' => 'required|max:50|unique:menu,nombre,'.$this->route('id'),
            'url' => ['required','max:100',new ValidaCampoUrl],
            'icono' => 'nullable|max:50' 
        ];
    }
    /*
    public function messages()
    {
        return[
            'nombre.required' => 'El campo nombre es requerido',
            'url.required' => 'El nombre url es requerido',
        ];
    }*/
}
