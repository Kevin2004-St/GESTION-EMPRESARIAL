<?php

namespace App\Http\Requests\Categorias;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CategoriaRequest extends FormRequest
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
        $id = $this->route('id');

        return [

            'nombre' => [
                'required',
                'min:3',
                'max:30',
                Rule::unique('categorias', 'nombre')->ignore($id),
            ],

            'descripcion' => 'nullable',
        ];
    }


    public function messages()
    {
        return [

            'nombre.required' => 'El campo de nombre es obligatorio.',
            'nombre.unique' => 'El nombre de esta categoria ya existe.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max' => 'El nombre no puede superar los 30 caracteres.'
        ];
    }
}
