<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Http\Requests\ClienteUpdate;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ClienteController extends Controller
{
    //Metodo del index
    public function index(Request $request){

        $userId = auth()->user()->id;
        $clientes = Cliente::where('created_by', $userId)->paginate(5);
        $search = $request->get('search');

        if(empty($search)){
            $clientes = Cliente::paginate(5);
        } else{
            $fullSearch = Str::lower($search);
            $Cedula = Cliente::whereRaw('cedula = ?', [$fullSearch])->exists();
            $Name = Cliente::whereRaw('LOWER(nombres) =?', [$fullSearch])->exists(); 

            if($Cedula){
                $clientes = Cliente::whereRaw('cedula = ?', [$fullSearch])->paginate(1);
            } else {
                $clientes = Cliente::whereRaw('LOWER(nombres) LIKE ?' , ["%{$fullSearch}%"])->paginate(1);
            }
        }
 
        return view('web.clientes.index', compact('clientes')); //compact = '   => $clientes 
    }

    //Vista del formulario
    public function create(){
        return view('web.clientes.create');
    }


    //Metodo para el registro de un cliente
    public function store(ClienteRequest $request){

       $data = $request->validated();

        //validacion de booleano
       $data['estado'] = $request->has('estado');

        Cliente::create($data);

        return  redirect()->route('clientes.index')->with('success', 'Registro creado exitosamente');
    }


    //Metodo para la vista del edit
    public function edit($id){

        $cliente = Cliente::findOrFail($id);

        return view('web.clientes.edit', compact('cliente'));

    }


    //Metodo para actualizar cliente
    public function update(ClienteUpdate $request ,$id){


        $data = $request->validated();

        $data['estado'] = $request->has('estado');

        $cliente = Cliente::findOrFail($id);

        $cliente->update($data);

        return redirect()->route('clientes.index')->with('success', 'Registro actualizado exitosamente');

    }


    //Metodo para eliminar un cliente
    public function destroy($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('delete', 'Registro eliminado exitosamente');
    }

    
}
