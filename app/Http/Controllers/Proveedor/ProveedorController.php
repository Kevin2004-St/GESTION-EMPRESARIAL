<?php

namespace App\Http\Controllers\Proveedor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Proveedores\ProveedoresRequest;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use NunoMaduro\Collision\Contracts\Provider;

class ProveedorController extends Controller
{

    //Metodo del index
    public function index(Request $request){
        $userId = auth()->user()->id;
        $proveedores = Proveedor::where('created_by', $userId);
        $search = $request->get('search');

        if(empty($search)){
            $proveedores = Proveedor::paginate(5);
        } else{
            $fullSearch = Str::lower($search);

            $proveedores = Proveedor::WhereRaw('LOWER(nombre) LIKE ? ',
            ["%{$fullSearch}%"])->paginate(1);
        }

        return  view('web.proveedores.index', compact('proveedores')); //compact => $proveedores

    }

    //Metodo vista del formulario
    public function create(){
        return view('web.proveedores.create');
    }


    //Metodo para registrar un proveedor
    public function store(ProveedoresRequest $request){
        
        $data = $request->validated();

        //Validacion de booleano
        $data['estado'] = $request->has('estado');

        Proveedor::create($data);

        return redirect()->route('proveedores.index')->with('success', 'Registro creado exitosamente');
    }


    //Metodo vista de formulario de edicion
    public function edit($id){

        $proveedor = Proveedor::findOrFail($id);

        return view('web.proveedores.index', compact('proveedor'));

    }

    //Metodo para actualizar un proveedor
    public function update(ProveedoresRequest $request, $id){

        $data = $request->validated();

        //Validacion de booleano
        $data['estado'] = $request->has('estado');

        $proveedor = Proveedor::findOrFail($id);

        $proveedor->update($data);

        return redirect()->route('proveedor.index')->with('success', 'Registro actualizado exitosamente');
    }


    //Metodo para eliminar un proveedor
    public function destroy($id){

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedor.index')-> with('success', 'Registro eliminado exitosamente');
    }
    
}
