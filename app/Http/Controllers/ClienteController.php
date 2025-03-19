<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Http\Requests\ClienteUpdate;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Metodo del index
    public function index(){
        
        $clientes = Cliente::all();
        
        return view('clientes.index', compact('clientes')); //compact = 'clientes' => $clientes
    }

    //Vista del formulario
    public function create(){
        return view('clientes.create');
    }


    //Metodo para el registro de un cliente
    public function store(ClienteRequest $request){

        $validateData = $request->validated();

        //validacion de booleano
       $validateData['estado'] = $request->has('estado');

        Cliente::create($validateData);

        return  redirect()->route('clientes.index')->with('success', 'Registro creado exitosamente');
    }


    //Metodo para la vista del edit
    public function edit($id){

        $cliente = Cliente::findOrFail($id);

        return view('clientes.edit', compact('cliente'));

    }


    //Metodo para actualizar cliente
    public function update(ClienteUpdate $request ,$id){


        $validateData = $request->validated();

        $validateData['estado'] = $request->has('estado');

        $cliente = Cliente::findOrFail($id);

        $cliente->update($validateData);

        return redirect()->route('clientes.index')->with('success', 'Registro actualizado exitosamente');

    }


    //Metodo para eliminar un cliente
    public function destroy($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Registro eliminado exitosamente');
    }

    
}
