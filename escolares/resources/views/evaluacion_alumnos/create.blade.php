@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Evaluación</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('evaluacion_alumnos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="periodo" class="form-label">Periodo</label>
            <input type="text" class="form-control" id="periodo" name="periodo" maxlength="5" value="{{ old('periodo') }}" required>
        </div>

        <div class="mb-3">
            <label for="nonto_de_crol" class="form-label">No de Control</label>
            <input type="text" class="form-control" id="no_de_control" name="no_de_control" maxlength="10" value="{{ old('no_de_control') }}" required>
        </div>

        <div class="mb-3">
            <label for="materia" class="form-label">Materia</label>
            <input type="text" class="form-control" id="materia" name="materia" maxlength="7" value="{{ old('materia') }}" required>
        </div>

        <div class="mb-3">
            <label for="grupo" class="form-label">Grupo</label>
            <input type="text" class="form-control" id="grupo" name="grupo" maxlength="3" value="{{ old('grupo') }}" required>
        </div>

        <div class="mb-3">
            <label for="rfc" class="form-label">RFC</label>
            <input type="text" class="form-control" id="rfc" name="rfc" maxlength="13" value="{{ old('rfc') }}" required>
        </div>

        <div class="mb-3">
            <label for="clave_area" class="form-label">Clave Área</label>
            <input type="text" class="form-control" id="clave_area" name="clave_area" maxlength="6" value="{{ old('clave_area') }}" required>
        </div>

        <div class="mb-3">
            <label for="encuesta" class="form-label">Encuesta</label>
            <input type="text" class="form-control" id="encuesta" name="encuesta" maxlength="1" value="{{ old('encuesta') }}" required>
        </div>

        <div class="mb-3">
            <label for="respuestas" class="form-label">Respuestas</label>
            <input type="text" class="form-control" id="respuestas" name="respuestas" maxlength="50" value="{{ old('respuestas') }}" required>
        </div>

        <div class="mb-3">
            <label for="resp_abierta" class="form-label">Respuesta Abierta</label>
            <textarea class="form-control" id="resp_abierta" name="resp_abierta" maxlength="255" rows="3">{{ old('resp_abierta') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" maxlength="30" value="{{ old('usuario') }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_hora_evaluacion" class="form-label">Fecha y Hora de Evaluación</label>
            <input type="datetime-local" class="form-control" id="fecha_hora_evaluacion" name="fecha_hora_evaluacion" value="{{ old('fecha_hora_evaluacion') }}" required>
        </div>

        <div class="mb-3">
            <label for="consecutivo" class="form-label">Consecutivo</label>
            <input type="number" class="form-control" id="consecutivo" name="consecutivo" value="{{ old('consecutivo') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('evaluacion_alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection