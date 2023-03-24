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
        Schema::create('classwork_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('users');
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('section_id')->constrained('sections');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->date('allocated_date');
            $table->date('finish_date')->nullable();
            $table->string('reminder_task_1');
            $table->string('reminder_task_2')->nullable();
            $table->string('reminder_task_3')->nullable();
            $table->string('reminder_task_4')->nullable();
            $table->string('reminder_task_5')->nullable();    
            $table->string('reminder_remark');
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
        Schema::dropIfExists('classwork_plans');
    }
};