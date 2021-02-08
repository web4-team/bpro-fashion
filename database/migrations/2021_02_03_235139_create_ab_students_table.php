<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ab_code');
            $table->unsignedBigInteger('ab_course_id');
            $table->unsignedBigInteger('ab_batch_id');
            $table->string('ab_accept_date');
            $table->text('ab_name');
            $table->date('ab_dob');
            $table->string('ab_age');
            $table->string('ab_phone');
            $table->string('ab_email');
            $table->string('ab_education');
            $table->integer('ab_first_paid');
            $table->integer('ab_second_paid');
            $table->string('ab_address');
            $table->string('ab_objective')->nullable();
            $table->string('ab_comment')->nullable();
            $table->string('ab_bpro');
            $table->string('ab_note')->nullable();
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
        Schema::dropIfExists('ab_students');
    }
}
