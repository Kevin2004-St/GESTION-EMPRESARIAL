<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Funcion del index
    public function index(){
        
        $clientes = Cliente::all();
        
        return view('clientes.index', compact('clientes')); //compact = 'clientes' => $clientes
    }

    //Vista del formulario
    public function create(){
        return view('clientes.create');
    }


    //Funcion para el registro de un cliente
    public function store(ClienteRequest $request){

        Cliente::created($request->validate());

        return redirect()->route('clientes.index')->with('success', 'Registro realizado exitosamente');
    }

    
    
}
