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
          Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_dueño');
            $table->string('apellido_dueño');
            $table->bigInteger('celular');
            $table->string('direccion');
            $table->string('documento');
            $table->string('email');
            $table->unsignedBigInteger('nombre_mascota_id');
            $table->foreign('nombre_mascota_id')->references('id')->on('mascotas');
            $table->string('nombre_mascota_real');
            $table->string('raza_mascota');
            $table->string('genero_mascota');
            $table->string('color_mascota');
            $table->string('especie_mascota');
            $table->date('fecha_nacimiento');
            $table->boolean('activo')->default(false);
            $table->boolean('estado_cita')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
