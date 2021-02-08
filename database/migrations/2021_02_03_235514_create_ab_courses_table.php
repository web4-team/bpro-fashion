<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_courses', function (Blueprint $table) {
            $table->id();
            $table->string('ab_name');
            $table->unsignedBigInteger('ab_batch_id');
            $table->string('ab_type');
            $table->integer('ab_fees');
            $table->integer('ab_discount');
            $table->integer('ab_amount');
            $table->string('ab_date');
            $table->string('ab_duration');
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
        Schema::dropIfExists('ab_courses');
    }
}
