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
        Schema::create('licitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('expediente');
            $table->string('tipo');
            $table->text('objeto');
            $table->string('estado');
            $table->float('importe');
            $table->string('fechas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licitaciones');
    }
};
