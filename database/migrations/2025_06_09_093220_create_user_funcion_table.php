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
        Schema::create('user_funcion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('funcion_id');
            $table->integer('seat_number');
            $table->integer('amount');
            $table->decimal('price');
            $table->decimal('total_purchase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_sesion');
    }
};
