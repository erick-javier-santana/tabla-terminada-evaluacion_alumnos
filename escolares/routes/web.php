<?php

use App\Http\Controllers\EvaluacionAlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Rutas para el recurso de EvaluacionAlumno
Route::resource('evaluacion_alumnos', EvaluacionAlumnoController::class);