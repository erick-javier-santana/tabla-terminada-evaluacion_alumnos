<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluacion_alumnos', function (Blueprint $table) {
            $table->string('periodo')->nullable();   // 12
            $table->string('no_de_control', 10);    // 1
            $table->char('materia', 7);             // 2
            $table->char('grupo', 3)->nullable();   // 3
            $table->char('rfc', 13)->nullable();    // 4
            $table->char('clave_area', 6)->nullable(); // 5
            $table->char('encuesta', 1)->nullable();   // 6
            $table->string('respuestas', 50)->nullable(); // 7
            $table->string('resp_abierta', 255)->nullable(); // 8
            $table->string('usuario', 30)->nullable(); // 9
            $table->dateTime('fecha_hora_evaluacion')->nullable(); // 10
            $table->integer('consecutivo')->primary(); // Clave primaria
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_alumnos');
    }
};
