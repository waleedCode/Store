<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('com_name')->nullable();
            $table->string('Commercial_record')->nullable()->unique();
            $table->string('Commercial_record_image')->nullable();
            $table->string('tax_number')->nullable()->unique();
            $table->string('tax_number_image')->nullable();
            $table->string('ministry_transport_license-number')->nullable()->unique();
            $table->string('ministry_transport_license-image')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_number')->nullable()->unique();
            $table->string('bank_number_image')->nullable();
            $table->string('play_card_image')->nullable();
            $table->string('play_card_exe_date')->nullable();


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
        Schema::dropIfExists('companies');
    }
}
