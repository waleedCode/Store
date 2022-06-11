<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sa_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client-id');
            $table->string('driver-id');
            $table->string('truck-type');
            $table->string('load-loc');
            $table->string('delevry-loc');
            $table->string('price');
            $table->string('app-money');
            $table->date('order-date');
            $table->string('load-code');
            $table->string('delevry-code');
            $table->string('order-invoice');
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
        Schema::dropIfExists('sa_orders');
    }
}
