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
        Schema::create('ine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ine_id'); // Cambiar a unsignedBigInteger
            $table->string('seccion');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('localidad_id');
            $table->string('curp', 18);
            $table->date('vigencia');
            $table->date('emision');
            $table->integer('año_registro');
            $table->timestamps();

            // Definir clave foránea
            $table->foreign('ine_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ine');
    }
};