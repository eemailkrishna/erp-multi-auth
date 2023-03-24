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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('roll_no')->descending();
            $table->string('stream')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('sms_contact')->nullable();
            $table->string('fee_category')->nullable();
            $table->string('admission_scheme')->nullable();
            $table->string('registration_fee')->nullable();
            $table->string('child_wiht_spe_need')->nullable();
            $table->string('stu_cwsn_des')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('father_contact1')->nullable();
            $table->string('admission_type')->nullable();
            $table->string('stu_new_old')->nullable();
            $table->string('stu_add')->nullable();
            $table->string('village_city')->nullable();
            $table->string('block')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->bigInteger('pincode')->nullable();
            $table->string('landmark')->nullable();
            $table->string('father_photo')->nullable();
            $table->string('mother_photo')->nullable();
            $table->text('remark')->nullable();
            $table->string('hostel')->nullable();
            $table->string('library')->nullable();
            $table->string('bus')->nullable();
            $table->date('doa')->nullable();
            $table->string('class_id');
            $table->string('section_id');
            $table->string('user_id');
            $table->timestamps();
            // $table->foreignId('class_id')->constrained('classes')->nullable();
            // $table->foreignId('section_id')->constrained('sections')->nullable();
            // $table->foreignId('user_id')->constrained('users')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
