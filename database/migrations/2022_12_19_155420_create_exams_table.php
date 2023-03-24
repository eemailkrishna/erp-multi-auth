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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id');
            $table->integer('section_id');
            $table->string('exam_name');
            $table->date('exam_date');
            $table->string('exam_type');
            $table->text('exam_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *            // $table->enum('exam_type', ['Half-Yearly','Yearly', 'other']);

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
};