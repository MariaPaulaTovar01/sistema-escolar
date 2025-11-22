<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfesorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('estudiantes', EstudianteController::class);

Route::resource('profesores', ProfesorController::class);

Route::resource('materias', MateriaController::class);