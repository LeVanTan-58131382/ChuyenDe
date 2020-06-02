<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsageNormGovernmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usage_norm_governments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('level');
            $table->integer('living_expenses_type_id'); // mã loại phí
            $table->double('usage_index_from'); // chỉ số sử dụng từ
            $table->double('usage_index_to'); // chỉ số sử dụng đến
            $table->decimal('price_biggest',15, 2); // giá tiền cao nhất
            $table->decimal('price_smallest',15, 2); // giá tiền thấp nhất
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
        Schema::dropIfExists('usage_norm_governments');
    }
}
