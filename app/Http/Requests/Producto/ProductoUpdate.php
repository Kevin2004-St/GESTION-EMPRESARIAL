<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;

class ProductoUpdate extends FormRequest
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
            
            'nombre' => 'required|min:3|max:100|unique:productos,nombre' . $this->route('$id'),
            'descripcion' => 'nullable|min:5',
            'precio_unitario' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
    
        ];
    }

    public function messages()
    {
        return [

            'nombre.required' => 'El nombre del producto es obligatorio.',
            'nombre.unique' => 'Este nombre de producto ya esta registado.',
            'precio_unitario.required' => 'El precio es obligatorio.',
            'stock.required' => 'El stock es obligatorio.',

    
        ];
    }
}
