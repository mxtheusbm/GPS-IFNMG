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

        Schema::create('servidor', function (Blueprint $table) {
            $table->bigInteger('pk_matricula_siape')->primary();
            $table->string('nome', 60);
            $table->string('email', 45)->unique();
            $table->string('senha', 45);
            $table->string('cargo', 45);
            $table->enum('nivel_acesso',['servidor','admin', 'super_admin']);
            $table->binary('foto')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servidor');
    }
};
