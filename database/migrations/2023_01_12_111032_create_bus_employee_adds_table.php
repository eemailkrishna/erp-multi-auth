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
        Schema::create('bus_employee_adds', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name');
            $table->string('emp_gender');
            $table->string('emp_dob');
            $table->string('emp_father');
            $table->string('emp_email');
            $table->string('emp_mobile');
            $table->string('emp_address');
            $table->string('emp_qualification');
            $table->string('emp_photo');
            $table->string('emp_doj');
            $table->string('emp_designation');
            $table->string('emp_casual_leave');
            $table->string('emp_pan_card_no');
            $table->string('emp_adhar_no');
            $table->string('emp_bank_name');
            $table->string('emp_account_no');
            $table->string('emp_ifsc_code');
            $table->string('emp_salary');
            $table->string('emp_pf_number');
            $table->string('remarks');
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
        Schema::dropIfExists('bus_employee_adds');
    }
};
