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
        Schema::create('audios_libro', function (Blueprint $table) {
            $table->id();
            $table->string('audio');
            $table->foreignId('libro_id')->constrained(table:'libros')->nullable();
            $table->foreignId('user_id')->constrained(table:'users')->nullable();
            $table->integer('idioma_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audios_libro');
    }
};
