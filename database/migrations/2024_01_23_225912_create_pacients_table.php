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
        if(!Schema::hasTable('pacients')){
            Schema::create('pacients', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('age');
                $table->string('sex');
                $table->date('date_birth');
                $table->string('civil_status');
                $table->string('scholarity');
                $table->string('ocupation');
                $table->string('direction');
                $table->string('phonenumber');
                $table->string('email');
                $table->string('reason_consultation');
                $table->timestamps();
            });
        
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacients');
    }
};
