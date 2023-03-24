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
        Schema::create('student_bus_lists', function (Blueprint $table) {
            $table->id();
            $table->string('adm_no');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('std_class');
            $table->string('std_roll_no');
            $table->string('address');
            $table->string('pickup');
            $table->string('bus_no');
            $table->string('bus_route');
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
        Schema::dropIfExists('student_bus_lists');
    }
};
