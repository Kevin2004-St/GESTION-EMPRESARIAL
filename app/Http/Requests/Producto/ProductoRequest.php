<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductoRequest extends FormRequest
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
                'max:100',
                Rule::unique('productos','nombre')->ignore($id),
            ],
        
            'descripcion' => 'nullable|min:5',
            'precio_unitario' => 'required|numeric|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'stock' => 'required|integer|min:0',
            
        ];
    }


    public function messages()
    {
        return [

        'nombre.required' => 'El nombre del producto es obligatorio.',
        'nombre.unique' => 'Este nombre de producto ya esta registado.',
        'precio_unitario.required' => 'El precio es obligatorio.',
        'categoria_id.required' => 'Debe seleccionar una categoría.',
        'categoria_id.exists' => 'La categoría seleccionada no existe.',
        'stock.required' => 'El stock es obligatorio.',

        ];
    }
}
