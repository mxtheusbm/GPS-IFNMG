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
        Schema::disableForeignKeyConstraints();

        Schema::create('membros_portarias', function (Blueprint $table) {
            $table->bigInteger('pk_fk_numero_portaria');
            $table->bigInteger('pk_fk_matricula_siape');
            $table->primary('pk_fk_numero_portaria', 'pk_fk_matricula_siape');
            $table->foreign('pk_fk_numero_portaria', 'pk_fk_matricula_siape')->references('pk_numero_portaria', 'pk_matricula_siape')->on('portaria','servidor');
            $table->bigInteger('fk_id_pessoa_externa')->nullable();
            $table->foreign('fk_id_pessoa_externa')->references('pk_id')->on('pessoa_externa');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membros_portarias');
    }
};
