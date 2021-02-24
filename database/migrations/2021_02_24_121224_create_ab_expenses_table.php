<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ab_income_id');
            $table->unsignedBigInteger('ab_category_id');
            $table->string('description');
            $table->integer('amount');
            $table->integer('given');
            $table->date('date');

            $table->foreign('ab_income_id')
                  ->references('id')->on('ab_incomes')
                  ->onDelete('cascade');
            $table->foreign('ab_category_id')
                  ->references('id')->on('ab_categories')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('ab_expenses');
    }
}
