<?php

namespace App\Http\Requests;

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
            "nombres" => "required|min:5",
            "apellidos" => "required|min:5",
            "email" => "required|email|unique:clientes,email",
            "celular" => "required|digits:10",
            "direccion" => "nullable|min:5",
            "fecha_nacimiento" => "nullable|date|before:today",
            "estado" => "boolean",
        ];
    }

    /**
     * Mensajes personalizados para las reglas de validación.
     */
    public function messages()
    {
        return [
            "nombres.required" => "El campo de nombre es obligatorio.",
            "nombres.min" => "El nombre debe tener mínimo 5 caracteres.",
            "apellidos.required" => "El campo de apellidos es obligatorio.",
            "apellidos.min" => "El apellido debe tener mínimo 5 caracteres.",
            "email.required" => "El campo de email es obligatorio.",
            "email.email" => "El email debe ser válido.",
            "email.unique" => "Este correo ya está registrado.",
            "celular.required" => "El campo de celular es obligatorio.",
            "celular.digits" => "El celular debe tener exactamente 10 dígitos.",
            "direccion.min" => "La dirección debe tener mínimo 5 caracteres.",
            "fecha_nacimiento.before" => "La fecha de nacimiento debe ser anterior a la fecha actual.",
            "estado.boolean" => "El estado debe ser verdadero o falso.",
        ];
    }
}
