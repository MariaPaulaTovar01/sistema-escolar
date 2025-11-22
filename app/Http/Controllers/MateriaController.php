<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    //Listar Materias
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    // Redireccion a formulario de creacion de materia.
    public function create()
    {
        return view('materias.create');
    }

    //Guardar materia nueva
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:materias',
        ]);
        Materia::create($request->all());
        return redirect()->route('materias.index')->with('success', 'Materia creada correctamente');
    }

    //Vista de edicion de materia 
    public function edit($id)
    {
        $materia = Materia::FindOrFail($id);
        return view('materias.edit', compact('materia'));
    }

    //Editar materia 
    public function update(Request $request, $id)
    {
        $materia = Materia::FindOrFail($id);

        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:materias,codigo,' .$id,
        ]);
        $materia->update($request->all());
        return redirect()->route('materias.index')->with('success', 'Materia actualizada correctamente');

    }

    //Eliminar materia
    public function destroy(string $id)
    {
        $materia = Materia::FindOrFail($id);
        $materia->delete();

        return redirect()->route('materias.index')->with('success', 'Materia eliminada exitosamente');
    }
}
