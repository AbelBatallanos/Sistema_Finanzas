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
        Schema::create('detalleslistacompras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listacompra_id')->constrained('listacompras')->onDelete('cascade');
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->foreignId('estado_id')->constrained('estados')->onDelete('cascade');
            $table->decimal('cantidad_min', 12, 2)->nullable();
            $table->decimal('cantidad_max', 12, 2)->nullable();
            $table->decimal('precio_unitario_min', 12, 2)->nullable();
            $table->decimal('precio_unitario_max', 12, 2)->nullable();
            $table->string("prioridad", 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleslistacompras');
    }
};
