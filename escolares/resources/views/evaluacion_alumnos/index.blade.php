@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Evaluaciones</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('evaluacion_alumnos.create') }}" class="btn btn-primary mb-3">Crear Nueva Evaluación</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Periodo</th>
                <th>No de Control</th>
                <th>Materia</th>
                <th>Grupo</th>
                <th>RFC</th>
                <th>Clave Área</th>
                <th>Encuesta</th>
                <th>Respuestas</th>
                <th>Respuesta Abierta</th>
                <th>Usuario</th>
                <th>Fecha y Hora de Evaluación</th>
                <th>Consecutivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evaluacion_alumnos as $evaluacion)
                <tr>
                    <td>{{ $evaluacion->periodo }}</td>
                    <td>{{ $evaluacion->no_de_control }}</td>
                    <td>{{ $evaluacion->materia }}</td>
                    <td>{{ $evaluacion->grupo }}</td>
                    <td>{{ $evaluacion->rfc }}</td>
                    <td>{{ $evaluacion->clave_area }}</td>
                    <td>{{ $evaluacion->encuesta }}</td>
                    <td>{{ $evaluacion->respuestas }}</td>
                    <td>{{ $evaluacion->resp_abierta }}</td>
                    <td>{{ $evaluacion->usuario }}</td>
                    <td>{{ \Carbon\Carbon::parse($evaluacion->fecha_hora_evaluacion)->format('d/m/Y H:i') }}</td>
                    <td>{{ $evaluacion->consecutivo }}</td>
                    <td>
                        <a href="{{ route('evaluacion_alumnos.show', $evaluacion->consecutivo) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('evaluacion_alumnos.edit', $evaluacion->consecutivo) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('evaluacion_alumnos.destroy', $evaluacion->consecutivo) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta evaluación?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $evaluacion_alumnos->links() }}
</div>
@endsection

