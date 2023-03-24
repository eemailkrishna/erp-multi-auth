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
        Schema::create('add_teamcreations', function (Blueprint $table) {
            $table->id();
            $table->string('event_name11')->nullable();
            $table->string('gender11')->nullable();
            $table->string('category11')->nullable();
            $table->string('staff')->nullable();
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
        Schema::dropIfExists('add_teamcreations');
    }
};
