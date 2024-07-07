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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("Estadio");
            $table->string("aforo");
            $table->string("ciudad");
            $table->string("nombre");
            $table->string("año");



            $table->unsignedBigInteger('player_id')->nullable();
            $table->unsignedBigInteger('president_id')->nullable();

            $table->foreign('player_id')->references('id')->on('players')->onDelete('set null');
            $table->foreign('president_id')->references('id')->on('presidents')->onDelete('set null');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
