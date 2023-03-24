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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->string('reminder_task_1');
            $table->string('reminder_task_2')->nullable();
            $table->string('reminder_task_3')->nullable();
            $table->string('reminder_task_4')->nullable();
            $table->string('reminder_task_5')->nullable();
            $table->date('allocated_date');
            $table->date('finish_date')->nullable();
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
        Schema::dropIfExists('reminders');
    }
};