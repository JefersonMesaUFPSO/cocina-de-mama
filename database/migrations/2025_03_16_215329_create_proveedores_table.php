<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            $table->string('nombre', 100)->unique();
            $table->string('contacto', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
