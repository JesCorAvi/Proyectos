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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("descripción");
            $table->foreignId('jugador_id')->constrained(table: 'jugadores');
            $table->foreignId('inventario_id')->constrained();
            $table->decimal("monedero",7,2)->default(0,00);
            $table->timestamps();
            $table->unique(['jugador_id','inventario_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes','inventario_id');
    }
};
