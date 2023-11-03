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
        Schema::create('enlaces', function (Blueprint $table) {
            $table->id();
            $table->string('descripción');
            $table->string('usuario_creación');
            $table->string('usuario_modificación');
            $table->unsignedBigInteger('id_pagina')->nullable();
            $table->unsignedBigInteger('id_rol')->nullable();
            $table->foreign('id_pagina')
            ->references('id')
            ->on('paginas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_rol')
            ->references('id')
            ->on('rols')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enlaces');
    }
};
