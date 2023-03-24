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
        Schema::create('librarybooks', function (Blueprint $table) {
            $table->id();
             $table->string('book_no');
             $table->string('book_code_no');
             $table->string('division');
             $table->string('languase');
             $table->string('book_type');
             $table->string('book_title');
             $table->string('author');
             $table->string('main_class');
             $table->string('subject');
             $table->string('publisher_name');
             $table->date('publisher_date');
             $table->string('no_of_copy');
             $table->string('Vendor');
             $table->string('cost_of_book');
             $table->date('entery_date');
             $table->string('other_information');
             

           
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
        Schema::dropIfExists('librarybooks');
    }
};
