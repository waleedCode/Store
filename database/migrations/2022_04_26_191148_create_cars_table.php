<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_color')->nullable();
            $table->string('board_number')->nullable();
            $table->string('car_name')->nullable();
            $table->string('have_cool')->nullable();
            $table->string('have_ice')->nullable();
            $table->string('Safety_perishable')->nullable();
            $table->string('Safety_breakable')->nullable();
            $table->string('Safety_flammable')->nullable();
            $table->string('Safety_explosive')->nullable();
            $table->string('Safety')->nullable();
            $table->string('have_insurance')->nullable();
            $table->string('have_cover')->nullable();
            $table->string('type')->nullable();
            $table->integer('truck_load')->nullable();
            $table->integer('weight')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
