<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $data = Categoria::all();
        return view('categoria.tabla', compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable'
        ]);

        Categoria::insert($data);
        $data = Categoria::all();
        return view('categoria.tabla', compact('data'));

    }
    public function eliminar($id){
        Categoria::find($id)->delete();
        $data = Categoria::all();
        return view('categoria.tabla', compact('data'));
    }
}
