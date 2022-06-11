<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('transport_type');
            $table->string('board number');
            $table->string('model');
            $table->string('Brand');
            $table->string('truck_registration_expiry_date');
            $table->string('operating_card_number');
            $table->string('operating_card_image');
            $table->string('truck_registration_image');
            $table->string('truck_owner');
            $table->string('truck_driver');

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
        Schema::dropIfExists('trucks');
    }
}
