<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name')->nullable();
            $table->string('identity_number')->nullable()->unique();
            $table->string('identity_image')->nullable();
            $table->string('driving_license_number')->nullable()->unique();
            $table->string('driving_license_image')->nullable();
            $table->date('driving_license_exe_date')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('nationality')->nullable();
            $table->string('email')->nullable()->unique()->unique();
            $table->string('password')->nullable();
            $table->string('confirm_password')->nullable();
            $table->string('price')->nullable();

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
        Schema::dropIfExists('customers');
    }
}
