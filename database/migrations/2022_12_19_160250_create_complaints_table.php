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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer('class_id');
            $table->string('complaint_name');
            $table->text('complaint');
            $table->string('image');
            $table->string('remark');
            $table->string('update_by');
            $table->text('reply');
            $table->string('complaint_type');
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
        Schema::dropIfExists('complaints');
    }
};
