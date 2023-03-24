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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            
            $table->enum('enquiry_type', ['For Admission', 'For Job', 'Other']);
            $table->string('enquiry_type_other');
            $table->date('enquiry_date');
            $table->string('enquiry_name');
            $table->string('enquiry_father_name');
            $table->string('select_class_name');
            $table->string('enquiry_address');
            $table->string('enquiry_contact_no');
            $table->date('enquiry_next_follow_up_date');
            $table->string('enquiry_remark_1');
            $table->string('previous_school_name');
            $table->string('enquiry_staff_name');
            $table->string('enquiry_remark_2');
            $table->string('student_medium');
            // $table->string('created_at');
            // $table->string('updated_at');
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
        Schema::dropIfExists('enquiries');
    }
};
