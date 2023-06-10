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
        Schema::create('historias_clinicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('sexo_mascota');
            $table->string('peso_mascota');
            $table->string('especie_mascota');
            $table->string('edad_mascota');
            $table->string('esterilizar_mascota');
            $table->string('raza_mascota');
            $table->string('color_mascota');
            $table->string('medicina_preventiva');
            $table->string('nombre_dueño');
            $table->bigInteger('telefono_dueño');
            $table->string('direccion_dueño');
            $table->string('fc');
            $table->string('fr');
            $table->string('temperatura');
            $table->string('llenado_capilar');
            $table->string('pulso');
            $table->string('diagnostico_diferencial');
            $table->string('diagnostico_final');
            $table->string('test_laboratorio');
            $table->string('tratamiento');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias_clinicas');
    }
};
