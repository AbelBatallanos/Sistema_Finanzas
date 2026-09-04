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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->integer("numero_comprobante");
            $table->string("tipo_comprobante");
            $table->decimal("monto_total", 12, 2);
            $table->decimal("monto_impuesto", 12, 2);
            $table->string("url_digitalizacion")->nullable();
            $table->foreignId("compra_id")->nullable()->constrained("compras")->onDelete("set null");
            $table->foreignId("sucursal_id")->nullable()->constrained("sucursals")->onDelete("set null");
            $table->foreignId('estado_id')->nullable()->constrained('estados')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
