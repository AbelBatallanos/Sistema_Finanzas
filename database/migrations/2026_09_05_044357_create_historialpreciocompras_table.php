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
        Schema::create('historialprecio', function (Blueprint $table) {
            $table->id();
            $table->decimal("precio_unitario", 12, 2)->default(0);
            $table->string("moneda", 30);
            $table->string("origen", 100);
            $table->foreignId("sucursal_id")->nullable()->constrained("sucursals")->onDelete("set null");
            $table->foreignId('producto_id')->nullable()->constrained('productos')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historialpreciocompras');
    }
};
