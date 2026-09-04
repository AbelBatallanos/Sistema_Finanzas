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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto_total', 12, 2);
            $table->dateTime('fecha_compra');
            $table->string("metodo_pago", 50);
            $table->foreignId('comprador_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lista_compra_id')->constrained('listacompras')->onDelete('cascade');
            $table->foreignId('provedor_id')->nullable()->constrained('provedors')->onDelete('cascade');
            $table->foreignId('sucursal_id')->constrained('sucursals')->onDelete('cascade');
            $table->foreignId('estado_id')->constrained('estados')->onDelete('cascade');
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
