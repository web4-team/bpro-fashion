<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ab_item_id');
            $table->date('date');
            $table->string('customer_name');
            $table->integer('stock_out');
            $table->integer('per_price');
            $table->integer('stock_in');
            $table->string('supplier_name');
            $table->integer('in_total');
            $table->integer('open_amount');
            $table->string('choose');

            


            $table->foreign('ab_item_id')
                  ->references('id')->on('ab_items')
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
        Schema::dropIfExists('ab_sales');
    }
}
