<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id_compra');
            $table->unsignedBigInteger('id_proveedor');
            $table->date('fecha')->default(now());
            $table->decimal('total', 10, 2)->default(0.00);

            $table->foreign('id_proveedor')
                  ->references('id_proveedor')
                  ->on('proveedores')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
