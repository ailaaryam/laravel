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
        Schema::create('anuncio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 255);
            $table->string('descricao', 255);
            $table->string('preco', 255);
            $table->string('data_publicacao', 255);
            $table->string('cor', 255);

            $table->unsignedBigInteger('id_proprietario');
            $table->unsignedBigInteger('id_veiculo');
            
            
            $table->foreign('id_proprietario')
            ->references('id')->on('proprietario')
            ->onDelete('cascade');

            $table->foreign('id_veiculo')
            ->references('id')->on('veiculo')
            ->onDelete('cascade');

            $table->unique('id_veiculo');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncio');
    }
};
