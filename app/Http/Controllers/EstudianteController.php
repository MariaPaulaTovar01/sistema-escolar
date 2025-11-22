<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // Mostrar lista
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Formulario de creación
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar estudiante
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email|unique:estudiantes',
        ]);

        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado correctamente.');
    }

    // Eliminar estudiante
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado.');
    }
}
