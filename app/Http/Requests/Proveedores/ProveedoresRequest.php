<?php

namespace App\Http\Requests\Proveedores;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProveedoresRequest extends FormRequest
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
                Rule::unique('proveedores', 'nombre')->ignore($id),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('proveedores' ,'email')->ignore($id),
            ],
            'contacto' => 'required|string|min:10',
            'direccion' => 'nullable|string|min:4',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo de nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max' => 'El nombre no puede superar los 30 caracteres.',
            'nombre.unique' => 'Este nombre ya está registrado.',
            'email.email' => 'El email debe ser valido',
            'email.unique' => 'Este correo ya está registrado',
            'contacto.required' => 'El campo de contacto es obligatorio.',
            'contacto.min' => 'El contacto debe tener minimo 10 digitos.',
            'direccion.min' => 'La dirección debe tener minimo 4 caracteres'



        ];
    }
}
