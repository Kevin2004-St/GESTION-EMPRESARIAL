<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'celular',
        'direccion',
        'fecha_nacimiento',
        'estado'
    ];

    protected $casts = [
        'estado' => 'boolean',
    ];




}
