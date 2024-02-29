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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->float('calories');
            $table->float('protein');
            $table->float('carbohydrates');
            $table->float('fiber');
            $table->float('sugar');
            $table->float('fat');
            $table->float('fat_satured');
            $table->float('fat_polyunsatured');
            $table->float('fat_monounsatured');
            $table->float('cholesterol');
            $table->float('sodium');
            $table->float('pattasium');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
