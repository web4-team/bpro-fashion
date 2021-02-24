<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbPayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_payrolls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ab_employee_id');
            $table->string('date');
            $table->integer('salary');
			$table->integer('commission')->nullable();
			$table->integer('bonus')->nullable();
			$table->integer('overtime')->nullable();	
			$table->integer('leave')->nullable();	
			$table->integer('late')->nullable();	
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
        Schema::dropIfExists('ab_payrolls');
    }
}
