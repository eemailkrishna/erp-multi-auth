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
        Schema::create('time_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('period_name');
                $table->time('start_time');
                $table->time('end_time');
                $table->string('teacher_name');
                $table->string('subject_preferred');
                $table->string('class_preferred');
                $table->time('time_from');
                $table->time('time_to');
                $table->string('monday_subject_name');
                $table->string('monday_teacher_name');
                $table->string('tuesday_subject_name');
                $table->string('tuesday_teacher_name');
                $table->string('wednesday_subject_name');
                $table->string('wednesday_teacher_name');
                $table->string('thursday_subject_name');
                
                $table->string('thursday_teacher_name');
                $table->string('friday_subject_name');
                $table->string('friday_teacher_name');
                $table->string('saturday_subject_name');
                $table->string('saturday_teacher_name');         
            $table->timestamps();
            $table->foreignId('class_id')->constrained('classes')->nullable();
            $table->foreignId('section_id')->constrained('sections')->nullable();
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
