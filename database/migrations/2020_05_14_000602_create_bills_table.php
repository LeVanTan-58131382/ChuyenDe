<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_id'); // mã khách hàng
            $table->integer('living_expenses_type_id'); // mã loại phí
            $table->integer('price_regulation_id'); // mã quy định
            $table->integer('payment_month'); // tháng phải thanh toán
            $table->decimal('money_to_pay',15, 2); // số tiền phải trả
            $table->integer('usage_level_max')->nullable(); // mức sử dụng cao nhất đối với điện và nước
            $table->boolean('paid')->default(0);
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
        Schema::dropIfExists('bills');
    }
}
