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
      
   
           Schema::create('favoritos', function (Blueprint $table) {
               $table->id();
               $table->int("user_id");
               $table->foreign("user_id")->refences("id")->on("user");
               $table->int("movie_id");
               $table->foreign("movie_id")->refences("id")->on("movie");
              });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favoritos_tabel');
    }
};
