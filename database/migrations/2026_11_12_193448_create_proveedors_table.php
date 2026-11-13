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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('rtn')->unique();
            $table->string('empresa');
            $table->string('contacto');
            $table->string('telefono');
            $table->string('categoria');
            $table->decimal('limite_credito',12,2);
            $table->integer('dias_credito');
            $table->date('fecha_registro');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
