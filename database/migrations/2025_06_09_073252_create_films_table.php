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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('director');
            $table->string('actors');
            $table->string('genero');
            $table->text('sinopsis');
            $table->string('poster')->nullable();
            $table->integer('duracion');
            $table->enum('calificacion', ['Todos los Públicos', '+7', '+12', '+16', '+18', 'X']);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
