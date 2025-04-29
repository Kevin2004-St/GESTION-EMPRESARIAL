<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Producto\ProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Metodo index
    public function index(Request $request){

        $userid = auth()->user()->id;
        $productos = Producto::where('created_by' , $userid)->paginate(5);


        return  view('web.productos.index', compact('productos'));
    }

    //Vista del formulario
    public function create(){
        return view('web.productos.create');
    }

    //Metodo para registrar un producto
    public function store(ProductoRequest $request){

        $data = $request->validated();

        Producto::create($data);

        return redirect()->route('productos.index')->with('success'. 'Registro creado exitosamente ');
        
    }


    //Metodo para las vitas de edit
    public function edit($id){

        $producto = Producto::findOrfail($id);

        return view('productos.edit' , compact('productos'));
    }


    
}
