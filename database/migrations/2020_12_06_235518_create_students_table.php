<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('batch_id');
            $table->string('accept_date');
            $table->text('name');
            $table->date('dob');
            $table->string('age');
            $table->string('phone');
            $table->string('email');
            $table->string('education');
            $table->integer('first_paid');
            $table->integer('second_paid');
            $table->string('address');
            $table->string('objective')->nullable();
            $table->string('comment')->nullable();
            $table->string('bpro');
            $table->string('note')->nullable();
            $table->timestamps();

            $table->foreign('course_id')
                  ->references('id')->on('courses')
                  ->onDelete('cascade');
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
}
