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
        Schema::create('fee_structure', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id');
            $table->string('fee_category');
            $table->string('exam_fee');
            $table->string('tuition_fee');
            $table->string('sport_fee');
            $table->string('admission_fee');
            $table->string('transport_fee');
            $table->string('total_fee');
            $table->string('updated_by');
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
        Schema::dropIfExists('fee_structure');
    }
};
