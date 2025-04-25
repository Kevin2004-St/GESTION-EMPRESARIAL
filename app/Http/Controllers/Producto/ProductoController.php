<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
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

    public function store(){
        
    }


    
}
