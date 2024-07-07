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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string("minuto");
            $table->longText("descripcion");

            $table->unsignedBigInteger('player_id')->nullable();
            $table->foreign('player_id')->references('id')->on('players')->onDelete('set null');

            $table->unsignedBigInteger('game_id')->nullable();
            $table->foreign('game_id')->references('id')->on('games')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
