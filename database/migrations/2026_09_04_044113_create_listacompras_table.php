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
        Schema::create('listacompras', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 100);
            $table->decimal("presupuesto", 12, 2);
            $table->foreignId('estado_id')->constrained('estados')->onDelete('cascade');
            $table->foreignId('creador_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('sucursal_id')->constrained('sucursals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listacompras');
    }
};
