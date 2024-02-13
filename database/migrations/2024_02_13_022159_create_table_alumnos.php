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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->date('fecha_nacimiento');
            $table->string('direccion',100);
            $table->string('telefono',8);
            $table->timestamps();
            $table->foreignId('curso_id')->constrained('cursos','id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
