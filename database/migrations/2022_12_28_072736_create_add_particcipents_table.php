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
        Schema::create('add_particcipents', function (Blueprint $table) {
            $table->id();
            $table->string('participate_type')->nullable();
            $table->string('event_name');
            $table->string('school_name');
            $table->string('student_name');
            $table->string('student_father_name');
            $table->string('student_mother_name');
            $table->string('class');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->string('category');
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
        Schema::dropIfExists('add_particcipents');
    }
};
