<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->string('nombre', 100);
            $table->string('telefono', 15)->nullable();
            $table->text('direccion')->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->string('documento', 20)->unique()->nullable();
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
            $table->unsignedBigInteger('registrado_por')->nullable();
            // Clave foránea hacia empleados
            $table->foreign('registrado_por')
                  ->references('id_empleado')
                  ->on('empleados')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
