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
        Schema::create('portaria', function (Blueprint $table) {
            $table->bigInteger('pk_numero_portaria')->primary();
            $table->date('data_criacao');
            $table->date('data_encerramento')->nullable();
            $table->string('descricao', 300);
            $table->enum('tipo_acesso',['publico', 'privado']);
            $table->binary('arquivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portaria');
    }
};
