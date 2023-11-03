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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario')
            ->nullable()
            ->unique();
            $table->string('contraseña');
            $table->boolean('Habilitado');
            $table->date('fecha');
            $table->date('fecha_creación');
            $table->date('fecha_modificación');
            $table->string('usuario_creación');
            $table->string('usuario_modificación');
            $table->unsignedBigInteger('id_persona')->nullable();
            $table->unsignedBigInteger('id_rol')->nullable();
            $table->foreign('id_persona')
            ->references('id')
            ->on('personas')
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
        Schema::dropIfExists('usuarios');
    }
};
