<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio_unitario',
        'stock',
        'estado'
    ];


    protected $cast = [
        'estado' => 'boolean',
    ];


    public static function boot(){

        
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
