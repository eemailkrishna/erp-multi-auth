<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Node\Block\Document;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name');
            $table->string('emp_gender');
            $table->string('emp_dob');
            $table->string('emp_father');
            $table->string('emp_email');
            $table->string('emp_mobile');
            $table->string('emp_mobile_new');
            $table->string('emp_address');
            $table->string('emp_qualification');
            $table->string('blood_Group');
            $table->string('emp_id_prefix');
            $table->string('emp_sssm_id');
            $table->string('emp_shift');
            // Document Upload
            $table->string('emp_photo');
            $table->string('emp_experience_latter');
            $table->string('emp_degree');
            $table->string('emp_id_proof');
            $table->string('emp_other_document1')->nullable();
            $table->string('emp_other_document2')->nullable();
            //Salary Details
            $table->string('emp_doj');
            $table->string('emp_rf_id_no');
            $table->string('emp_categories');
            $table->string('emp_class_preferred')->nullable();
            $table->string('emp_subject_preferred')->nullable();
            $table->string('emp_designation');
            // Salary Details
            $table->string('emp_pan_card_no');
            $table->string('emp_uid_no');
            $table->string('emp_bank_name');
            $table->string('emp_account_no');
            $table->string('emp_ifsc_code');
            $table->string('emp_basic_salary');
            $table->string('emp_pf_number');
            $table->string('pf_deduction');
            $table->string('tds_deduction');
            $table->string('esic_deduction');
            $table->string('ptax_deduction');
            $table->string('hra_amount');
            $table->string('da_amount');
            $table->string('emp_allowance');
            $table->string('remarks');
            // Leave Details
            $table->string('emp_leave_cl');
            $table->string('emp_earn_leave_pl');
            $table->string('emp_leave_sl');
            $table->string('emp_leave_other');



            $table->string('school_name');
            $table->timestamps();

            // $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
