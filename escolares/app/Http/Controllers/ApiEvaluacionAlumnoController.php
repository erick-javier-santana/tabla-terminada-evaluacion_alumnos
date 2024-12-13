<?php

namespace App\Http\Controllers;

use App\Models\EvaluacionAlumno;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiEvaluacionAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluaciones = EvaluacionAlumno::all();
        return response()->json($evaluaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'periodo' => 'required|max:5',
            'no_de_control' => 'required|max:10',
            'materia' => 'required|max:7',
            'grupo' => 'required|max:3',
            'rfc' => 'required|max:13',
            'clave_area' => 'required|max:6',
            'encuesta' => 'required|max:1',
            'respuestas' => 'required|max:50',
            'resp_abierta' => 'nullable|max:255',
            'usuario' => 'required|max:30',
            'fecha_hora_evaluacion' => 'required|date',
            'consecutivo' => 'required|integer',
        ]);

        $evaluacion = EvaluacionAlumno::create($request->all());
        return response()->json($evaluacion, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($consecutivo)
    {
        try {
            $evaluacion = EvaluacionAlumno::findOrFail($consecutivo);
            return response()->json($evaluacion);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Evaluación no encontrada'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $consecutivo)
    {
        $request->validate([
            'periodo' => 'required|max:5',
            'no_de_control' => 'required|max:10',
            'materia' => 'required|max:7',
            'grupo' => 'required|max:3',
            'rfc' => 'required|max:13',
            'clave_area' => 'required|max:6',
            'encuesta' => 'required|max:1',
            'respuestas' => 'required|max:50',
            'resp_abierta' => 'nullable|max:255',
            'usuario' => 'required|max:30',
            'fecha_hora_evaluacion' => 'required|date',
        ]);
    
        try {
            $evaluacion = EvaluacionAlumno::findOrFail($consecutivo);
            $evaluacion->update($request->all());
            return response()->json(['message' => 'Evaluación actualizada correctamente', 'data' => $evaluacion], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Evaluación no encontrada'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar la evaluación', 'details' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($consecutivo)
    {
        try {
            $evaluacion = EvaluacionAlumno::findOrFail($consecutivo);
            $evaluacion->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Evaluación no encontrada'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al eliminar la evaluación'], 500);
        }
    }
}

