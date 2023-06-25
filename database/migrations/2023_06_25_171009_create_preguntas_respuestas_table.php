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
        Schema::create('preguntas_respuestas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pregunta')->unsigned();
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_respuesta');
            $table->foreign('id_respuesta')->references('id_respuesta')->on('respuestas')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas_respuestas');
    }
};