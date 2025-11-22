<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{

    // Listar profesores
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    //Crear profesores

    public function create()
    {
        return view('profesores.create');
    }

    //Guardar profesores 
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email|unique:profesores'
        ]);

        Profesor::create($request->all());
        return redirect()->route('profesores.index')->with('success', 'Profesor registrado correctamente.');
    }

    //Eliminar profesores

    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();

        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado.');
    }
}
