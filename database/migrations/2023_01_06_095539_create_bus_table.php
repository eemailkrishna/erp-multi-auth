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
        Schema::create('bus', function (Blueprint $table) {
            $table->id();        

            $table->string('bus_name');
            $table->string('bus_company');
            $table->string('bus_model_no');
            $table->string('bus_no');
            $table->string('bus_owner_name');
            $table->string('bus_owner_contact_no');
            $table->string('bus_registration_no');
            $table->string('capacity_of_bus');
            $table->string('bus_photo');
            $table->string('bus_registration_card_photo');
            $table->string('bus_insurance_photo');
            $table->string('bus_other_document_photo');
            $table->string('bus_pollution_certificate_photo');
            $table->string('bus_fitness_certicate_photo');
            $table->string('bus_permit_certificate_photo');
            $table->string('bus_speed_certificate_photo');
            $table->string('bus_gps_certificate_photo');
            $table->string('bus_camera_certificate_photo');

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
        Schema::dropIfExists('bus');
    }
};
