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
        Schema::create('hostals', function (Blueprint $table) {
            $table->id();
            $table->string('hostal_name');
            $table->string('hostal_type');
            $table->string('hostal_no_of_room');
            $table->string('hostal_total_capacity');
            $table->string('hostal_facilities');
            $table->string('hostal_laundary_services');
            $table->string('hostal_mess');
            $table->string('hostal_warden_name');
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
        Schema::dropIfExists('hostals');
    }
};
