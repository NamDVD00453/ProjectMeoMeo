<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('orderId');
            $table->bigInteger('orderDate');
            $table->bigInteger('orderDeliveryTime');
            $table->integer('customerId');
            $table->string('shipName');
            $table->string('shipPhone');
            $table->string('shipAddress');
            $table->string('customerEmail');
            $table->integer('totalPrice');
            $table->string('orderDetail');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
