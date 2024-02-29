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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('ingredientes');
            $table->integer('calories');
            $table->integer('protein');
            $table->integer('carbohydrates');
            $table->integer('fiber');
            $table->integer('sugar');
            $table->integer('total_fat');
            $table->integer('satured_fat');
            $table->integer('polyunsatured_fat');
            $table->integer('monounsatured_fat');
            $table->integer('cholesterol');
            $table->integer('sodium');
            $table->integer('potassium');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
