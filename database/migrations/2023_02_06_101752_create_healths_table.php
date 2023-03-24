<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->id();
            $table->string('medical_history')->nullable();
            $table->string('student_height')->nullable();
            $table->string('student_weight')->nullable();
            $table->date('checkup_date')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('checkup_report')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('checkup_bp')->nullable();
            $table->string('checkup_hb')->nullable();
            $table->string('checkup_suger')->nullable();
            $table->string('checkup_hiv')->nullable();
            $table->string('checkup_tb')->nullable();
            $table->string('eye_problem')->nullable();
            $table->string('specs')->nullable();
            $table->string('checkup_remark')->nullable();
            $table->string('checkup_discription')->nullable();
            $table->string('checkup_marks')->nullable();                          
            $table->string('fitness_test_date')->nullable();
            $table->string('body_Composition_weight_row_score')->nullable();
            $table->string('body_Composition_height_row_score')->nullable();
            $table->string('cardio_resiratory_endurance_pacer')->nullable();
            $table->string('flexibility_trunk_lift')->nullable();
            $table->string('flexibility_sit_and_reach(L)')->nullable();
            $table->string('flexibility_sit_and_reach(R)')->nullable();
            $table->string('muscular_endurance_curl-ups')->nullable();
            $table->string('muscular_strength_standing_long_jump')->nullable();                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('healths');
    }
};
