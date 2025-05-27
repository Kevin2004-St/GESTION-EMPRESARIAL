<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [

        'nombre',
        'email',
        'contacto',
        'direccion',
        'estado'

    ];

    protected $casts = [
        'estado' => 'boolean'
    ];

        public static function boot()
    {

        parent::boot();

        static::creating(function ($empresa) {
            $empresa->created_by = Auth::user()->id;
        });

        static::updating(function ($empresa) {
            $empresa->updated_by = Auth::user()->id;
        });

        static::deleting(function ($empresa) {
            $empresa->deleted_by = Auth::user()->id;
            $empresa->save();
        });

    }


}
