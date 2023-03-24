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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->enum('emp_categories', ['Teaching', 'Non Teaching']);
            $table->string('emp_father');
            $table->string('emp_qualification');
            $table->string('blood_group');
            $table->bigInteger('emp_id_prefix');
            $table->string('emp_pan_card_no');
            $table->string('emp_uid_no');
            $table->bigInteger('emp_sssm_id');
            $table->string('emp_experience_latter');
            $table->string('emp_degree');
            $table->string('emp_id_proof');
            $table->string('emp_other_document');
            $table->string('emp_designation');
            $table->string('emp_class_preferred');
            $table->string('emp_rf_id_no');
            $table->string('emp_subject_preferred');
            $table->date('doj');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
