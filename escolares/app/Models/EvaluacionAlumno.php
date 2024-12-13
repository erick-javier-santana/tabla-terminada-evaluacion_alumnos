<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluacionAlumno extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'evaluacion_alumnos';

    // Indicar la clave primaria correcta
    protected $primaryKey = 'consecutivo';

    // Clave primaria auto-incremental (ajusta según sea necesario)
    public $incrementing = true;

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Desactivar timestamps
    public $timestamps = false;
    
    // Los campos que pueden asignarse de forma masiva
    protected $fillable = [
        'consecutivo' ,
        'periodo',
        'no_de_control',
        'materia',
        'grupo',
        'rfc',
        'clave_area',
        'encuesta',
        'respuestas',
        'resp_abierta',
        'usuario',
        'fecha_hora_evaluacion',
    
    ];

    // Indicamos que las fechas deben ser tratadas como objetos de tipo Carbon
    protected $casts = ['fecha_hora_evaluacion'];
}
