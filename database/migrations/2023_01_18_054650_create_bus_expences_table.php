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
        Schema::create('bus_expences', function (Blueprint $table) {
            $table->id();
            $table->string('bus_name');
            $table->string('bus_company');
            $table->string('bus_model_no');
            $table->string('bus_no');
            $table->string('bus_expence_remark');
            $table->string('maintainance_date');
            $table->string('garage_shop');
            $table->string('bus_expence_amount');
            $table->string('bill_date');
            $table->string('payment_date');
            $table->string('bus_reading');
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
        Schema::dropIfExists('bus_expences');
    }
};
