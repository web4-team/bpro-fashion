<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateArtbotItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artbot_items', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('customer');
            $table->integer('paid');
            $table->date('due_date')->default(NULL);
            $table->string('remark')->default(NULL);
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
        Schema::dropIfExists('artbot_items');
    }
}
