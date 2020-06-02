<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('block');
            $table->integer('floor');
            $table->integer('apartment');
            $table->boolean('hired')->default(0);
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
        Schema::dropIfExists('apartment_addresses');
    }
}
