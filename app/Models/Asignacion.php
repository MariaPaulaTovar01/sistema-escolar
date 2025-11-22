<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones';

    protected $fillable = [
        'estudiante_id',
        'profesor_id',
        'materia_id',
    ];

    //Relaciones con las otras tablas

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
