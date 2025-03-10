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

        $validateData = $request->validated();

        //validacion de booleano
       $validateData['estado'] = $request->has('estado');

        Cliente::create($validateData);

        return  redirect()->route('clientes.index')->with('success', 'Registro creado exitosamente');
    }


    public function destroy($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Registro eliminado exitosamente');
    }

    
}
