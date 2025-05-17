<?php

namespace App\Http\Requests\Clientes;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a hacer esta solicitud.
     */
    public function authorize()
    {
        return true; // Permitir la validación
    }

    /**
     * Reglas de validación para la solicitud.
     */
    public function rules()
    {
        return [
            'cedula' => 'required|string|min:10|unique:clientes,cedula,'. $this->route('id'),
            'nombres' => 'required|string|min:4',
            'apellidos' => 'required|string|min:4',
            'email' => 'required|email|unique:clientes,email,' . $this->route('id'),
            'celular' => 'required|string|min:10',
            'direccion' => 'nullable|string|min:4',
            'fecha_nacimiento' => 'nullable|date|before_or_equal:today',
        ];
    }

    /**
     * Mensajes personalizados para las reglas de validación.
     */
    public function messages()
    {
        return [
            "cedula.min" => "La cedula debe tener mínimo 10 digitos.",
            "cedula.unique" => "Esta cédula ya esta registrada.",
            "nombres.required" => "El campo de nombre es obligatorio.",
            "nombres.min" => "El nombre debe tener mínimo 4 caracteres.",
            "apellidos.required" => "El campo de apellidos es obligatorio.",
            "apellidos.min" => "El apellido debe tener mínimo 4 caracteres.",
            "email.email" => "El email debe ser válido.",
            "email.unique" => "Este correo ya está registrado.",
            "celular.min" => "El celular debe tener minimo 10 dígitos.",
            "direccion.min" => "La dirección debe tener mínimo 3 caracteres.",
            "fecha_nacimiento.before_or_equal" => "La fecha de nacimiento debe ser anterior a la fecha actual.",
        ];
    }
}
