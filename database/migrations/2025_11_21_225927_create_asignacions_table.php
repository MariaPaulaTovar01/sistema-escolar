<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('asignaciones', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('estudiante_id')->nullable();
        $table->unsignedBigInteger('profesor_id')->nullable();
        $table->unsignedBigInteger('materia_id');

        $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
        $table->foreign('profesor_id')->references('id')->on('profesores')->onDelete('cascade');
        $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacions');
    }
};
