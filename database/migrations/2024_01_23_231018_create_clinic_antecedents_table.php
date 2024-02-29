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
        Schema::create('clinic_antecedents', function (Blueprint $table) {
            $table->id();
            $table->text('actual_problems')->nullable;
            $table->text('anotations')->nullable;
            $table->string('diagnosted_disease')->nullable;
            $table->string('important_suffered_disease')->nullable;
            $table->string('take_medicine')->nullable;
            $table->string('dose_medicine')->nullable;
            $table->date('date_medicine')->nullable;
            $table->string('family_disease')->nullable;
            $table->string('current_pregnacy')->nullable;
            $table->string('refer_pacient');
            $table->string('refer_fum');
            $table->string('take_anticonceptive');
            $table->string('take_anticonceptive_dose')->nullable;
            $table->string('take_anticonceptive_name')->nullable;
            $table->string('climateric');
            $table->string('climateric_date')->nullable;
            $table->string('therapy');
            $table->string('therapy_name')->nullable;
            $table->string('therapy_dose')->nullable;
            $table->time('wake_time');
            $table->time('breakfast_time');
            $table->time('lunch_time');
            $table->time('dinner_time');
            $table->time('last_food_time');
            $table->string('intensity_activity');
            $table->string('exersice_type');
            $table->integer('exersice_frecuency');
            $table->integer('exersice_duration');
            $table->date('exersice_date_init');
            $table->integer('alcohol_consume_days')->nullable;
            $table->integer('alcohol_consume_amount')->nullable;
            $table->integer('tobacco_consume_days')->nullable;
            $table->integer('tobacco_consume_amount')->nullable;
            $table->integer('coffe_consume_days')->nullable;
            $table->integer('coffe_consume_amount')->nullable;
            $table->string('general_aspect');
            $table->string('chemical_date_relevants')->nullable;
            $table->string('required_analysis_name')->nullable;
            $table->integer('number_foods_at_day');
            $table->integer('house_foods_week');
            $table->integer('outside_foods_week');
            $table->integer('house_foods_weekend');
            $table->integer('outside_foods_weekend');
            $table->time('time_food_week');
            $table->time('time_food_weekend');
            $table->string('who_prepares_his_food');
            $table->string('snacks_between_food');
            $table->string('feeding_habits_modify_recently');
            $table->string('feeding_habits_modify_recently_reason')->nullable;
            $table->string('feeding_habits_modify_recently_description')->nullable;
            $table->integer('appetite_indicator');
            $table->string('most_hungry_time');
            $table->string('prefered_foods');
            $table->string('disgusting_foods')->nullable;
            $table->string('intolerant_foods')->nullable;
            $table->string('alergic_foods')->nullable;
            $table->string('take_suplements');
            $table->string('take_suplements_dose')->nullable;
            $table->string('take_suplements_reason')->nullable;
            $table->string('take_suplements_variable_consupsion_feelings')->nullable;
            $table->string('add_salt_to_prepared_foods');
            $table->string('had_special_diet_numbers')->nullable;
            $table->string('had_special_diet_type')->nullable;
            $table->date('had_special_diet_date')->nullable;
            $table->integer('had_special_diet_duration')->nullable;
            $table->string('had_special_diet_reason')->nullable;
            $table->string('had_special_diet_percent_attachment')->nullable;
            $table->string('had_special_diet_results')->nullable;
            $table->string('take_medicines_lose_weigth_name');
            $table->text('breakfast_description');
            $table->text('snack_description');
            $table->text('dinner_description');
            $table->text('snack_evening_description');
            $table->text('last_food_description');
            $table->integer('glass_water_number');
            $table->integer('glass_other_drinks');
            $table->integer('glass_other_drinks_weekend_number');
            $table->integer('glass_other_drinks_weekend_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_amtecedents');
    }
};
