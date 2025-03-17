<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cartera_metodo_pago', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cartera');
            $table->unsignedBigInteger('id_metodo_pago');
            $table->decimal('monto_pagado', 10, 2);

            $table->primary(['id_cartera', 'id_metodo_pago']);

            $table->foreign('id_cartera')
                  ->references('id_cartera')
                  ->on('cartera')
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
        Schema::dropIfExists('cartera_metodo_pago');
    }
};
