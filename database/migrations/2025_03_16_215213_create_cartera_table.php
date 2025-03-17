<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cartera', function (Blueprint $table) {
            $table->bigIncrements('id_cartera');
            $table->unsignedBigInteger('id_cliente');
            $table->decimal('saldo', 10, 2)->default(0.00);
            $table->date('ultimo_pago')->nullable();

            $table->foreign('id_cliente')
                  ->references('id_cliente')
                  ->on('clientes')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cartera');
    }
};
