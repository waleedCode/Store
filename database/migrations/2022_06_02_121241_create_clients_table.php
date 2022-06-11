<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_code')->unique();
            $table->string('identity_number');
            $table->string('full_name');
            $table->string('phone')->unique();
            $table->string('nationality');
            $table->string('bank_name');
            $table->string('iban_number')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('password_confirmation');
            $table->string('identity_image');
            $table->string('iban_image');
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
        Schema::dropIfExists('clients');
    }
}
