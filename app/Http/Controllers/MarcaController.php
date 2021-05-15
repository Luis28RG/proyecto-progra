<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        $data = Marca::all();
        return view('marca.tabla', compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate([
            'nombre_marca' => 'required',
            'descripcion_marca' => 'nullable'
        ]);

        Marca::insert($data);
        $data = Marca::all();
        return view('marca.tabla', compact('data'));

    }
    public function eliminar($id){
        Marca::find($id)->delete();
        $data = Marca::all();
        return view('marca.tabla', compact('data'));
    }
}
