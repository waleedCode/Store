<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers_companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_code');
            $table->string('company_name');
            $table->string('Commercial_record_number');
            $table->string('Commercial_record_image');
            $table->string('transportation_license_number');
            $table->string('tax_number');
            $table->string('bank_number_iban');
            $table->string('iban_iamge');
            $table->string('password');
            $table->string('password_confirmation');
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
        Schema::dropIfExists('drivers_companies');
    }
}
