<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtbotPayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artbot_payrolls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->string('date');
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
        Schema::dropIfExists('artbot_payrolls');
    }
}
