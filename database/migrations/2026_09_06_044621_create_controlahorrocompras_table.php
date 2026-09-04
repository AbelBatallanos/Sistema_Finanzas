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
        Schema::create('controlahorrocompras', function (Blueprint $table) {
            $table->id();
            $table->integer("porcentaje_eficiencia");
            $table->decimal("diferencia", 12, 2);
            $table->decimal("gasto_real", 12, 2);
            $table->decimal("presupuesto_estimado", 12, 2);
            $table->foreignId("compra_id")->nullable()->constrained("compras")->onDelete("set null");
            $table->foreignId("sucursal_id")->nullable()->constrained("sucursals")->onDelete("set null");
            $table->foreignId("factura_id")->nullable()->constrained("facturas")->onDelete("set null");
            $table->foreignId("lista_id")->nullable()->constrained("listacompras")->onDelete("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controlahorrocompras');
    }
};
