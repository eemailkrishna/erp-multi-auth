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
        Schema::create('libraryissuebooks', function (Blueprint $table) {
            $table->id();
             $table->string('student_name');
             $table->string('student_section');
             $table->string('id_card');
             $table->string('book_title');
             $table->string('author_name');
             $table->date('issue_date');
             $table->date('due_date');
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
        Schema::dropIfExists('libraryissuebooks');
    }
};
