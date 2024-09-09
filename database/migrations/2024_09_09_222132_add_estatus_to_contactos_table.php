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
        Schema::table('_contacto', function (Blueprint $table) {
            // Agregar la columna 'mensaje'
            $table->text('mensaje')->after('correo'); // Asegúrate de que la posición es correcta
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('_contacto', function (Blueprint $table) {
            // Eliminar la columna 'mensaje' si es necesario revertir la migración
            $table->dropColumn('mensaje');
        });
    }
};
