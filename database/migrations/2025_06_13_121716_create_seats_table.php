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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('sala_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('funcion_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');
            $table->integer('seat_number');
            $table->boolean('isOccupied')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
