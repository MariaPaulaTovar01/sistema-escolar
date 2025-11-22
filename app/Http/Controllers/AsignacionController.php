<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Materia;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{

    //Listar las asignaciones realizadas
    public function index()
    {
        $asignaciones = Asignacion::with(['estudiante', 'profesor', 'materia'])->get();
        return view('asignaciones.index', compact('asignaciones'));
    }

    //Vista de formulario de creación de asignación
    public function create()
    {
        $estudiantes = Estudiante::all();
        $profesores = Profesor::all();
        $materias = Materia::all();

        return view('asignaciones.create', compact('estudiantes', 'profesores', 'materias'));
    }

    //Guardar nueva asignación
    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required',
            'profesor_id' => 'required',
            'materia_id' => 'required',
        ]);

        Asignacion::create($request->all());

        return redirect()->route('asignaciones.index')->with('success', 'Asignación creada correctamente.');
    }
}
