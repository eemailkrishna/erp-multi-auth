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
        Schema::create('hostal_room_details', function (Blueprint $table) {
            $table->id();
            $table->string('hostal_room_no');
            $table->string('hostal_room_bed_type');
            $table->string('hostal_attach_washroom');
            $table->string('hostal_charge_per_student');
            $table->timestamps();
            $table->unsignedBigInteger('hostal_id');
            $table->foreign('hostal_id')->references('id')->on('hostals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostal_room_details');
    }
};
