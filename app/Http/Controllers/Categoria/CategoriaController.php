<?php

namespace App\Http\Controllers\Categoria;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categorias\CategoriaRequest;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoriaController extends Controller
{
    //Metodo index
    public function index(Request $request){

        $userId = auth()->user()->id;
        $categorias = Categorias::where('created_by', $userId);
        $search = request()->get('search');

        if(empty($search)){
            $categorias =  Categorias::paginate(5);
        }else{
            $fullSearch = Str::lower($search);
            $categorias = Categorias::whereRaw('LOWER(nombre) LIKE ?', ["%{$fullSearch}%"])->paginate(1);
        } 

        return view('web.categorias.index', compact('categorias'));
  
    }

    //Vista de formulario
    public function create(){
        return view('web.categorias.create');
    }

    //Metodo para crear categoria
    public function store(CategoriaRequest $request){

        $data = $request->validated();

        //Validacion de estado
        $data['estado'] = $request->has('estado');

        Categorias::create($data);

        return redirect()->route('categorias.index')->with('success', 'Registro creado exitosamente');
    }


    //Metodo para vista de update
    public function edit($id){

        $categorias = Categorias::findOrFail($id);

        return view('web.categorias.edit', compact('categorias'));
    }

    //Metodo para actualizar una categoria
    public function update(CategoriaRequest $request, $id){

        $data = $request->validated();

        //Validacion de estado
        $data['estado'] = $request->has('estado');

        $categorias = Categorias::findOrFail($id);

        $categorias->update($data);

        return redirect()->route('categorias.index')->with('success', 'Registro actualizado exitosamente');


    }


    //Metodo para eliminar una categoria
    public function destroy($id){

        $categoria = Categorias::findOrFail($id);

        $categoria->delete();

        return redirect()->route('categorias.index')->with('success','Registro eliminado exitosamente');

    }
    




}
