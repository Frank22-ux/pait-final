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
    Schema::create('alumnos', function (Blueprint $table) {
        $table->id();
        $table->string('primer_nombre', 50);
        $table->string('segundo_nombre', 50)->nullable();
        $table->string('primer_apellido', 50);
        $table->string('segundo_apellido', 50)->nullable();
        $table->string('correo_institucional')->unique();
        $table->unsignedTinyInteger('semestre');
        $table->string('carrera', 100);
        $table->timestamps();
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
