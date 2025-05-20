<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Producto\ProductoRequest;
use App\Http\Requests\Producto\ProductoUpdate;
use App\Models\Categorias;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductoController extends Controller
{
    //Metodo index
    public function index(Request $request){

        $userId = auth()->user()->id;
        $productos = Producto::where('created_by' , $userId);
        $search = $request->get('search');
    
        if(empty($search)){
            $productos = Producto::paginate(5);
        } else {
            $fullSearch = Str::lower($search);
            $productos = Producto::whereRaw('LOWER(nombre) LIKE ?', ["%{$fullSearch}%"])->paginate(5);
    
        }

        return  view('web.productos.index', compact('productos'));
    }

    //Vista del formulario
    public function create(){

        $categorias = Categorias::where('estado',true)->get(); 

        return view('web.productos.create', compact('categorias'));
    }

    //Metodo para registrar un producto
    public function store(ProductoRequest $request){

        $data = $request->validated();

        Producto::create($data);

        return redirect()->route('productos.index')->with('success', 'Registro creado exitosamente ');
        
    }


    //Metodo para las vitas de edit
    public function edit($id){

        $producto = Producto::findOrfail($id);

        $categorias = Categorias::where('estado', true)->get();

        return view('web.productos.edit' , compact('producto', 'categorias'));
    }

    //Metodo para actualizar producto
    public function update(ProductoRequest $request, $id){

        $data = $request->validated();

        $producto = Producto::findOrfail($id);

        $producto->update($data);

        return redirect()->route('productos.index')->with('success', 'Registro actualizado exitosamente');
        

    }


    //Metodo para eliminar un producto
    public function destroy($id){

        $producto = Producto::findOrfail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Registro eliminado exitosamente');

    }
    
}
