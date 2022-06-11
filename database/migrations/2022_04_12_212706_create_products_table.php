<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('board_number')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->date('car_model')->nullable();
            $table->string('car_brand')->nullable();
            $table->string('card_expiration_date')->nullable();
            $table->string('vehicle_registration_expiry_date')->nullable();
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
        Schema::dropIfExists('products');
    }
}
