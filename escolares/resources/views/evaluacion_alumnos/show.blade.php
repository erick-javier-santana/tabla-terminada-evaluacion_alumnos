@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Evaluación</h1>

    <div class="mb-3">
        <strong>Periodo:</strong>
        <p>{{ $evaluacion_alumno->periodo }}</p>
    </div>

    <div class="mb-3">
        <strong>No de Control:</strong>
        <p>{{ $evaluacion_alumno->no_de_control }}</p>
    </div>

    <div class="mb-3">
        <strong>Materia:</strong>
        <p>{{ $evaluacion_alumno->materia }}</p>
    </div>

    <div class="mb-3">
        <strong>Grupo:</strong>
        <p>{{ $evaluacion_alumno->grupo }}</p>
    </div>

    <div class="mb-3">
        <strong>RFC:</strong>
        <p>{{ $evaluacion_alumno->rfc }}</p>
    </div>

    <div class="mb-3">
        <strong>Clave Área:</strong>
        <p>{{ $evaluacion_alumno->clave_area }}</p>
    </div>

    <div class="mb-3">
        <strong>Encuesta:</strong>
        <p>{{ $evaluacion_alumno->encuesta }}</p>
    </div>

    <div class="mb-3">
        <strong>Respuestas:</strong>
        <p>{{ $evaluacion_alumno->respuestas }}</p>
    </div>

    <div class="mb-3">
        <strong>Respuesta Abierta:</strong>
        <p>{{ $evaluacion_alumno->resp_abierta }}</p>
    </div>

    <div class="mb-3">
        <strong>Usuario:</strong>
        <p>{{ $evaluacion_alumno->usuario }}</p>
    </div>

    <div class="mb-3">
        <strong>Fecha y Hora de Evaluación:</strong>
        <p>{{ \Carbon\Carbon::parse($evaluacion_alumno->fecha_hora_evaluacion)->format('d/m/Y H:i') }}</p>
    </div>

    <div class="mb-3">
        <strong>Consecutivo:</strong>
        <p>{{ $evaluacion_alumno->consecutivo }}</p>
    </div>

    <a href="{{ route('evaluacion_alumnos.index') }}" class="btn btn-secondary">Volver</a>
    <a href="{{ route('evaluacion_alumnos.edit', $evaluacion_alumno->id) }}" class="btn btn-warning">Editar</a>
    
    <form action="{{ route('evaluacion_alumnos.destroy', $evaluacion_alumno->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
    </form>
</div>
@endsection