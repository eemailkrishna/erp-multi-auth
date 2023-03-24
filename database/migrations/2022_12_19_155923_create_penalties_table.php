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
        Schema::create('penalties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('student_search');
            $table->string('student_name');
            $table->string('student_class');
            $table->string('student_section');
            $table->bigInteger('student_roll_no');
            $table->string('penalty_amount');
            $table->string('penalty_reason');
            $table->string('penalty_remark');
            $table->timestamps();
            // $table->foreignId('user_id')->constrained('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penalties');
    }
};
