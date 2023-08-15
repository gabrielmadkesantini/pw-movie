<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    protected $connection = "pgsql";
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sinopse');
            $table->date('ano');
            $table->string('imagem');
            $table->int("categoria_id");
            $table->foreign('categoria_id')->references("id")->on('categorias');
            $table->string('link');
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
