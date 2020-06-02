<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('vehicle_type_id');
            $table->integer('living_expenses_type_id');
            $table->integer('month_use')->nullable();
            $table->integer('amount')->default(0); // số lượng
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
        Schema::dropIfExists('vehicle_users');
    }
}
