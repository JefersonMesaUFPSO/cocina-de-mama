<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('factura_metodos_pago', function (Blueprint $table) {
            $table->unsignedBigInteger('id_factura');
            $table->unsignedBigInteger('id_metodo_pago');
            $table->decimal('monto_pagado', 10, 2);

            $table->primary(['id_factura', 'id_metodo_pago']);

            $table->foreign('id_factura')
                  ->references('id_factura')
                  ->on('facturas')
                  ->onDelete('cascade');

            $table->foreign('id_metodo_pago')
                  ->references('id_metodo_pago')
                  ->on('metodos_pago')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('factura_metodos_pago');
    }
};
