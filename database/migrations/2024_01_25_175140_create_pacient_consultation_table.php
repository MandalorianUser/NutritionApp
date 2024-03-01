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
        if(!Schema::hasTable('pacient_consultation')){
            Schema::create('pacient_consultation', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('pacient_id'); // Agregar esta línea para crear la columna pacient_id
                $table->foreign('pacient_id')->references('id')->on('pacients');
                $table->date('consultation_date');
                $table->json('observations')->nullable();
                $table->json('body_measures')->nullable();
                $table->json('body_indices')->nullable();
                $table->json('menu')->nullable();
                $table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacient_consultation');
    }
};
